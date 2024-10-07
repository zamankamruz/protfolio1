

<section id="resume" class="resume section">

<!-- Section Title -->

@foreach ($resumes as $resume)

<div class="container section-title" data-aos="fade-up">
  <h2>Resume</h2>
  <p>{{$resume->resumeintro}}</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row">

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <h3 class="resume-title">Sumary</h3>

      <div class="resume-item pb-0">
        <h4>{{$resume->summary}}</h4>
        <p><em>{{$resume->introduction}}</em></p>
        <ul>
          <li>{{$resume->address}}</li>
          <li>{{$resume->phone}}</li>
          <li>{{$resume->email}}</li>
        </ul>
      </div>

      @endforeach
      
      <!-- Edn Resume Item -->


  

      <h3 class="resume-title">Education</h3>
      @foreach ($educations as $education)
      <div class="resume-item">
        <h4>{{$education->degree}}</h4>
        <h5>{{$education->start_year}}</h5>
        <p><em>{{$education->end_year}}</em></p>
        <p>{{$education->institution}}</p>
      </div><!-- Edn Resume Item -->
      @endforeach
    </div>





     

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
      <h3 class="resume-title">Professional Experience</h3>

      @foreach ($experiences as $experience)
      <div class="resume-item">
        <h4>{{$experience->title}}</h4>
        <h5>{{$experience->start_year.$experience->end_year}}</h5>
        <p><em>{{$experience->company}}</em></p>
        <ul>
          <li>{{$experience->description}}</li>
         
        </ul>
      </div><!-- Edn Resume Item -->
      @endforeach
    </div>

   
  </div>

</div>

</section>