<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  protected $fillable = [
    'nama',
    'nim',
    'jurusan',
    'tempat_lahir',
    'tanggal_lahir'

  ];

}
