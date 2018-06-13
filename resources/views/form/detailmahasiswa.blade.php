@extends('layout.app')
@section('content')
<section class="content-header">
	<h1>
		Detail Data Mahasiswa
		<small>Form Detail Data Mahasiswa</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-users"></i> Data Mahasiswa</a></li>
    <li>Detail Data Mahasiswa</li>
	</ol>
</section>
<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Please Fill This Form</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
        <form class="form-horizontal" method="post" action="{{ url('mahasiswa/'.$data->id) }}">
          {{ csrf_field() }} {{method_field('PATCH')}}
					<input type="hidden" name="id" value="{{$data->id}}">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input required value="{{$data->nama}}" name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
            </div>
          </div> <!-- /form group -->
					<div class="form-group">
            <label class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <select required class="form-control" name="jeniskelamin" required>
                <option value="" disabled="" selected=""> ---- </option>
                <option @if($data->jeniskelamin == 'lk') {{'selected'}} @endif value="lk">Laki-laki</option>
                <option @if($data->jeniskelamin == 'pr') {{'selected'}} @endif value="pr">Perempuan</option>
              </select>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Angkatan</label>
            <div class="col-sm-10">
              <input required value="{{$data->angkatan}}" name="angkatan" type="text" class="form-control" placeholder="Angkatan">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Jurusan</label>
            <div class="col-sm-10">
              <select required class="form-control" name="jurusan">
                <option value="" disabled="" selected=""> ---- </option>
                <option @if($data->jurusan == 'teknik sipil') {{'selected'}} @endif value="teknik sipil">Teknik Sipil</option>
                <option @if($data->jurusan == 'teknik elektro') {{'selected'}} @endif value="teknik elektro">Teknik Elektro</option>
                <option @if($data->jurusan == 'teknik grafika dan penerbitan') {{'selected'}} @endif value="teknik grafika dan penerbitan">Teknik Grafika dan Penerbitan</option>
                <option @if($data->jurusan == 'teknik informatika dan komputer') {{'selected'}} @endif value="teknik informatika dan komputer">Teknik Informatika dan Komputer</option>
                <option @if($data->jurusan == 'akuntansi') {{'selected'}} @endif value="akuntansi">Akuntansi</option>
                <option @if($data->jurusan == 'administrasi niaga') {{'selected'}} @endif value="administrasi niaga">Administrasi Niaga</option>
                <option @if($data->jurusan == 'cevest') {{'selected'}} @endif value="cevest">Cevest</option>
              </select>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Prodi</label>
            <div class="col-sm-10">
              <input required value="{{$data->prodi}}" name="prodi" type="text" class="form-control" placeholder="Prodi">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">IPK</label>
            <div class="col-sm-10">
              <input required value="{{$data->ipk}}" name="ipk" type="text" class="form-control" placeholder="gunakan tanda titik sebagai koma">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Judul Skripsi</label>
            <div class="col-sm-10">
              <input value="{{$data->skripsi}}" name="skripsi" type="text" class="form-control" placeholder="Judul Skripsi">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Nomor Telp/WA</label>
            <div class="col-sm-10">
              <input required value="{{$data->no_telp}}" name="telp" type="text" class="form-control" placeholder="No Telpon/WA">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input required value="{{$data->email}}" name="email" type="text" class="form-control" placeholder="Email">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Instagram</label>
            <div class="col-sm-10">
              <input value="{{$data->instagram}}" name="instagram" type="text" class="form-control" placeholder="Instagram">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Sosmed Lainnya</label>
            <div class="col-sm-10">
              <input value="{{$data->sosmed}}" name="sosmed" type="text" class="form-control" placeholder="Sosial media lainnya">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <textarea required name="alamat" class="form-control" placeholder="max 120 char">{{$data->alamat}}</textarea>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Kegiatan saat ini</label>
            <div class="col-sm-10">
              <select required name="kegiatan" required id="kegiatan" class="form-control">
                <option value="" disabled="" selected=""> ---- </option>
                <option @if($data->kegiatan == 'bekerja') {{'selected'}} @endif value="bekerja">Bekerja</option>
                <option @if($data->kegiatan == 'wirausaha') {{'selected'}} @endif value="wirausaha">Wirausaha</option>
                <option @if($data->kegiatan == 'ekstensi') {{'selected'}} @endif value="ekstensi">Ekstensi</option>
                <option @if($data->kegiatan == 'job seeker') {{'selected'}} @endif value="job seeker">Job seeker</option>
                <option @if($data->kegiatan == 'part time') {{'selected'}} @endif value="part time">Part time</option>
                <option @if($data->kegiatan == 'freelance') {{'selected'}} @endif value="freelance">Freelance</option>
                <option @if($data->kegiatan == 'lainnya') {{'selected'}} @endif value="lainnya">Lainnya(sebutkan)</option>
              </select>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Kegiatan Lainnya</label>
            <div class="col-sm-10">
              <input value="{{$data->lainnya}}" name="lainnya" type="text" class="form-control" placeholder="kegiatan lainnya">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">tempat kerja/freelance/part-time/ekstensi</label>
            <div class="col-sm-10">
              <input value="{{$data->tempat_kerja}}" name="tempat_kerja" type="text" class="form-control" placeholder="tempat kerja/freelance/part-time/ekstensi">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Posisi Kerja</label>
            <div class="col-sm-10">
              <input value="{{$data->posisi}}" name="posisi" type="text" class="form-control" placeholder="Posisi Kerja">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Jabatan Kerja</label>
            <div class="col-sm-10">
              <input value="{{$data->jabatan}}" name="jabatan" type="text" class="form-control" placeholder="Jabatan Kerja">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Sertifikat yang pernah didapat</label>
            <div class="col-sm-10">
              <textarea name="sertifikat" class="form-control" placeholder="Sertifikat yang pernah didapat">{{$data->sertifikat}}</textarea>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Lomba yang pernah diikuti</label>
            <div class="col-sm-10">
              <textarea name="lomba" class="form-control" placeholder="Lomba yang pernah diikuti">{{$data->lomba}}</textarea>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Prestasi yang pernah diraih</label>
            <div class="col-sm-10">
              <textarea name="prestasi" class="form-control" placeholder="Prestasi yang pernah diraih">{{$data->prestasi}}</textarea>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Berminat jadi dosen PNJ?</label>
            <div class="col-sm-10">
              <select required name="dosen" required id="dosen" class="form-control">
               <option value="">---</option>
               <option @if($data->minat_dosen == 'ya') {{'selected'}} @endif value="ya">Ya</option>
               <option @if($data->minat_dosen == 'tidak') {{'selected'}} @endif value="tidak">Tidak</option>
              </select>
            </div>
          </div> <!-- /form group -->

					<div class="form-group">
            <label class="col-sm-2 control-label">Alumni?</label>
            <div class="col-sm-10">
              <select required name="status_alumni" required id="status_alumni" class="form-control">
               <option value="">---</option>
               <option @if($data->status_alumni == '1') {{'selected'}} @endif value="1">Alumni</option>
               <option @if($data->status_alumni == '0') {{'selected'}} @endif value="0">Mahasiswa</option>
              </select>
            </div>
          </div> <!-- /form group -->

          <div class="box-footer">
            <a href="{{url('mahasiswa')}}" type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
            <button type="submit" class="btn btn-info pull-right">Submit</button>
          </div>
        </form>
		</div>
		<!-- /.box-body -->
	</div>
</section>
@endsection
