<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('backend.auth.mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $mahasiswa = Mahasiswa::all();
      return view('backend.auth.mahasiswa.create', compact('mahasiswa'));
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
          'nim'=> 'required',
          'jurusan' => 'required',
          'tempat_lahir'=> 'required',
          'tanggal_lahir'=> 'required'

        ]);

         $mahasiswa = new Mahasiswa();

         $mahasiswa->nama = $request->input('nama');
         $mahasiswa->nim = $request->input('nim');
         $mahasiswa->jurusan = $request->input('jurusan');
         $mahasiswa->tempat_lahir = $request->input('tempat_lahir');
         $mahasiswa->tanggal_lahir = $request->input('tanggal_lahir');

         $mahasiswa->save();

         return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
      $mahasiswa = Mahasiswa::find($mahasiswa->id);
      return view('backend.auth.mahasiswa.show',compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
      $mahasiswa = Mahasiswa::find($mahasiswa->id);
      return view('backend.auth.mahasiswa.edit',['mahasiswa'=> $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
      $mahasiswaUpdate = Mahasiswa :: where ('id', $mahasiswa->id)
      ->update([
          'nama'=>$request->input('nama'),
          'nim' => $request->input('nim'),
          'jurusan'=>$request->input('jurusan'),
          'tempat_lahir' => $request->input('tempat_lahir'),
          'tanggal_lahir' => $request->input('tanggal_lahir')
      ]);

      if($mahasiswaUpdate){
          return redirect()->route('mahasiswa.show',['mahasiswa'=>$mahasiswa->id])
          ->with('success','Data bangunan terupdate');
      }
      return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
      $mahasiswa = Mahasiswa::find($mahasiswa->id);
      $mahasiswa->delete();

      //toast()->success('Data bangunan berhasil dihapus');

      return redirect()->route('mahasiswa.index')->with(['message'=> 'Successfully deleted!!']);
    }
}
