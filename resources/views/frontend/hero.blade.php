



<section id="hero" class="hero section dark-background">

@foreach ($heroaction as $herosection)

<img src="{{ Storage::url('public/hero_images/' . $herosection->background_image) }}" alt="" data-aos="fade-in" class="">

<div class="container" data-aos="fade-up" data-aos-delay="100">
  <h2>{{$herosection->person_name}}</h2>
  <p>I'm <span class="typed" data-typed-items="{{$herosection->person_about}}">Designer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
</div>

@endforeach

</section>