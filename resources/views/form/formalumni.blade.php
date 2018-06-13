@extends('layout.app')
@section('content')
<section class="content-header">
	<h1>
		Tambah Data Alumni
		<small>Form Tambah Data ALumni</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-users"></i> Data Alumni</a></li>
    <li>Tambah Data Alumni</li>
	</ol>
</section>
<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Please Fill This Form</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
        <form class="form-horizontal" method="post" action="{{ url('alumni') }}">
          {{ csrf_field() }} {{method_field('POST')}}
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <select class="form-control" name="jeniskelamin" required>
                <option value="" disabled="" selected=""> ---- </option>
                <option value="lk">Laki-laki</option>
                <option value="pr">Perempuan</option>
              </select>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Angkatan</label>
            <div class="col-sm-10">
              <input name="angkatan" type="text" class="form-control" placeholder="Angkatan" required>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Jurusan</label>
            <div class="col-sm-10">
              <select class="form-control" name="jurusan" required>
                <option value="" disabled="" selected=""> ---- </option>
                <option value="teknik sipil">Teknik Sipil</option>
                <option value="teknik elektro">Teknik Elektro</option>
                <option value="teknik grafika dan penerbitan">Teknik Grafika dan Penerbitan</option>
                <option value="teknik informatika dan komputer">Teknik Informatika dan Komputer</option>
                <option value="akuntansi">Akuntansi</option>
                <option value="administrasi niaga">Administrasi Niaga</option>
                <option value="cevest">Cevest</option>
              </select>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Prodi</label>
            <div class="col-sm-10">
              <input name="prodi" type="text" class="form-control" placeholder="Prodi" required>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">IPK</label>
            <div class="col-sm-10">
              <input name="ipk" type="text" class="form-control" placeholder="gunakan tanda titik sebagai koma">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Judul Skripsi</label>
            <div class="col-sm-10">
              <input name="skripsi" type="text" class="form-control" placeholder="Judul Skripsi">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Nomor Telp/WA</label>
            <div class="col-sm-10">
              <input name="telp" type="text" class="form-control" placeholder="No Telpon/WA" required>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input name="email" type="text" class="form-control" placeholder="Email" required>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Instagram</label>
            <div class="col-sm-10">
              <input name="instagram" type="text" class="form-control" placeholder="Instagram">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Sosmed Lainnya</label>
            <div class="col-sm-10">
              <input name="sosmed" type="text" class="form-control" placeholder="Sosial media lainnya">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <textarea name="alamat" class="form-control" placeholder="max 120 char" required></textarea>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Kegiatan saat ini</label>
            <div class="col-sm-10">
              <select name="kegiatan" required id="kegiatan" class="form-control" required>
                <option value="" disabled="" selected=""> ---- </option>
                <option value="bekerja">Bekerja</option>
                <option value="wirausaha">Wirausaha</option>
                <option value="ekstensi">Ekstensi</option>
                <option value="job seeker">Job seeker</option>
                <option value="part time">Part time</option>
                <option value="freelance">Freelance</option>
                <option value="lainnya">Lainnya(sebutkan)</option>
              </select>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Kegiatan Lainnya</label>
            <div class="col-sm-10">
              <input name="lainnya" type="text" class="form-control" placeholder="kegiatan lainnya">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">tempat kerja/freelance/part-time/ekstensi</label>
            <div class="col-sm-10">
              <input name="tempat_kerja" type="text" class="form-control" placeholder="tempat kerja/freelance/part-time/ekstensi">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Posisi Kerja</label>
            <div class="col-sm-10">
              <input name="posisi" type="text" class="form-control" placeholder="Posisi Kerja">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Jabatan Kerja</label>
            <div class="col-sm-10">
              <input name="jabatan" type="text" class="form-control" placeholder="Jabatan Kerja">
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Sertifikat yang pernah didapat</label>
            <div class="col-sm-10">
              <textarea name="sertifikat" class="form-control" placeholder="Sertifikat yang pernah didapat"></textarea>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Lomba yang pernah diikuti</label>
            <div class="col-sm-10">
              <textarea   name="lomba" class="form-control" placeholder="Lomba yang pernah diikuti"></textarea>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Prestasi yang pernah diraih</label>
            <div class="col-sm-10">
              <textarea name="prestasi" class="form-control" placeholder="Prestasi yang pernah diraih"></textarea>
            </div>
          </div> <!-- /form group -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Berminat jadi dosen PNJ?</label>
            <div class="col-sm-10">
              <select name="dosen" required id="dosen" class="form-control" required>
               <option value="">---</option>
               <option value="ya">Ya</option>
               <option value="tidak">Tidak</option>
              </select>
            </div>
          </div> <!-- /form group -->

          <div class="box-footer">
            <a href="{{url('alumni')}}" type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
            <button type="submit" class="btn btn-info pull-right">Submit</button>
          </div>
        </form>
		</div>
		<!-- /.box-body -->
	</div>
</section>
@endsection
