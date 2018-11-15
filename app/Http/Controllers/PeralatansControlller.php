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
      $request->validate([
          'nama_barang'=> 'required',
          'kode_barang'=> 'required',
          'jumlah'=> 'required',
          'merk'=> 'required',
          'tahun'=> 'required',
          'asal_barang'=> 'required',
          'harga'=> 'required',
          'kondisi_barang'=> 'required',
          'bukti_milik'=> 'required',
          'penguasaan'=> 'required',
          'KIB'=> 'required'

        ]);

         $peralatan = new Peralatan();

         $peralatan->nama_barang = $request->input('nama_barang');
         $peralatan->kode_barang = $request->input('kode_barang');
         $peralatan->jumlah = $request->input('jumlah');
         $peralatan->merk = $request->input('merk');
         $peralatan->tahun = $request->input('tahun');
         $peralatan->asal_barang = $request->input('asal_barang');
         $peralatan->harga = $request->input('harga');
         $peralatan->kondisi_barang = $request->input('kondisi_barang');
         $peralatan->bukti_milik = $request->input('bukti_milik');
         $peralatan->penguasaan = $request->input('penguasaan');
         $peralatan->KIB = $request->input('KIB');

         $peralatan->save();

         return redirect()->route('peralatan.index');
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
        $peralatanUpdate = Peralatan :: where ('id', $peralatan->id)
        ->update([
             'nama_barang' => $request->input('nama_barang'),
             'kode_barang' => $request->input('kode_barang'),
             'jumlah' => $request->input('jumlah'),
             'merk' => $request->input('merk'),
             'tahun' => $request->input('tahun'),
             'asal_barang' => $request->input('asal_barang'),
             'harga' => $request->input('harga'),
             'kondisi_barang' => $request->input('kondisi_barang'),
             'bukti_milik' => $request->input('bukti_milik'),
             'penguasaan' => $request->input('penguasaan'),
             'KIB' => $request->input('KIB')
        ]);

        if($peralatanUpdate){
            return redirect()->route('peralatan.show',['peralatan'=>$peralatan->id])
            ->with('success','Data Peralatan terupdate');
        }
        return back()->withInput();
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
