<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Alumni;

class RegisterController extends Controller
{
    public function index()
    {
      return view('register');
    }

    public function store(Request $request)
    {
        $data = [
          'nama' => $request->nama,
          'angkatan' => $request->angkatan,
          'jurusan' => $request->jurusan,
          'prodi' => $request->prodi,
          'ipk' => $request->ipk,
          'skripsi' => $request->skripsi,
          'no_telp' => $request->telp,
          'email' => $request->email,
          'instagram' => $request->instagram,
          'Web' => $request->web,
          'skripsi' => $request->skripsi,
          'sosmed' => $request->sosmed,
          'alamat' => $request->alamat,
          'kegiatan' => $request->kegiatan,
          'lainnya' => $request->lainnya,
          'tempat_kerja' => $request->tempat_kerja,
          'posisi' => $request->posisi,
          'jabatan' => $request->jabatan,
          'sertifikat' => $request->sertifikat,
          'lomba' => $request->lomba,
          'prestasi' => $request->prestasi,
          'minat_dosen' => $request->dosen
        ];
        $status = Alumni::create($data);
        if ($status) {
          return redirect('/');
        }
    }
}
