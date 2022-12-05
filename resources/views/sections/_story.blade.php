 <section id="skills" class="skills">
     <div class="container" data-aos="fade-up">

         <div class="row">

             @if ($story->count() > 0)



                 @foreach ($story as $stry)
                     <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                         <div class="owl-carousel owl-theme">
                             @if ($stry->story_photos->count() > 0)
                                 @foreach ($stry->story_photos as $photo)
                                     <div class="item">
                                         <img src="{{ $photo->path }}" class="img-fluid" alt="">
                                     </div>
                                 @endforeach
                             @else
                                 <div class="item">
                                     <img src="{{ asset('file-image/3.jpg') }}" class="img-fluid" alt="">
                                 </div>
                             @endif




                         </div>



                     </div>

                     <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                         <div class="section-title">
                             <h2>Our Story</h2>
                         </div>


                         <h3> {{ $stry->story_title }} </h3>
                         <div class="pt-4">
                             <div class="tab-switcher">


                                 <ul>
                                     <li class="tab-item active" target-wrapper="first-dynamic-table" target-tab="home">
                                         Who We Are</li>
                                     <li class="tab-item" target-wrapper="first-dynamic-table" target-tab="about">
                                         Our Vision
                                     </li>
                                     <li class="tab-item" target-wrapper="first-dynamic-table" target-tab="faqs">
                                         Our History
                                     </li>

                                 </ul>
                                 <div id="first-dynamic-table">
                                     <div class="tab-content active" id="home">
                                         <p>{{ $stry->who_we_are }}</p>
                                     </div>
                                     <div class="tab-content" id="about">
                                         <p>{{ $stry->vision }}</p>
                                     </div>
                                     <div class="tab-content" id="faqs">
                                         <p>{{ $stry->history }}</p>
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
