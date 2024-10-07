<section id="about" class="about section">

<!-- Section Title -->

@foreach ($abouts as $about)

<div class="container section-title" data-aos="fade-up">
  <h2>{{$about->title}}</h2>
  <p>{{$about->description}}</p>
</div>
<!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4 justify-content-center">
    <div class="col-lg-4">
      <img src="{{Storage::url('public/about_images/'. $about->profile_image )}}" class="img-fluid" alt="">
    </div>
    <div class="col-lg-8 content">
      <h2>{{$about->name}}</h2>
      <p class="fst-italic py-3">
      {{$about->about}}
      </p>
      <div class="row">
        <div class="col-lg-6">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$about->birthday}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{$about->website}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$about->phone}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->city}}</span></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$about->age}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about->degree}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$about->email}}/span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{$about->freelance}}</span></li>
          </ul>
        </div>
      </div>
      <p class="py-3">
      {{$about->summary}}
      </p>
    </div>
  </div>

</div>

@endforeach


</section>