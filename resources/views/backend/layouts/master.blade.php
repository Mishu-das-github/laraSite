<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    @yield('title','LaraSite')
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('backend.partials.styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    @include('backend.partials.navbar')

    @include('backend.partials.sidebar')

    @yield('content')
    <!-- /.content-wrapper -->
    @include('backend.partials.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  @include('backend.partials.scripts')
</body>

</html>