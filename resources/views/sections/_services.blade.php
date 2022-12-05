 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
     <div class="container" data-aos="fade-up">

         <div class="section-title">
             <h2>Services</h2>
         </div>

         <div class="row">

             @if ($services->count() > 0)
                 @foreach ($services as $service)
                     <div class="col-xl-3 col-md-6 d-flex align-items-stretch" style="margin-bottom:2rem "
                         data-aos="zoom-in" data-aos-delay="100">
                         <div class="icon-box">
                             <div class="icon">
                                 <div class="icon-image">
                                     <img src="{{ $service->icon }}"
                                         alt="icon">

                                 </div>
                             </div>
                             <h4><a href="">{{ $service->title }}</a></h4>
                             <div style="height: 100px; overflow:hidden; text-align:left">
                             <p > {{ $service->description }}</p>
                                
                             </div>
                         </div>
                     </div>
                 @endforeach

            @else
                     <h1>No services Available in the database</h1>
             @endif





         </div>

     </div>
 </section>
