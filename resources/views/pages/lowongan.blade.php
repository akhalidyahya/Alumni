@extends('layout.app')
@section('content')
<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<section class="content-header">
	<h1>
		Data Lowongan
		<small>Informasi mengenai data lowongan</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-file"></i> Data Lowongan</a></li>
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

			<a href="#" onclick="tambahData()" class="btn btn-primary" onclick="tambahData()"><i class="fa fa-plus"></i> Tambah Data</a>

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
            <th>Tanggal</th>
            <th>Kategori</th>
            <th>Lokasi</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Author</th>
            <th>aksi</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
		<!-- /.box-body -->
	</div>
</section>
@include('form/formlowongan')
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  function tambahData() {
    save_method = 'add';
    $('input[name=_method]').val('POST');
    $('#myModal').modal('show');
    $('#myModal form')[0].reset();
    $('.modal-title').text('Post lowongan baru');
  }

  var t = $('#table').DataTable({
    'processing'  : true,
    'serverSide'  : true,
    'ajax'        : "{{ route('api.lowongan') }}",
    'dataType'    : 'json',
    'paging'      : true,
    'lengthChange': true,
    'columns'     : [
      {data:'created_at',name:'created_at'},
      {data:'kategori', name: 'kategori'},
      {data:'lokasi', name: 'lokasi'},
      {data:'judul', name: 'judul'},
      {data:'isi', name: 'isi'},
      {data:'nama', name: 'nama'},
      {data:'aksi', name: 'aksi', orderable: false, searchable: false},
    ],
    'info'        : true,
    'autoWidth'   : false
  });

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

  function editData(id) {
    save_method = 'edit';
    $('input[name=_method]').val('PATCH');
    $('#myModal form')[0].reset();

    $.ajax({
      url: "{{url('lowongan')}}"+"/"+id+"/edit",
      type: "GET",
      dataType: "JSON",
      success: function(data) {
        $('#myModal').modal('show');
        $('.modal-title').text('Detail data lowongan');

        $('#id').val(data.id);
        $('#judul').val(data.judul);
        $('#lokasi').val(data.lokasi);
        $('#kategori').val(data.kategori);
        $('#isi').val(data.isi);
      },
      error: function(){
        alert("something went wrong!");
      }
    });
  }
</script>
@endsection
