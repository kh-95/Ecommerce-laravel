
@include('admin.layouts.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('admin.layouts.nav')

  
    @include('admin.layouts.side')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
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
     @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="http://localhost/ecommerce/public/admin/plugins/jquery/jquery.min.js"></script>
<script src="http://localhost/ecommerce/public/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/ecommerce/public/admin/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="http://localhost/ecommerce/public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="http://localhost/ecommerce/public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="http://localhost/ecommerce/public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> 
<link rel="stylesheet" href="http://localhost/ecommerce/public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="http://localhost/ecommerce/public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<script src="{{url('http://localhost/ecommerce/vendor\yajra\laravel-datatables-buttons\src\resources\assets\buttons.server-side.js')}}">
</script>

<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/ecommerce/public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="http://localhost/ecommerce/public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://localhost/ecommerce/public/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/ecommerce/public/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="http://localhost/ecommerce/public/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="http://localhost/ecommerce/public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/ecommerce/public/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/ecommerce/public/admin/plugins/moment/moment.min.js"></script>
<script src="http://localhost/ecommerce/public/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://localhost/ecommerce/public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://localhost/ecommerce/public/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://localhost/ecommerce/public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/ecommerce/public/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/ecommerce/public/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/ecommerce/public/admin/dist/js/demo.js"></script>

@stack('js')

@stack('css')



</body>
</html>
