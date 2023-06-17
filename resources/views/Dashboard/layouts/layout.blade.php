<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
  
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;
  
      var pusher = new Pusher('921ca6964dbd6217c8a2', {
        cluster: 'eu'
      });
  
      var channel = pusher.subscribe('new-post');
      channel.bind('post-event', function(data) {
        alert(JSON.stringify(data));
      });
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title>CoreUI Bootstrap 4 Admin Template</title>
    <!-- Icons -->
    <link href="{{ url('admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin/css/simple-line-icons.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <!-- Main styles for this application -->
    <link href="{{ url('admin/dest/style.css') }}" rel="stylesheet">

     <!-- data tables -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.2.1/css/fixedColumns.dataTables.min.css">
</head>

<body class="navbar-fixed sidebar-nav fixed-nav">
     <!-- Header -->
     @include('Dashboard.layouts.header')

    <!-- Sidebar -->
    @include('Dashboard.layouts.sidebar')

    <!-- Main content -->
    @yield('content')

    <!-- Aside Menu -->
    @include('Dashboard.layouts.menu')

    <!-- Footer -->
    @include('Dashboard.layouts.footer')
    
     <!-- sweet alert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{ url('admin/js/libs/jquery.min.js') }}"></script>
    <script src="{{ url('admin/js/libs/tether.min.js') }}"></script>
    <script src="{{ url('admin/js/libs/bootstrap.min.js') }}"></script>
    <script src="{{ url('admin/js/libs/pace.min.js') }}"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="{{ url('admin/js/libs/Chart.min.js') }}"></script>

    <!-- CoreUI main scripts -->

    <script src="{{ url('admin/js/app.js') }}"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <script src="{{ url('admin/js/views/main.js') }}"></script>
    <script src="{{ url('admin/js/views/custom.js') }}"></script>

    <!-- Grunt watch plugin -->
    <script src="//localhost:35729/livereload.js"></script>

   

    <!-- datatable -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.2.1/js/dataTables.fixedColumns.min.js"></script>
</body>

</html>
