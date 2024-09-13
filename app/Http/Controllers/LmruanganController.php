<?php

namespace App\Http\Controllers;

use App\Models\Lmruangan;
use App\Models\Mruangan;
use Illuminate\Http\Request;

class LmruanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lmruangan = Lmruangan::all();
        return view('lmruangan.index', compact('lmruangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lmruangan = Lmruangan::all();
        $mruangan = Mruangan::all();
       return view('lmruangan.create', compact('lmruangan', 'mruangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_mruangan' => 'required'
        ]);

        $lmruangan = new Lmruangan();
        $lmruangan->id_mruangan = $request->id_mruangan;

        $lmruangan->save();
        return redirect()->route('lmruangan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lmruangan $lmruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lmruangan = Lmruangan::findOrFail($id);
        $lmruangan = Mruangan::all();
        return view('lmruangan.edit', compact('lmruangan', 'mruangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_mruangan' => 'required'
        ]);

        $lmruangan = Lmruangan::findOrFail($id);
        $lmruangan->id_mruangan = $request->id_mruangan;
        $lmruangan->save();

        return redirect()->route('lmruangan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lmruangan = Lmruangan::findOrFail($id);
        $lmruangan->delete();

        return redirect()->route('lmruangan.index')
            ->with('success', 'Laporan Maintenance Ruangan Berhasil Dihapus');
    }
}
