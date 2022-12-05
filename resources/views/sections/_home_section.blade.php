<section id="hero" class="d-flex align-items-center">

    <div class="container">

        @if ($home_banner->count() > 0)
            @foreach ($home_banner as $home_bannah)
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                        <h1>{{ $home_bannah->title }}</h1>
                        <h2>{{ $home_bannah->description }}</h2>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="#about" class="btn-get-started scrollto" style="font-weight:600">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=O0hJtYJcC-k" class="glightbox btn-watch-video">
                                <img src="{{ asset('file-image/icons8-play-button-circled-100.png') }}"
                                    style="height: 50px; padding-right: 10px" alt="">
                                <span>Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <div class="owl-carousel owl-theme">
                            @if ($home_bannah->banner_images->path)
                                <div class="item">
                                    <img src="{{ $home_bannah->banner_images->path }}" alt="">
                                </div>
                            @else
                                <div class="item">
                                    <img src="{{ asset('file-image/4.jpg') }}" alt="">
                                </div>
                            @endif

                        </div>


                    </div>
                </div>
            @endforeach
            @else
         <h1>No Home Banners Available in the database</h1>

        @endif

    </div>

</section><!-- End Hero -->
