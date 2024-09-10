<?php

namespace App\Http\Controllers;

use App\Models\Kondisi;
use Illuminate\Http\Request;

class KondisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kondisi = Kondisi::latest()->get();
        return view('kondisi.index', compact('kondisi'));
    }

    public function create()
    {
        return view('kondisi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kondisi' => 'required',
        ]);

        $kondisi = new Kondisi();
        $kondisi->kondisi = $request->kondisi;

        $kondisi->save();

        return redirect()->route('kondisi.index')->with('success', 'Kondisi Berhasil Ditambah');
    }

    public function edit($id)
    {
        $kondisi = Kondisi::findOrFail($id);
        return view('kondisi.edit', compact('kondisi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kondisi' => 'required',
        ]);
        $kondisi = Kondisi::findOrFail($id);
        $kondisi->kondisi = $request->kondisi;
        $kondisi->save();

        return redirect()->route('kondisi.index')
            ->with('success', 'Kondisi berhasil di edit');
    }

    public function destroy($id)
    {
        $kondisi = Kondisi::findOrFail($id);
        $kondisi->delete();

        return redirect()->route('kondisi.index')
            ->with('success', 'Kondisi Berhasil Dihapus');
    }
}
