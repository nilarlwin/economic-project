@extends ('master.master')

@section('title','Home Page')

@section('content')

<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
  <a class="navbar-brand text-white" href="#">SHOPPING</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="#">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="#">PRODUCTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="#">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
<!-- nav -->

<!-- Banner -->
<section id="banner">
    <div class="row">
    <div class="col-md-6 text-center pb-4" data-aos="fade-right">
     <h2 class="header-title">What We Do ?</h2>
     <p class="header-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra sapien nibh. Nulla facilisi. Maecenas luctus enim orci, ac pellentesque nisi cursus ac. Maecenas id velit ac libero facilisis bibendum. Proin id neque erat. Vivamus nisi massa, sodales ac luctus quis, maximus et mauris. Donec sed risus scelerisque felis maximus volutpat eu in mauris. Aenean pretium magna id nibh vestibulum tincidunt. Cras pulvinar, ligula a eleifend interdum, mauris sapien auctor ante, eget porta metus neque quis velit.</p>
     <button class="header-button">Learn More</button>
    </div>
    <div class="col-md-6" data-aos="fade-left">
      <img src="{{ asset('assets/images/social.jpg') }}" class="banner-image" alt="social media image">
    </div>
    </div>

    <img src="{{ asset('assets/images/wave1.jpg') }}" class="divider img-fluid w-100" alt="wave image"> 
</section>
<!-- Banner -->

<!-- service -->
<section id="service">
  <div class="container" id="service-box">
    <h2 class="service-title mt-3 text-center">Our Services</h2>
    <div class="row mt-5" data-aos="fade-up-right">
    @foreach($services as $service)
      <div class="col-md-4">
      <img src='{{ asset("assets/service-image/$service->image") }}' class="service-image" alt="digital marketing">
      <h2>{{ $service->title }}</h2>
      <p>{{ $service->description }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- service -->

<!-- app-box -->
<section id="app-box">
  <h2 class="text-center text-white">Our App For You</h2>
  <div class="container">
    <div class="row">
      <div class="col-md-6" data-aos="fade-up-right">
        <img src="{{ asset('assets/images/social.jpg') }}" alt="social">
      </div>
      <div class="col-md-6" data-aos="fade-up-left">
        <div class="app-body">
          <p class="text-white">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra sapien nibh. Nulla facilisi. Maecenas luctus enim orci, ac pellentesque nisi cursus ac. Maecenas id velit ac libero facilisis bibendum. Proin id neque erat. Vivamus nisi massa, sodales ac luctus quis, maximus et mauris. Donec sed risus scelerisque felis maximus volutpat eu in mauris. Aenean pretium magna id nibh vestibulum tincidunt. Cras pulvinar, ligula a eleifend interdum, mauris sapien auctor ante, eget porta metus neque quis velit.
          </p>
          <div class="group text-center">
            <button class="btn-app">IOS App</button>
            <button class="btn-app">Android App</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- app-box -->

<!-- product -->
<section id="product">
  <div class="container mt-5">
    <h2 class="text-center product-title">Our Products</h2>
    <div class="row">
      @foreach($products as $product)
  <!-- strat card -->
    <div class="card col-md-3" data-aos="zoom-in">
    <img class="card-img-top" height="230" src='{{ asset("assets/product-image/$product->image") }}' alt="Card image cap">
     <div class="card-body">
    <h5 class="card-title text-center">{{ $product->title }}</h5>
    <p class="card-text">{{ $product->description }}</p>
     <div class="row">
       <p class="pl-5">MMK {{ $product->price }}</p>
       <p class="ml-auto pr-5">
       <i class="fas fa-cart-arrow-down"></i>
      </p>
     </div>
       <div class="text-center">
       <a href="/detail" class="cart-btn"><i class="fas fa-cart-arrow-down"></i> View More</a>
       </div>
    </div>
    </div>
  <!-- end card -->
    @endforeach
  <!-- strat card -->
  
  <!-- end card -->
  <!-- strat card -->
  
  <!-- end card -->
    </div>
  </div>
</section>
<!-- product -->

<section id="footer">
  <img src="{{asset('assets/images/wave2.jpg') }}" class="w-100">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 pl-5" data-aos="zoom-in">
        <h2>CONTACT US</h2>
        <i class="fas fa-map-marker-alt"></i>
        <span>Yangon , Myanmar</span>
        <br><br>
        <i class="fas fa-phone-volume"></i>
        <span>+959777777777</span>
        <br><br>
        <i class="fas fa-envelope-open"></i>
        <span>nilarshopping@gmail.com</span>
      </div>
      <div class="col-md-6" data-aos="zoom-in-up">
        <div class="map">
        <h2 class="mb-3">Our Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43201.456122300755!2d96.13962563938732!3d16.85087932167004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194dcb74e99ed%3A0x85ec26a3c168a88d!2sKamaryut!5e0!3m2!1sen!2ssg!4v1635729657446!5m2!1sen!2ssg" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
  <p id="footer-bar">Design & Development By Nilar Programming</p>
</section>


@endsection