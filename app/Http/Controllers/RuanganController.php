<?php

namespace App\Http\Controllers;

use App\Models\ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $ruangan=ruangan::all();
        return view('ruangan.index',compact('ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('ruangan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruangan=new ruangan;
        $ruangan->nama_ruangan=$request->nama_ruangan;
        $ruangan->nama_pic=$request->nama_pic;
        $ruangan->jml_komputer=$request->jml_komputer;
        $ruangan->jml_leptop=$request->jml_leptop;
        $ruangan->save();
        return redirect()->route('ruangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ruangan = ruangan::FindOrFail($id);
        return view('ruangan.show',compact('ruangan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruangan = ruangan::FindOrFail($id);
        return view('ruangan.edit', compact('ruangan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ruangan = ruangan::FindOrFail($id);
        $ruangan->nama_ruangan=$request->nama_ruangan;
        $ruangan->nama_pic=$request->nama_pic;
        $ruangan->jml_komputer=$request->jml_komputer;
        $ruangan->jml_leptop=$request->jml_leptop;
        $ruangan->save();
        return redirect()->route('ruangan.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruangan =  ruangan::FindOrFail($id);

        $ruangan->delete();
        return redirect()->route('ruangan.index');

    }
}
