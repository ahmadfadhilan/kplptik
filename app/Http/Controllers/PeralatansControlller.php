<?php

namespace App\Http\Controllers;

use App\Peralatan;
use Illuminate\Http\Request;

class PeralatansControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $peralatan = Peralatan::all();
      return view('backend.auth.peralatan.index', compact('peralatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $peralatan = Peralatan::all();
      return view('backend.auth.peralatan.create', compact('peralatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function show(Peralatan $peralatan)
    {
      $peralatan = Peralatan::find($peralatan->id);
      return view('backend.auth.peralatan.show',compact('peralatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Peralatan $peralatan)
    {
      $peralatan = Peralatan::find($peralatan->id);
      return view('backend.auth.peralatan.edit',['peralatan'=> $peralatan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peralatan $peralatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peralatan  $peralatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peralatan $peralatan)
    {
      $peralatan = Peralatan::find($peralatan->id);
      $peralatan->delete();

      //toast()->success('Data bangunan berhasil dihapus');

      return redirect()->route('peralatan.index')->with(['message'=> 'Successfully deleted!!']);
    }
}
