<?php

namespace App\Http\Controllers;

use App\Models\Pbarang;
use App\Models\Barang;
use App\Models\Kondisi;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Storage;

class PbarangController extends Controller
{
    public function index()
    {
        $pbarang = Pbarang::all();
        return view('pbarang.index',compact('pbarang'));
    }

    public function create()
    {
        $pbarang = Pbarang::all();
        $barang = Barang::all();
        $ruangan = Ruangan::all();
        $kondisi = Kondisi::all();
        return view('pbarang.create', compact('pbarang', 'barang', 'ruangan', 'kondisi'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_peminjam' => 'required',
            'email' => 'required',
            'instansi' => 'required',
            'id_barang' => 'required',
            'id_ruangan' => 'required',
            'tanggal_peminjaman' => 'required',
            'keterangan' => 'required',
            'id_kondisi' => 'required',
            'dokumentasi' => 'required|max:2048|mimes:png,jpeg,jpg',
        ]);

        $pbarang = new Pbarang();
        $pbarang->nama_peminjam = $request->nama_peminjam;
        $pbarang->email = $request->email;
        $pbarang->instansi = $request->instansi;
        $pbarang->id_barang = $request->id_barang;
        $pbarang->id_ruangan = $request->id_ruangan;
        $pbarang->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pbarang->keterangan = $request->keterangan;
        $pbarang->id_kondisi = $request->id_kondisi;

        if ($request->hasFile('dokumentasi')) {
            $img = $request->file('dokumentasi');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('public/images/pbarang/', $name);
            $pbarang->dokumentasi = $name;
        }

        $pbarang->save();
        return redirect()->route('pbarang.index')->with('success', 'Peminjaman Berhasil Dibuat');
    }

    public function edit($id)
    {
        $pbarang = Pbarang::findOrFail($id);
        $barang = Barang::all();
        $ruangan = Ruangan::all();
        $kondisi = Kondisi::all();
        return view('pbarang.edit', compact('pbarang', 'barang', 'ruangan', 'kondisi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_peminjam' => 'required',
            'email' => 'required',
            'instansi' => 'required',
            'id_barang' => 'required',
            'id_ruangan' => 'required',
            'tanggal_peminjaman' => 'required',
            'keterangan' => 'required',
            'id_kondisi' => 'required',
            // 'dokumentasi' => 'required|max:2048|mimes:png,jpg',
        ]);

        $pbarang = Pbarang::findOrFail();
        $pbarang->nama_peminjam = $request->nama_peminjam;
        $pbarang->email = $request->email;
        $pbarang->instansi = $request->instansi;
        $pbarang->id_barang = $request->id_barang;
        $pbarang->id_ruangan = $request->id_ruangan;
        $pbarang->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pbarang->keterangan = $request->keterangan;
        $pbarang->id_kondisi = $request->id_kondisi;
        if ($request->hasFile('dokumentasi')) {
            $img = $request->file('dokumentasi');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('public/images/pbarang/', $name);
            $pbarang->dokumentasi = $name;
        }

        $pbarang->save();
        return redirect()->route('pbarang.index')->with('success', 'Peminjaman Berhasil Ditambah');
    }

    public function destroy($id)
    {
        $pbarang = Pbarang::findOrFail($id);
        $pbarang->deleteImage();
        $pbarang->delete();

        return redirect()->route('pbarang.index')
            ->with('success', 'data berhasil dihapus');
    }
}
