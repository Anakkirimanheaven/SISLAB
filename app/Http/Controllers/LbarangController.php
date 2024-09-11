<?php

namespace App\Http\Controllers;

use App\Models\Lbarang;
use App\Models\Pbarang;
use App\Models\Kondisi;
use Illuminate\Http\Request;

class LbarangController extends Controller
{
    public function index()
    {
        $lbarang = Lbarang::latest()->get();
        return view('lbarang.index', compact('lbarang'));
    }

    public function create()
    {
        $lbarang = Lbarang::all();
        $pbarang = Pbarang::all();
        $kondisi = Kondisi::all();
        return view('lbarang.create', compact('lbarang', 'pbarang', 'kondisi'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pbarang' => 'required|unique:pbarangs',
            'kondisi' => 'required',
            'dokumentasi' => 'required|max:2048|mimes:jpg,jpeg,png',
            'keterangan' => 'required',
        ]);

        $lbarang = new Lbarang();
        $lbarang->id_pbarang = $request->id_pbarang;
        $lbarang->kondisi = $request->kondisi;
        $lbarang->keterangan = $request->keterangan;
        if ($request->hasFile('dokumentasi')) {
            $img = $request->file('dokumentasi');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('public/images/lbarang/', $name);
            $lbarang->dokumentasi = $name;
        }

        $lbarang->save();
        return redirect('lbarang.index');
    }

    public function edit($id)
    {
        $lbarang = Lbarang::findOrFail($id);
        $pbarang = Pbarang::all();
        $kondisi = Kondisi::all();
        return view('lbarang.edit', compact('lbarang', 'pbarang', 'kondisi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_pbarang' => 'required|unique:pbarangs',
            'kondisi' => 'required',
            // 'dokumentasi' => 'required|max:2048|mimes:jpg,jpeg,png',
            'keterangan' => 'required',
        ]);

        $lbarang = Lbarang::findOrFail($id);
        $lbarang->id_pbarang = $request->id_pbarang;
        $lbarang->kondisi = $request->kondisi;
        $lbarang->keterangan = $request->keterangan;
        if ($request->hasFile('dokumentasi')) {
            $img = $request->file('dokumentasi');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('public/images/lbarang/', $name);
            $lbarang->dokumentasi = $name;
        }

        $lbarang->save();
        return redirect('lbarang.index');
    }

    public function destroy(Lbarang $lbarang)
    {
        $lbarang = Lbarang::findOrFail($id);
        $lbarang->deleteImage();
        $lbarang->delete();

        return redirect()->route('lbarang.index')
            ->with('success', 'data berhasil dihapus');
    }
}
