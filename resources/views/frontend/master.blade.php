<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('home/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('home/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('home/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('home/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('home/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('home/assets/css/main.css')}}" rel="stylesheet">


</head>

<body class="index-page">


 @include('frontend.header')


  <main class="main">
    

    <!-- Hero Section -->
    @include('frontend.hero')
    <!-- /Hero Section -->


    <!-- About Section -->
    @include('frontend.about')
    <!-- /About Section -->



    <!-- Stats Section -->
    @include('frontend.statas')
    <!-- /Stats Section -->



    <!-- Skills Section -->
    @include('frontend.skills')
    <!-- /Skills Section -->


    <!-- Resume Section -->
    @include('frontend.resume')
    <!-- /Resume Section -->

    <!-- Portfolio Section -->
    @include('frontend.portfolio')

    <!-- /Portfolio Section -->

    <!-- Services Section -->
    @include('frontend.services')

    <!-- /Services Section -->

    <!-- Testimonials Section -->
    @include('frontend.testimonials')

    <!-- /Testimonials Section -->

    <!-- Contact Section -->
    @include('frontend.contact')

    <!-- /Contact Section -->

  </main>

  @include('frontend.footer')


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->

  <!-- Vendor JS Files -->
  <script src="{{asset('home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('home/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('home/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('home/assets/vendor/typed.js/typed.umd.js')}}"></script>
  <script src="{{asset('home/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('home/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('home/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('home/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('home/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('home/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('home/assets/js/main.js')}}"></script>

</body>

</html>