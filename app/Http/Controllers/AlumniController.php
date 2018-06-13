<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Excel;
use App\Alumni;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $role = 2;
    public function index()
    {
      // if($request->session()->has('login_status') != true) {
      //     return redirect('login');
      // } else {
      //
      // }
      if ($this->role == 2) {
        return view('pages/alumni');
      }
      elseif ($this->role == 1) {
        return view('pages/alumni');
      }
      else {
        return view('pages/alumni');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form/formalumni');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
          'nama' => $request->nama,
          'jeniskelamin' => $request->jeniskelamin,
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
          return redirect('alumni');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $alumni = Alumni::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumni = Alumni::find($id);
        return view('form/detailalumni',[
          'data' => $alumni
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumni = Alumni::find($id);

        $alumni->nama = $request['nama'];
        $alumni->jeniskelamin = $request->jeniskelamin;
        $alumni->angkatan = $request->angkatan;
        $alumni->jurusan = $request->jurusan;
        $alumni->prodi = $request->prodi;
        $alumni->ipk = $request->ipk;
        $alumni->skripsi = $request->skripsi;
        $alumni->no_telp = $request->telp;
        $alumni->email = $request->email;
        $alumni->instagram = $request->instagram;
        $alumni->web = $request->web;
        $alumni->sosmed = $request->sosmed;
        $alumni->alamat = $request->alamat;
        $alumni->kegiatan = $request->kegiatan;
        $alumni->lainnya = $request->lainnya;
        $alumni->tempat_kerja = $request->tempat_kerja;
        $alumni->posisi = $request->posisi;
        $alumni->jabatan = $request->jabatan;
        $alumni->sertifikat = $request->sertifikat;
        $alumni->lomba = $request->lomba;
        $alumni->prestasi = $request->prestasi;
        $alumni->minat_dosen = $request->dosen;
        $alumni->status_alumni = $request->status_alumni;

        $alumni->update();
        return redirect('alumni');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumni::destroy($id);
    }

    public function apialumni()
    {
      $alumni = Alumni::where('status_alumni',1);

      return DataTables::of($alumni)
        ->addColumn('status',function($alumni){
          if ($alumni->status_akun == 1) {
            $class = 'label-success';
            $info = 'Aktif';
          } else {
            $class = 'label-danger';
            $info = 'Inactive';
          }
          return '<span class="label '.$class.'">'.$info.'</span>';
        })
        ->addColumn('aksi',function($alumni) {
          if ($alumni->status_akun == 0) {
              $action = '<li><a href="#" onclick="activate('.$alumni->id.')">Activate</a></li>';
          } else {
              $action = '
              <li><a href="#" onclick="deactivate('.$alumni->id.')">Deactivate</a></li>

              ';
              //<li><a href="#" onclick="reset('.$alumni->id.')">Reset</a></li>
          }
          return '
          <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#" onclick="editData('.$alumni->id.')">Edit</a></li>
              <li><a href="#" onclick="deleteData('.$alumni->id.')">Delete</a></li>'.
              $action
            .'</ul>
          </div>
          ';
        })->escapeColumns([])->make(true);
    }
}
