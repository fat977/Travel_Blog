<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title>CoreUI Bootstrap 4 Admin Template</title>
    <!-- Icons -->
    <link href="{{ url('admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('admin/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ url('admin/dest/style.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
</head>
<body>
    <div id="app">
        <main class="py-5">
            @yield('content')
        </main>
    </div>

     <!-- Bootstrap and necessary plugins -->
     <script src="{{ url('js/libs/jquery.min.js') }}"></script>
     <script src="{{ url('js/libs/tether.min.js') }}"></script>
     <script src="{{ url('js/libs/bootstrap.min.js') }}"></script>
     <script src="{{ url('js/libs/pace.min.js') }}"></script>
 
     <!-- Plugins and scripts required by all views -->
     <script src="{{ url('js/libs/Chart.min.js') }}"></script>
 
     <!-- CoreUI main scripts -->
 
     <script src="{{ url('js/app.js') }}"></script>
 
     <!-- Plugins and scripts required by this views -->
     <!-- Custom scripts required by this view -->
     <script src="{{ url('js/views/main.js') }}"></script>
 
     <!-- Grunt watch plugin -->
     <script src="//localhost:35729/livereload.js"></script>
</body>
</html>
