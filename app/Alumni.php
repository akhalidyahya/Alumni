<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable = ['nama','angkatan','jurusan','prodi','ipk','skripsi','no_telp','email','foto','instagram','web','sosmed','alamat','kegiatan','lainnya','tempat_kerja','posisi','jabatan','sertifikat','lomba','prestasi','minat_dosen'];
}
