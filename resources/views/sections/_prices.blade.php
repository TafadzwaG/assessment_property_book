<div class="container-fluid" style="background: linear-gradient(90deg, #fff 0%, #fff 100%);">
    <div class="container p-5">
        <div class="section-title">
            <h2>Pricing</h2>
        </div>

        <div class="row">

            @if ($prices->count() > 0)

                @foreach ($prices as $price)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">{{ $price->type }}</h5>
                                    <br><br>
                                    <span class="h2">${{ $price->price }}</span>/month
                                    <br><br>
                                </div>
                                <p class="card-text text-center">{{ $price->description }}</p>
                            </div>
                            <ul class="list-group list-group-flush">

                                @foreach ($price->tags as $tag)
                                    <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path
                                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg>{{ $tag->title }}</li>
                                @endforeach


                            </ul>
                            <div class="card-body text-center ">

                                <a href="#" class="btn-get-started scrollto">Start Free Trial</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            @endif


        </div>
    </div>
