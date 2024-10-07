<section id="services" class="services section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Services</h2>
  
  @foreach ($services_descriptions as $descriptions)

  <p>{{$descriptions->description}}</p>

  @endforeach

</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">



  @foreach ($services as $servicess)
  
    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
      <div class="icon flex-shrink-0"><i class="{{$servicess->icon}}"></i></div>
      <div>
        <h4 class="title"><a href="service-details.html" class="stretched-link">{{$servicess->title}}</a></h4>
        <p class="description">{{$servicess->description}}</p>
      </div>
    </div>

    @endforeach

    <!-- End Service Item -->


  </div>

</div>

</section>