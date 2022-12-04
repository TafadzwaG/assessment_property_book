<section id="hero" class="d-flex align-items-center">

    <div class="container">

        @if ($home_banner->count() > 0)
        @foreach ($home_banner as $home_bannah )
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>{{ $home_bannah->title}}</h1>
                <h2>{{ $home_bannah->description }}</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('one-ui/img/header.jpg') }}" class="img-fluid animated" alt="">
            </div>
        </div>
        @endforeach
            
        @endif
        
    </div>

</section><!-- End Hero -->
