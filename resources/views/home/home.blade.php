@extends('app')


@section('content')
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">GASHIRA</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#home_section">Home</a></li>
                    <li><a class="nav-link scrollto" href="#services_section">Services</a></li>

                    <li><a class="nav-link scrollto" href="#prices_section">Pricing</a></li>
                    <li><a class="getstarted scrollto" href="#footer_section">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <div class="home_section" id="home_section">
        @include('sections._home_section')
    </div>

    <div class="story_section" id="story_section">
        @include('sections._story')
    </div>

    <div class="services_section" id="services_section">
        @include('sections._services')
    </div>

    <div class="prices_section" id="prices_section">
        @include('sections._prices')
    </div>

    <div class="footer_section" id="footer_section">
        @include('sections._footer')
    </div>
@endsection
