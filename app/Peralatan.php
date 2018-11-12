<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
  protected $fillable = [
    'nama_aset',
    'no_aset',
    'status',
    'tahun'

  ];
}
