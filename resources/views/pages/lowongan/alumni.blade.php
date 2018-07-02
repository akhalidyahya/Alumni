@extends('layout.app')
@section('content')
<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<section class="content-header">
	<h1>
		Informasi Lowongan
		<small>Informasi mengenai lowongan yang ada</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-newspaper-o"></i> Data Lowongan</a></li>
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

			<a href="#" onclick="tambahData()" class="btn btn-primary" onclick="tambahData()"><i class="fa fa-pencil"></i> Post Lowongan</a>

		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div class="row">
          <div class="col-md-4 col-md-push-8">
            <form class="" action="index.html" method="post">
              <div class="pull-left">
                <input type="search" name="cari" class="form-control">
              </div>
              <div class="push-right">
                  <button type="submit" name="button" class="btn btn-default">Search</button>
              </div>
            </form>
          </div>
          <div class="col-md-8 col-md-pull-4">
            <div id="konten">
              @foreach($lowongan as $data)
              <div class="col-sm-12" style="margin: 10px;">
                <div class="col-sm-4">
                  <img src="{{asset('upload/lowongan/').'/'.$data->foto}}" alt="Lowongan pict" class="img-responsive">

                  <label for="" class="label label-control label-default">{{$data->kategori}}</label>
                  <label for="" class="label label-control label-default">{{date('D, m M Y', strtotime($data->created_at))}}</label>
                  <label for="" class="label label-control label-default">{{date('H:i', strtotime($data->created_at))}}</label>
                </div>
                <div class="col-sm-8">
                  <a href="#" class="lowongan-content">
                    <h3>{{$data->judul}}</h3>
                    <p>{!!strip_tags(substr($data->isi,0,200))!!}</p>
                    <div class="read-more pull-right">Read More <i class="fa fa-caret-right"></i> </div>
                  </a>
                  @if(Session::get('id') == $data->alumni_id)
                  <a href="#" onclick="editData({{$data->id}})"><i class="fa fa-pencil"> Edit </i></a>
                  <a href="#" onclick="deleteData({{$data->id}})"><i class="fa fa-trash"> Delete </i></a>
                  @endif
                </div>
              </div>
              @endforeach
            </div>
          </div>
      </div>
		</div>
		<!-- /.box-body -->
	</div>
</section>
@include('form/formlowongan')
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  // $('#konten').html("");
  function tambahData() {
    save_method = 'add';
    $('input[name=_method]').val('POST');
    $('#myModal').modal('show');
    $('#myModal form')[0].reset();
    $('.modal-title').text('Post lowongan baru');
    $('#gambar').attr("src","");
    CKEDITOR.instances.isi.setData( "" );
  }

  function deleteData(id) {
    var popup = confirm("Apakah ingin hapus data?");
    var csrf_token = $('meta[name="csrf_token"]').attr('content');
    if(popup == true) {
      $.ajax({
        url: "{{ url('lowongan') }}" + '/' + id,
        type: "POST",
        data: {'_method': 'DELETE','_token': csrf_token},
        success: function(data) {
          document.location.href="{{url('lowongan')}}";
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
        $('#gambar').attr("src","{{asset('upload/lowongan')}}" + "/" + data.foto);
        CKEDITOR.instances.isi.setData( data.isi );
        // $('#isi').val(data.isi);
      },
      error: function(){
        alert("something went wrong!");
      }
    });
  }

  $('#submit').click(function(e){
    e.preventDefault();
    var id = $('#id').val();
    if(save_method == 'add') url = "{{url('lowongan')}}";
    else url = "{{url('lowongan').'/'}}" + id;
    $('#isi').val(CKEDITOR.instances.isi.getData());

    $.ajax({
      url:url,
      type:'POST',
      // data: $('#myModal form').serialize(),
      data: new FormData($('#myModal form')[0]),
      contentType: false,
      processData: false,
      success: function($data){
        $('#success').removeClass('hide');
        $('#myModal').modal('hide');
        document.location.href="{{url('lowongan')}}";
      },
      error: function(){
        $('#error').removeClass('hide');
      }
    });
  });
</script>
@endsection
