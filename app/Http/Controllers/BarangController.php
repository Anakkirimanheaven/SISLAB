<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::latest()->get();
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required',
            'id_merk' => 'required',
            'ruangan' => 'required',
            'id_kondisi' => 'required',
            'posisi' => 'required',
            'spek' => 'required'
        ]);

        $barang =  new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->id_merk = $request->id_merk;
        $barang->ruangan = $request->ruangan;
        $barang->id_kondisi = $request->id_kondisi;
        $barang->posisi = $request->posisi;
        $barang->spek = $request->spek;

        $barang->save();

        return redirect()->route('barang.index')->with('success', 'Barang Berhasil Ditambah');
    }

    public function show(Barang $barang)
    {
        //
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_barang' => 'required',
            'id_merk' => 'required',
            'ruangan' => 'required',
            'id_kondisi' => 'required',
            'posisi' => 'required',
            'spek' => 'required'
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->id_merk = $request->id_merk;
        $barang->ruangan = $request->ruangan;
        $barang->id_kondisi = $request->id_kondisi;
        $barang->posisi = $request->posisi;
        $barang->spek = $request->spek;
        $barang->save();

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil di edit');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        Alert::success('success','Data berhasil Dihapus');
        return redirect()->route('barang.index');
    }
}
