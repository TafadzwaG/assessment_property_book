<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl/owl.theme.default.min.css') }}">

    <!-- Bootstrap Bundle with Popper -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <title>Propert Book Assessment</title>
</head>

<body>
    @yield('content')
    <script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            nav: false,
            margin: 10,
            dots: false,
            video:true,
        lazyLoad:true,
        center:true,
            animateOut: 'fadeOut',
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });


        $('.footer-flip').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            stagePadding: 30,
            smartSpeed: 450
        });


        //Our Story tab switching
        let tabSwitchers = document.querySelectorAll('[target-wrapper]')
        tabSwitchers.forEach(item => {
            item.addEventListener('click', (e)=> {
                let currentWrapperId = item.getAttribute('target-wrapper')
                let currentWrapperTargetId = item.getAttribute('target-tab')
                
                let currentWrapper =  document.querySelector(`#${currentWrapperId}`)
                let currentWrappersTarget = document.querySelector(`#${currentWrapperTargetId}`)

                let allCurrentTabItem = document.querySelectorAll(`[target-wrapper='${currentWrapperId}']`)
                let allCurrentWrappersTarget = document.querySelectorAll(`#${currentWrapperId} .tab-content`)
              
                if(currentWrappersTarget) {
                    if(!currentWrappersTarget.classList.contains('active')) {
                        allCurrentWrappersTarget.forEach(tabItem => {
                            tabItem.classList.remove('active')
                        })
                        allCurrentTabItem.forEach(item => {
                            item.classList.remove('active')
                        })
                        item.classList.add('active')
                        currentWrappersTarget.classList.add('active')
                    }
                }
            })
        })
    </script>

</body>

</html>
