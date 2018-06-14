<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <title>Alumnify</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('admin/img/book.png')}}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('admin/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

  <!-- Custom css -->
  <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">

  <!-- jQuery 3 -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{asset('')}}admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('admin/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('admin/js/demo.js')}}"></script>

  <script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script>
    $(document).ready(function () {
      $('.sidebar-menu').tree();
      $('#datepicker').datepicker({
        format: 'yyyy-mm-dd'
      });
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
      });
    })
  </script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{url('dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>FY</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Alumnify</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-danger">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <!-- <i class="fa fa-user-circle" class="img-circle" style="font-size: 25px;"></i> -->
              <span class="hidden-xs">{{Session::get('nama')}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{!!asset('upload/profile/').'/'.Session::get('foto')!!}" class="img-circle" alt="User Image">
                <!-- <i class="fa fa-user-circle" style="font-size: 70px; color: #fff;"></i> -->
                <p>
                  {{Session::get('nama')}} <br>
                  {{Session::get('jurusan')}} <br>
                  {{Session::get('angkatan')}}
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default"><i class="fa fa-user"></i> Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{url('logout')}}" class="btn btn-default"><i class="fa fa-power-off"></i> Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel" style="min-height: 60px">
      <div class="pull-left image">
          <img src="{!!asset('upload/profile/').'/'.Session::get('foto')!!}" class="img-circle" alt="User Image">
          <!-- <i class="fa fa-user-circle" style="font-size: 50px;"></i> -->
        </div>
      <div class="pull-left info">
        <p>{{Session::get('nama')}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{ (\Request::route()->getName() == 'dashboard') ? 'active' : ''}}">
        <a href="{{url('dashboard')}}">
          <i class="fa fa-home"></i> <span>Dashboard</span>
        </a>
      </li>

      <!-- Sidebar untuk Admin -->
      @if(Session::get('role') == 2)
      <li class="{{ (\Request::route()->getName() == 'alumni') ? 'active' : ''}}">
        <a href="{{url('alumni')}}">
          <i class="fa fa-users"></i> <span>Alumni</span>
        </a>
      </li>
      <li class="{{ (\Request::route()->getName() == 'mahasiswa') ? 'active' : ''}}">
        <a href="{{url('mahasiswa')}}">
          <i class="fa fa-user"></i> <span>mahasiswa</span>
        </a>
      </li>
      <li class="{{ (\Request::route()->getName() == 'lowongan') ? 'active' : ''}}">
        <a href="{{url('lowongan')}}">
          <i class="fa fa-newspaper-o"></i> <span>Lowongan</span>
        </a>
      </li>
      <li class="{{ (\Request::route()->getName() == 'beasiswa') ? 'active' : ''}}">
        <a href="{{url('beasiswa')}}">
          <i class="fa fa-file"></i> <span>Beasiswa</span>
        </a>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == '') ? 'active' : ''}}">
        <a href="#">
          <i class="fa fa-info"></i> <span>Info</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}"><a href="{{url('')}}"><i class="fa fa-circle-o"></i> Data Riset </a></li>
          <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}"><a href="{{url('')}}"><i class="fa fa-circle-o"></i> Entrepeneur</a></li>
          <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}"><a href="{{url('')}}"><i class="fa fa-circle-o"></i> Incubator</a></li>
          <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}"><a href="{{url('')}}"><i class="fa fa-circle-o"></i> Mapres</a></li>
        </ul>
      </li>
      <li class="{{ (\Request::route()->getName() == 'users' || \Request::route()->getName() == 'jenis') ? 'active' : ''}}">
        <a href="#">
          <i class="fa fa-gear"></i> <span>Pengaturan</span>
        </a>
      </li>

      <!-- Sidebar untuk Alumni -->
      @elseif(Session::get('role') == 1)
      <li class="treeview {{ (\Request::route()->getName() == '') ? 'active' : ''}}">
        <a href="#">
          <i class="fa fa-book"></i> <span>Info Akademik</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}"><a href="{{url('')}}"><i class="fa fa-circle-o"></i> Lomba</a></li>
          <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}"><a href="{{url('')}}"><i class="fa fa-circle-o"></i> Data Riset</a></li>
          <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}"><a href="{{url('')}}"><i class="fa fa-circle-o"></i> Entrepreneur</a></li>
          <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}"><a href="{{url('')}}"><i class="fa fa-circle-o"></i> Incubator</a></li>
          <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}"><a href="{{url('')}}"><i class="fa fa-circle-o"></i> Mapres</a></li>
        </ul>
      </li>
      <li class="treeview {{ (\Request::route()->getName() == '') ? 'active' : ''}}">
        <a href="#">
          <i class="fa fa-users"></i> <span>Alumni</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}"><a href="{{url('')}}"><i class="fa fa-circle-o"></i> Profile</a></li>
        </ul>
      </li>
      <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}">
        <a href="{{url('')}}">
          <i class="fa fa-file"></i> <span>Beasiswa</span>
        </a>
      </li>
      <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}">
        <a href="{{url('')}}">
          <i class="fa fa-newspaper-o"></i> <span>Lowongan</span>
        </a>
      </li>
      <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}">
        <a href="{{url('')}}">
          <i class="fa fa-user"></i> <span>Mahasiswa</span>
        </a>
      </li>
      <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}">
        <a href="{{url('')}}">
          <i class="fa fa-bullhorn"></i> <span>Syiar</span>
        </a>
      </li>
      <li class="{{ (\Request::route()->getName() == '') ? 'active' : ''}}">
        <a href="{{url('')}}">
          <i class="fa fa-bar-chart-o"></i> <span>Pembinaan</span>
        </a>
      </li>
      @endif
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Alumnify</b> version 1.0
    </div>
    <strong>Copyright &copy; {{date("Y")}}</strong>
  </footer>
</div>
<!-- ./wrapper -->
</body>
</html>
