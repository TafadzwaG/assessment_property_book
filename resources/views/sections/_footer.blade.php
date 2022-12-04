@if ($footer_content->count() > 0)
    <section class="my-footer">
        <div class="owl-carousel owl-theme ">
            @foreach ($footer_content as $footer)
            <div class="item">
                <div class="container">
                    <div class="container-footer">
                        <h2 class="text-center"> {{ $footer->title }}</h1>

                    </div>
                    <div class="para-container">
                        <p class="card-text text-center">
                            {{ $footer->description }}
                        </p>
                    </div>


                    <div class="button-container">
                        <a href="#" class="btn-get-started scrollto">Get Started</a>
                    </div>

                </div>
            </div>
                
            @endforeach
        </div>




    </section>
@else
    <section class="my-footer">
        <div class="container">
            <div class="container-footer">
                <h2 class="text-center"> We love to make perfect solutions for your business</h1>

            </div>
            <div class="para-container">
                <p class="card-text text-center">
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution
                    of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many
                    desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                    and a
                    search for 'lorem ipsum'
                </p>
            </div>


            <div class="button-container">
                <a href="#" class="btn-get-started scrollto">Get Started</a>
            </div>

        </div>
    </section>
@endif
