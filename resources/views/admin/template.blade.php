<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css') }}/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('css') }}/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css') }}/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('css') }}/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('css') }}/responsive.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('css') }}/select2.min.css">
  <link rel="stylesheet" href="{{ asset('css') }}/select2-bootstrap4.min.css">
  <!-- daterange picker -->
  <!-- <link rel="stylesheet" href="{{ asset('css') }}/daterangepicker.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('template') }}/assets/images/logo-v3.png" alt="AdminLTELogo">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->username }}</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ url('') }}" class="nav-link {{ $active === 'dashboard' ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/pengacara') }}" class="nav-link {{ $active === 'pengacara' ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>Kelola Pengacara</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/jadwal') }}" class="nav-link {{ $active === 'jadwal' ? 'active' : '' }}">
                <i class="nav-icon fas fa-copy"></i>
                <p>Kelola Jadwal</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          @yield('content')
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('js') }}/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js') }}/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js') }}/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('js') }}/jquery.dataTables.min.js"></script>
<script src="{{ asset('js') }}/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('js') }}/dataTables.responsive.min.js"></script>
<script src="{{ asset('js') }}/responsive.bootstrap4.min.js"></script>
<!-- Select2 -->
<script src="{{ asset('js') }}/select2.full.min.js"></script>
<!-- date-range-picker -->
<!-- <script src="{{ asset('js') }}/daterangepicker.js"></script>
<script src="{{ asset('js') }}/moment.min.js"></script> -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable();

    //Initialize Select2 Elements
    $('.select2').select2({
      theme: 'bootstrap4',
      placeholder: "Masukan pilihan",
      allowClear: true,
    })

    //Timepicker
    // $('#timepicker').datetimepicker({
    //   format: 'LT'
    // })$('#duration').daterangepicker({
    $('#timepicker').daterangepicker({
          timePicker: true,
          timePicker24Hour: true,
          timePickerIncrement: 1,
          locale: {
            format: 'HH:mm:ss'
          }
      }).on('show.daterangepicker', function (ev, picker) {
        picker.container.find(".calendar-table").hide();
      });
  });
</script>
</body>
</html>
