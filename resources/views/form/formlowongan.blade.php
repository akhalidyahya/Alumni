<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form id="form-datascript" class="form-horizontal" action="{{url('lowongan')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}} {{method_field('POST')}}
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label class="control-label col-sm-3" for="no_do">Judul</label>
              <div class="col-sm-9">
                <input required type="text" class="form-control" name="judul" id="judul" placeholder="max 50 char">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="customer">Lokasi</label>
              <div class="col-sm-9">
                <input required type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Masukan lokasi lowongan contoh: Depok Timur">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="barang">Description
                <label class="label label-danger">max 1000 char</label>
              </label>
              <div class="col-sm-9">
                <textarea required name="isi" class="textarea form-control" id="isi" placeholder="max. 1000 char"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="barang">Gambar/poster</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="image">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="barang">Kategori</label>
              <div class="col-sm-9">
                <select class="form-control" name="kategori" required>
                  <option value="lainnya">Lainnya</option>
                </select>
              </div>
            </div>
            <div class="text-center">
              <button id="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- CK Editor -->
<script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor1')
    $('.textarea').wysihtml5();
  })
</script>
