<?php

namespace App\Http\Controllers;

use App\Models\Mruangan;
use App\Models\Ruangan;
use App\Models\Kondisi;
use Illuminate\Http\Request;

class MruanganController extends Controller
{
    public function index()
    {
        $mruangan = Mruangan::all();
        return view('mruangan.index', compact('mruangan'));
    }

    public function create()
    {
        $mruangan = Mruangan::all();
        $ruangan = Ruangan::all();
        $kondisi = Kondisi::all();
        return view('mruangan.create', compact('mruangan', 'ruangan', 'kondisi'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_ruangan' => 'required',
            'jenis_perbaikan' => 'required',
            'waktu_pengerjaan' => 'required',
            'kondisi' => 'required',
        ]);

        $mruangan = new Mruangan();
        $mruangan->id_ruangan = $request->id_ruangan;
        $mruangan->jenis_perbaikan = $request->jenis_perbaikan;
        $mruangan->waktu_pengerjaan = $request->waktu_pengerjaan;
        $mruangan->kondisi = $request->kondisi;
        $mruangan->save();
        return redirect('mruangan.index');
    }

    public function edit($id)
    {
        $mruangan = Mruangan::findOrFail($id);
        $ruangan = Ruangan::all();
        $kondisi = Kondisi::all();
        return view('mruangan.edit', compact('mruangan', 'ruangan', 'kondisi'));
    }

    public function update(Request $request, $id)
    {
        $mruangan = Mruangan::findOrFail($id);
        $mruangan->id_ruangan = $request->id_ruangan;
        $mruangan->jenis_perbaikan = $request->jenis_perbaikan;
        $mruangan->waktu_pengerjaan = $request->waktu_pengerjaan;
        $mruangan->id_kondisi = $request->id_kondisi;
        $mruangan->save();
        return redirect('mruangan.index');
    }

    public function destroy($id)
    {
        $mbarang = Mbarang::findOrFail($id);
        $mbarang->delete();
        return redirect()->route('mruangan.index');
    }
}
