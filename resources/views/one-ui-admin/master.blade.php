<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    {{-- <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" /> --}}
    <link href="{{ asset('one-ui/css/now-ui-dashboard.css')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    {{-- <link href="../assets/demo/demo.css" rel="stylesheet" /> --}}
    <link href="{{ asset('one-ui/demo/demo.css')}}" rel="stylesheet" />

    <title>Document</title>
</head>

<body>
    @yield('content')
    <script src="{{ asset('one-ui/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('one-ui/js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('one-ui/js/core/popper.min.js')}}"></script>
    {{-- <script src="{{ asset('one-ui/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script> --}}
    <script src="{{ asset('one-ui/demo/demo.js') }}"></script>
    <script src="{{ asset('one-ui/js/now-ui-dashboard.js') }}"></script>
    <script src="{{ asset('one-ui/js/plugins/bootstrap-notify.js')}}"></script>
    <script src="{{ asset('one-ui/js/plugins/chartjs.min.js')}}"></script>
</body>

</html>
