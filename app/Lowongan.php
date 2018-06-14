<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $fillable = ['judul','lokasi','isi','foto','kategori','alumni_id'];
}
