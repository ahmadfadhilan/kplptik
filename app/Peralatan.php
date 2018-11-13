<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
  protected $fillable = [
    'nama_barang',
    'kode_barang',
    'jumlah',
    'merk',
    'tahun',
    'asal_barang',
    'harga',
    'kondisi_barang',
    'bukti_milik',
    'penguasaan',
    'KIB'
  ];
}
