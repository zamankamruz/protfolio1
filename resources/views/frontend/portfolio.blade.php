

<section id="portfolio" class="portfolio section light-background">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Portfolio</h2>
</div><!-- End Section Title -->

<div class="container">

  <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-app">App</li>
      <li data-filter=".filter-product">Product</li>
      <li data-filter=".filter-branding">Branding</li>
      <li data-filter=".filter-books">Books</li>
    </ul>
    
    <!-- End Portfolio Filters -->

     <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
      @foreach ($portfolios as $portfolio)
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower($portfolio->category) }}">
            <div class="portfolio-content h-100">
                <img src="{{ asset('storage/portfolio_images/' . $portfolio->image) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{ $portfolio->title }}</h4>
                    <p>{{ $portfolio->description }}</p>
                    <a href="{{ asset('storage/portfolio_images/' . $portfolio->image) }}" title="{{ $portfolio->title }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
            </div>
        </div>
      @endforeach
   </div>


    <!-- End Portfolio Container -->

  </div>

</div>

</section>