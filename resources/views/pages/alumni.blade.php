@extends('layout.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<section class="content-header">
	<h1>
		Data Alumni
		<small>Informasi mengenai data alumni</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-users"></i> Data Alumni</a></li>
	</ol>
</section>
<section class="content">
	<div class="box">
		<div class="box-header">
			<!-- <h3 class="box-title">List Data</h3> -->
      <!-- alert success -->
      <div id="success" class="alert alert-success hide" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        Your action was <strong>Successful</strong>
      </div>
      <!-- alert error -->
      <div id="error" class="alert alert-danger hide" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        something went <strong>wrong!</strong>
      </div>
      @if(Session::has('status'))
      <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        {{ Session::get('status') }}
      </div>
      @endif
      <br>

			<a href="{{route('alumni.create')}}" class="btn btn-primary" onclick="tambahData()"><i class="fa fa-plus"></i> Tambah Data</a>

      <!-- Expot/Import Button -->
      <div class="pull-right">
        <a id="import-btn" href="#" class="btn btn-default"><i class="fa fa-upload"></i> Import</a>
        <a href="{{route('storing.export')}}" class=" btn btn-default" style=""><i class="fa fa-download"></i> Export</a>
      </div>
      <!-- END Export/Import Button -->

		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="table" class="table table-bordered table-striped">
				<thead>
					<tr>
            <th>Akun</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Angkatan</th>
            <th>Jurusan</th>
            <th>Prodi</th>
            <th>aksi</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
		<!-- /.box-body -->
	</div>
</section>
@include('form/formakun')
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  $('#import-btn').click(function(){
      $('#import-form').modal('show');
      $('.modal-title').text('Import File From Excel');
  });

  var t = $('#table').DataTable({
    'processing'  : true,
    'serverSide'  : true,
    'ajax'        : "{{ route('api.alumni') }}",
    'dataType'    : 'json',
    'paging'      : true,
    'lengthChange': true,
    'columns'     : [
      {data:'status',name:'status'},
      {data:'nama', name: 'nama'},
      {data:'jeniskelamin', name: 'jeniskelamin'},
      {data:'angkatan', name: 'angkatan'},
      {data:'jurusan', name: 'jurusan'},
      {data:'prodi', name: 'prodi'},
      {data:'aksi', name: 'aksi', orderable: false, searchable: false},
    ],
    'info'        : true,
    'autoWidth'   : false
  });

  function editData(id) {
    document.location.href="{{url('alumni')}}"+"/"+id+"/edit";
  }

  function deleteData(id) {
    var popup = confirm("Apakah ingin hapus data?");
    var csrf_token = $('meta[name="csrf_token"]').attr('content');
    if(popup == true) {
      $.ajax({
        url: "{{ url('alumni') }}" + '/' + id,
        type: "POST",
        data: {'_method': 'DELETE','_token': csrf_token},
        success: function(data) {
          t.ajax.reload();
        },
        error: function(){
          alert("something went wrong!");
        }
      });
    }
  }

  function activate(id) {
    $('input[name=_method]').val('POST');
    $('#myModal').modal('show');
    $('.modal-title').text('Aktifkan akun');
    $('#myModal form')[0].reset();
      $.ajax({
        url:"{{url('alumni')}}"+"/"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {

          $('#id').val(data.id);
          $('#nama').text(data.nama);
          $('#email').text(data.email);
          $('#nama_').val(data.nama);
          $('#email_').val(data.email);
          $('#role').val(data.status_alumni);
          $('#password').val(generatePassword());
        },
        error: function(){
          alert('something went wrong!');
        }
      });
  }

  function generatePassword() {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < 5; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
  }

  function deactivate(id){
    $('input[name=_method]').val('PATCH');
    var popup = confirm('Ingin non aktifkan akun?');
    if (popup == true) {
      $.ajax({
        url:"{{url('akun/deactivate')}}"+"/"+id,
        type: "POST",
        dataType: "JSON",
        success: function(data) {
          t.ajax.reload();
        },
        error: function(){
          // alert('something went wrong!');
          t.ajax.reload();
        }
      });
    }
  }

  // function reset(id){
  //   $('input[name=_method]').val('PATCH');
  //   var popup = confirm('Ingin reset password akun?');
  //   if (popup == true) {
  //     $.ajax({
  //       url:"{{url('akun/reset')}}"+"/"+id,
  //       type: "PATCH",
  //       dataType: "JSON",
  //       success: function(data) {
  //         t.ajax.reload();
  //       },
  //       error: function(){
  //         // alert('something went wrong!');
  //         t.ajax.reload();
  //       }
  //     });
  //   }
  // }

  // $('#submit').click(function(e){
  //   e.preventDefault();
  //   var id = $('#id').val();
  //   url = "{{url('akun')}}";
  //
  //   $.ajax({
  //     url:url,
  //     type:'POST',
  //     data: $('#myModal form').serialize(),
  //     // data: new FormData($('#myModal form')[0]),
  //     contentType: false,
  //     processData: false,
  //     success: function($data){
  //       $('#myModal').modal('hide');
  //       t.ajax.reload();
  //     },
  //     error: function(){
  //       $('#error').removeClass('hide');
  //     }
  //   });
  // });
</script>
@endsection
