

<section id="stats" class="stats section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

  @foreach ($statsa as $stats)

    <div class="col-lg-3 col-md-6">
      <div class="stats-item">
        <i class="bi bi-emoji-smile"></i>
        <span data-purecounter-start="0" data-purecounter-end="{{ $stats->happy_clients }}" data-purecounter-duration="1" class="purecounter"></span>
        <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
      </div>
    </div><!-- End Stats Item -->

    <div class="col-lg-3 col-md-6">
      <div class="stats-item">
        <i class="bi bi-journal-richtext"></i>
        <span data-purecounter-start="0" data-purecounter-end="{{ $stats->projects }}" data-purecounter-duration="1" class="purecounter"></span>
        <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
      </div>
    </div>
    
    <!-- End Stats Item -->

    <div class="col-lg-3 col-md-6">
      <div class="stats-item">
        <i class="bi bi-headset"></i>
        <span data-purecounter-start="0" data-purecounter-end="{{ $stats->hours_of_support }}" data-purecounter-duration="1" class="purecounter"></span>
        <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
      </div>
    </div><!-- End Stats Item -->

    <div class="col-lg-3 col-md-6">
      <div class="stats-item">
        <i class="bi bi-people"></i>
        <span data-purecounter-start="0" data-purecounter-end="{{ $stats->hard_workers }}" data-purecounter-duration="1" class="purecounter"></span>
        <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
      </div>
    </div><!-- End Stats Item -->

  </div>

  @endforeach

</div>

</section>