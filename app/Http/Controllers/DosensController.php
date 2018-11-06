<?php

namespace App\Http\Controllers;

use App\Dosen;
use Illuminate\Http\Request;

class DosensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dosen = Dosen::all();
      return view('backend.auth.dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $dosen = Dosen::all();
      return view('backend.auth.dosen.create', compact('dosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([

          'nama'=> 'required',
          'nidn'=> 'required',
          'tempat_lahir'=> 'required',
          'tanggal_lahir'=> 'required'

        ]);

         $dosen = new Dosen();

         $dosen->nama = $request->input('nama');
         $dosen->nidn = $request->input('nidn');
         $dosen->tempat_lahir = $request->input('tempat_lahir');
         $dosen->tanggal_lahir = $request->input('tanggal_lahir');

         $dosen->save();

         return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
      $dosen = Dosen::find($dosen->id);

      return view('backend.auth.dosen.show',compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
      $dosen = Dosen::find($dosen->id);
      return view('backend.auth.dosen.edit',['dosen'=> $dosen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
      $dosenUpdate = Dosen :: where ('id', $dosen->id)
      ->update([
          'nama'=>$request->input('nama'),
          'nidn' => $request->input('nidn'),
          'tempat_lahir' => $request->input('tempat_lahir'),
          'tanggal_lahir' => $request->input('tanggal_lahir')
      ]);

      if($dosenUpdate){
          return redirect()->route('dosen.show',['dosen'=>$dosen->id])
          ->with('success','Data bangunan terupdate');
      }
      return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $dosen = Dosen::find($id);
      $dosen->delete();

      //toast()->success('Data bangunan berhasil dihapus');

      return redirect()->route('dosen.index')->with(['message'=> 'Successfully deleted!!']);
    }
}
