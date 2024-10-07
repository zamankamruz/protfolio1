



<header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>


    @foreach ($profile as $profiles)

    
    

    <div class="profile-img">
      <img src="{{ Storage::url('public/profile_images/' . $profiles->profile_image) }}" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <h1 class="sitename">{{$profiles->site_name}}</h1>
    </a>

    <div class="social-links text-center">
      <a href="{{$profiles->twitter}}" target="blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="{{$profiles->facebook}}" target="blank"  class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="{{$profiles->instagram}}" target="blank" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="{{$profiles->google_plus}}" target="blank" class="google-plus"><i class="bi bi-skype"></i></a>
      <a href="{{$profiles->linkedin}}" target="blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    @endforeach

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

