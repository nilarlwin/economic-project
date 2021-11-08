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
        <a class="nav-link text-white" href="/">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="#">PRODUCTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="view/cart">
            <i class="fas fa-cart-arrow-down"></i> 
            <span class="badge badge-pill badge-light">
              @if(session()->has('count'))
              {{ session()->get('count') }}
              @else 0
              @endif
            </span>
        </a>
      </li>
    </ul>
  </div>
</nav>
<!-- nav -->

<!-- product -->
<section id="product">
  <div class="container">
    <h2 class="text-center product-title">Our Products</h2>
    <div class="row">
      @foreach($products as $product)
  <!-- strat card -->
    <div class="card col-md-3">
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
       <a href="{{ route('carts.create',$product->id) }}" class="cart-btn"><i class="fas fa-cart-arrow-down"></i> Add To Cart</a>
       </div>
    </div>
    </div>
  <!-- end card -->
    @endforeach
    </div>
    {{ $products->links() }}
  </div>
</section>
<!-- product -->

<section id="footer">
  <p id="footer-bar">Design & Development By Nilar Programming</p>
</section>


@endsection