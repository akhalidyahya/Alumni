<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alumnify | Register</title>
	<link rel="icon" href="{{asset('admin/img/book.png')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/materialize/css/materialize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom-color.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialize-stepper.css') }}">
  <link rel="stylesheet" href="{{asset('admin/css/AdminLTE.min.css')}}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
  <script src="{{ asset('assets/materialize/js/materialize.js') }}"></script>
  <script src="{{ asset('assets/js/materialize-stepper.js') }}"></script>
	<script src="{{ asset('assets/js/SmoothScroll.min.js') }}"></script>
</head>
<body>
  <div class="section grey lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l12">
          <div class="card">
						<div class="heading">
							<h1>PLEASE FILL THIS FORM</h1>
						</div>
            <div class="card-content">
              <form method="post" action="{{ route('register.submit') }}">
								{{ csrf_field() }}
                <ul data-method="GET" class="stepper linear horizontal" style="min-height:1084px">

                  <li class="step active">
                    <div class="step-title waves-effect waves-dark">General Info</div>
                    <div class="step-content">
                      <div class="row">
                        <div class="input-field col s12">
                         <i class="material-icons prefix">mood</i>
                         <input name="nama" id="name" type="text" required="">
                         <label for="first_name">Nama Lengkap</label>
                       </div> <!--/input field-->
											 <div class="input-field col s12">
                         <i class="material-icons prefix">mood</i>
                         <select name="jeniskelamin" required="true">
                           <option value="" disabled="" selected=""> ---- </option>
                           <option value="lk">Laki-laki</option>
                           <option value="pr">Perempuan</option>
                         </select>
                         <label>Jenis Kelamin</label>
                       </div> <!--/input field-->
											 <div class="input-field col s12">
												<i class="material-icons prefix">date_range</i>
												<input name="angkatan" id="angkatan" type="text" required="">
												<label for="first_name">Angkatan</label>
											</div> <!--/input field-->
                       <div class="input-field col s12">
                         <i class="material-icons prefix">account_balance</i>
                         <select name="jurusan" required="true">
                           <option value="" disabled="" selected=""> ---- </option>
                           <option value="teknik sipil">Teknik Sipil</option>
                           <option value="teknik elektro">Teknik Elektro</option>
                           <option value="teknik grafika dan penerbitan">Teknik Grafika dan Penerbitan</option>
                           <option value="teknik informatika dan komputer">Teknik Informatika dan Komputer</option>
                           <option value="akuntansi">Akuntansi</option>
                           <option value="administrasi niaga">Administrasi Niaga</option>
													 <option value="cevest">Cevest</option>
                         </select>
                         <label>Jurusan</label>
                       </div> <!--/input field-->
                       <div class="input-field col s12">
                         <i class="material-icons prefix">account_balance</i>
                         <input name="prodi" id="prodi" type="text" required="">
                         <label>Prodi</label>
                       </div> <!--/input field-->
                       <div class="input-field col s12">
                         <i class="material-icons prefix">filter_4</i>
                         <input name="ipk" id="ipk" type="text" placeholder="tanda koma memakai titik">
                         <label>IPK</label>
                       </div> <!--/input field-->
                       <div class="input-field col s12">
                         <i class="material-icons prefix">book</i>
                         <input name="skripsi" id="skripsi" type="text">
                         <label>Judul Skripsi</label>
                       </div> <!--/input field-->
                     </div> <!--/row-->
                     <div class="step-actions">
                      <button class="waves-effect waves-dark btn next-step">Next</button>
                     </div>
                   </div> <!--/step content-->
                 </li>

                 <li class="step">
                   <div class="step-title waves-effect waves-dark">Contact Info</div>
                   <div class="step-content">
                    <div class="row">
                      <div class="input-field col s12">
                         <i class="material-icons prefix">phone</i>
                         <input name="telp" id="telp" type="text" required="">
                         <label>No. Telpon / WA</label>
                      </div> <!--/input field-->
                      <div class="input-field col s12">
                        <i class="material-icons prefix">mail</i>
                       <input name="email" id="email" type="email" required="" class="validate">
                       <label for="email">Email</label>
                      </div> <!--/input field-->
                      <div class="input-field col s12">
                         <i class="material-icons prefix">phone_android</i>
                         <input name="instagram" id="instagram" type="text" >
                         <label>Instagram</label>
                      </div> <!--/input field-->
                      <div class="input-field col s12">
                         <i class="material-icons prefix">laptop</i>
                         <input name="web" id="web" type="text" >
                         <label>Website Pribadi</label>
                      </div> <!--/input field-->
                      <div class="input-field col s12">
                         <i class="material-icons prefix">share</i>
                         <input name="sosmed" id="sosmed" type="text" >
                         <label>Sosmed lainnya</label>
                      </div> <!--/input field-->
                      <div class="input-field col s12">
                        <i class="material-icons prefix">home</i>
                        <textarea name="alamat" id="alamat" class="materialize-textarea" data-length="120" required></textarea>
                        <label>Alamat</label>
                      </div>
                   </div> <!--/row-->
                   <div class="step-actions">
                      <button class="waves-effect waves-dark btn next-step">Next</button>
                      <button class="waves-effect waves-dark btn previous-step">Back</button>
                    </div>
                 </div> <!--/step content-->
               </li>

               <li class="step">
                   <div class="step-title waves-effect waves-dark">Activity Info</div>
                   <div class="step-content">
                    <div class="row">
                        <div class="input-field col s12">
                           <i class="material-icons prefix">folder</i>
                           <select name="kegiatan" required id="kegiatan">
                             <option value="" disabled="" selected=""> ---- </option>
                             <option value="bekerja">Bekerja</option>
                             <option value="wirausaha">Wirausaha</option>
                             <option value="ekstensi">Ekstensi</option>
                             <option value="job seeker">Job seeker</option>
                             <option value="part time">Part time</option>
                             <option value="freelance">Freelance</option>
                             <option value="lainnya">Lainnya(sebutkan)</option>
                           </select>
                           <label>Kegiatan Saat Ini</label>
                          <div class="input-field col s12">
														<i class="material-icons prefix"></i>
                           <input type="text" name="lainnya">
                           <label>Lainnya</label>
                          </div>
                        </div> <!--/input field-->
                        <div class="input-field col s12">
                          <i class="material-icons prefix">location_on</i>
                          <input name="tempat_kerja" id="tempat" type="text">
                          <label>tempat kerja/freelance/part-time/ekstensi</label>
                        </div>
                        <div class="input-field col s12">
                          <i class="material-icons prefix">person_outline</i>
                          <input name="posisi" id="posisi" type="text">
                          <label>Posisi Kerja</label>
                        </div>
                        <div class="input-field col s12">
                          <i class="material-icons prefix">person_pin</i>
                          <input name="jabatan" id="jabatan" type="text">
                          <label>Jabatan Kerja</label>
                        </div>
                        <div class="input-field col s12">
                          <i class="material-icons prefix">import_contacts</i>
                          <textarea name="sertifikat" id="sertifikat" class="materialize-textarea" data-length="120"></textarea>
                          <label>Sertifikat yang pernah diraih</label>
                        </div>
                        <div class="input-field col s12">
                          <i class="material-icons prefix">airplay</i>
                          <textarea name="lomba" id="lomba" class="materialize-textarea" data-length="120"></textarea>
                          <label>Lomba yang pernah diikuti</label>
                        </div>
                        <div class="input-field col s12">
                          <i class="material-icons prefix">grade</i>
                          <textarea name="prestasi" id="prestasi" class="materialize-textarea" data-length="120"></textarea>
                          <label>Prestasi yang pernah diraih</label>
                        </div>
                        <div class="input-field col s12">
                           <i class="material-icons prefix">check</i>
                           <select name="dosen" required id="dosen">
                            <option value="">---</option>
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                           </select>
                           <label>Berminat jadi dosen di PNJ?</label>
                        </div> <!--/input field-->
                    </div> <!--/row-->
                   <div class="step-actions">
                    <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                      <i class="small material-icons right">send</i>
                    </button>
										<button class="waves-effect waves-dark btn previous-step">Back</button>
                 </div>
                </div> <!--/step content-->
              </li>

             </ul>
           </form>
         </div> <!--/card content-->
       </div> <!--/card-->
     </div> <!--/col l12-->
   </div> <!--row-->
 </div> <!--container-->
</div> <!--/section-->

<script>
  $(document).ready(function(){
    $('.stepper').activateStepper();
    $('select').material_select();
  });
</script>
</html>
