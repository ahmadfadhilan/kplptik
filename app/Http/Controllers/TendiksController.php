<?php

namespace App\Http\Controllers;

use App\tendik;
use Illuminate\Http\Request;

class tendiksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tendik = tendik::all();
      return view('backend.auth.tendik.index', compact('tendik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tendik = tendik::all();
      return view('backend.auth.tendik.create', compact('tendik'));
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
          'nip'=> 'required',
          'tempat_lahir'=> 'required',
          'tanggal_lahir'=> 'required'

        ]);

         $tendik = new Tendik();

         $tendik->nama = $request->input('nama');
         $tendik->nip = $request->input('nip');
         $tendik->tempat_lahir = $request->input('tempat_lahir');
         $tendik->tanggal_lahir = $request->input('tanggal_lahir');

         $tendik->save();

         return redirect()->route('tendik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tendik  $tendik
     * @return \Illuminate\Http\Response
     */
    public function show(tendik $tendik)
    {
      $tendik = Tendik::find($tendik->id);
      return view('backend.auth.tendik.show',compact('tendik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tendik  $tendik
     * @return \Illuminate\Http\Response
     */
    public function edit(tendik $tendik)
    {
      $tendik = Tendik::find($tendik->id);
      return view('backend.auth.tendik.edit',['tendik'=> $tendik]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tendik  $tendik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tendik $tendik)
    {
      $tendikUpdate = Tendik :: where ('id', $tendik->id)
      ->update([
          'nama'=>$request->input('nama'),
          'nip' => $request->input('nip'),
          'tempat_lahir' => $request->input('tempat_lahir'),
          'tanggal_lahir' => $request->input('tanggal_lahir')
      ]);

      if($tendikUpdate){
          return redirect()->route('tendik.show',['tendik'=>$tendik->id])
          ->with('success','Data bangunan terupdate');
      }
      return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tendik  $tendik
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
      $tendik = Tendik::find($id);
      $tendik->delete();

      //toast()->success('Data bangunan berhasil dihapus');

      return redirect()->route('tendik.index')->with(['message'=> 'Successfully deleted!!']);
    }
}
