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
          <form id="form-datascript" class="form-horizontal" action="{{url('akun')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}} {{method_field('POST')}}
            <input type="hidden" name="id" id="id">
            <input type="hidden" name="role" id="role">
            <div class="form-group">
              <label class="control-label col-sm-3" for="no_do">Nama</label>
              <div class="col-sm-9">
                <div id="nama"></div>
                <input type="hidden" name="nama_" id="nama_">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="barang">Email</label>
              <div class="col-sm-9">
                <div id="email"></div>
                <input type="hidden" name="email_" id="email_">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="customer">Password</label>
              <div class="col-sm-9">
                <input required type="text" class="form-control" name="password" id="password" placeholder="Masukan Password">
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
