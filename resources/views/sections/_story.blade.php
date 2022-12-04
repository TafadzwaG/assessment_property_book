 <section id="skills" class="skills">
     <div class="container" data-aos="fade-up">

         <div class="row">

             @if ($story->count() > 0)

                 @foreach ($story as $stry)
                     <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                         <img src="{{ $stry->story_photos[0]->path }}" class="img-fluid" alt="">

                     </div>

                     <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                         <div class="section-title">
                             <h2>Our Story</h2>
                         </div>


                         <h3> {{ $stry->story_title }} </h3>
                         <div class="">
                             <div class="card">
                                 <div class="card-header">
                                     <ul class="nav nav-tabs justify-content-center" role="tablist">
                                         <li class="nav-item">
                                             <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                                 <i class="now-ui-icons objects_umbrella-13"></i> Who We Are
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                                 <i class="now-ui-icons shopping_cart-simple"></i> Our Vision
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                                 <i class="now-ui-icons shopping_shop"></i> Our History
                                             </a>
                                         </li>

                                     </ul>
                                 </div>
                                 <div class="card-body">
                                     <!-- Tab panes -->
                                     <div class="tab-content text-center">
                                         <div class="tab-pane active" id="home" role="tabpanel">
                                             <p>
                                                 {{ $stry->who_we_are }}
                                             </p>

                                         </div>
                                         <div class="tab-pane" id="profile" role="tabpanel">
                                             <p> {{ $stry->vision }} </p>
                                         </div>
                                         <div class="tab-pane" id="messages" role="tabpanel">
                                             <p>{{ $stry->history }}</p>
                                         </div>

                                     </div>
                                 </div>
                             </div>
                         </div>





                     </div>
         </div>
         @endforeach


         @endif


     </div>
 </section>
