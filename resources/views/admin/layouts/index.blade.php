<!DOCTYPE html>
<html>
@include('admin.layouts.styles')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Remote</b>Apps</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    @include('admin.layouts.navbar')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
        @yield('content')
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('admin.layouts.footer')




</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
@include('admin.layouts.script')
</body>
</html>
