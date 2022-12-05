<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    {{-- <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" /> --}}
    <link href="{{ asset('one-ui/css/now-ui-dashboard.css') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    {{-- <link href="../assets/demo/demo.css" rel="stylesheet" /> --}}
    <link href="{{ asset('one-ui/demo/demo.css') }}" rel="stylesheet" />

    <title>Document</title>
</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!--
            Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
        -->
            <div class="logo">
                <a href="#" class="simple-text logo-normal">
                    Business Dashboard
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li class="{{ 'dashboard' == request()->path() ? 'active' : '' }}">
                        <a href="/dashboard">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{ 'services' == request()->path() ? 'active' : '' }}">
                        <a href="/services">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Services</p>
                        </a>
                    </li>
                    <li class="{{ 'footers' == request()->path() ? 'active' : '' }}">
                        <a href="/footers">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Footers</p>
                        </a>
                    </li>
                    <li class="{{ 'pricing' == request()->path() ? 'active' : '' }}">
                        <a href="/pricing">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Pricing</p>
                        </a>
                    </li>
                    <li class="{{ 'tags' == request()->path() ? 'active' : '' }}">
                        <a href="/tags">
                            <i class="now-ui-icons shopping_tag-content"></i>
                            <p>Pricing Tags</p>
                        </a>
                    </li>
                    <li class="{{ 'home-banner' == request()->path() ? 'active' : '' }}">
                        <a href="/home-banner">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Home Banner</p>
                        </a>
                    </li>
                    <li class="{{ 'our-story' == request()->path() ? 'active' : '' }}">
                        <a href="/our-story">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Our Story</p>
                        </a>
                    </li>
                    <li class="{{ 'story-photo' == request()->path() ? 'active' : '' }}">
                        <a href="/story-photo">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Story Images</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Logout</a>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>
    </div>

    <script src="{{ asset('one-ui/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('one-ui/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('one-ui/js/core/popper.min.js') }}"></script>
    {{-- <script src="{{ asset('one-ui/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script> --}}
    <script src="{{ asset('one-ui/demo/demo.js') }}"></script>
    <script src="{{ asset('one-ui/js/now-ui-dashboard.js') }}"></script>
    <script src="{{ asset('one-ui/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('one-ui/js/plugins/chartjs.min.js') }}"></script>
    <script>
        $('#exampleModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var recipient = button.data('whatever') // Extract info from data-* attributes
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    var modal = $(this)
                    modal.find('.modal-title').text('New message to ' + recipient)
                    modal.find('.modal-body input').val(recipient)
                }
    </script>
</body>

</html>
