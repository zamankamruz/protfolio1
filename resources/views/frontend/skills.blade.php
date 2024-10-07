

<section id="skills" class="skills section light-background">

<!-- Section Title -->

@foreach ($skillabout as $skilabouts)

@endforeach
<div class="container section-title" data-aos="fade-up">
  <h2>{{$skilabouts->skills}}</h2>
  <p>{{$skilabouts->skill_about}}</p>
</div>
<!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row skills-content skills-animation">

    <div class="col-lg-6">

      @foreach ($skill as $skills)

      <div class="progress">
        <span class="skill"><span>{{$skills->name}}</span> <i class="val">{{$skills->number. $skills->percentage}}</i></span>
        <div class="progress-bar-wrap">
          <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->number}}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>

      @endforeach
      <!-- End Skills Item -->

    </div>



  </div>

</div>

</section>
