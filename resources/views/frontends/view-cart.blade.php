@extends('master.master')

@section('content')

<div class="container-fluid bg-dark text-white p-5">
    <h2><i class="fas fa-cart-arrow-down"></i> Your Cart</h2>
    @if(Session::has('status'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
      {{ Session::get('status') }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
     </div>
     @endif
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Qty</th>
      <th scope="col">Price</th>
      <th scope="col">Amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @php $no=1; $total=0; @endphp
      @foreach($carts as $key=>$cart)
      @php
      $total+= $cart['qty'] * $cart['price'];
      @endphp
    <tr>
      <th scope="row">{{ $no }}</th>
      <td>
          <img src="{{ asset('assets/product-image/'.$cart['image']) }}" width=40 height=40>
      </td>
      <td>{{ $cart['title'] }}</td>
      <td>{{ $cart['qty'] }}</td>
      <td>{{ $cart['price'] }}</td>
      <td>
          {{ $cart['qty'] * $cart['price'] }}
      </td>
      <td>
         <a href="{{ route('carts.add',$key) }}">
           <i class="fas fa-plus-circle"></i>
        </a>
        <a href="{{ route('carts.subtract',$key) }}">
          <i class="fas fa-minus-circle"></i>
        </a>
        <a href="{{ route('carts.delete',$key) }}">
          <i class="fas fa-trash"></i>
        </a>
     </td>
    </tr>
    @php $no++; @endphp
    @endforeach
  </tbody>
  <tfoot>
   <tr>
     <td colspan="5">Total</td>
     <td>{{ $total }}</td>
     <td>MMK</td>
  </tr>
  </tfoot>
</table>
</div>

<div class="container-fluid text-white bg-dark">
<h2 class="pl-5">Fill User Informations</h2>
<form class="p-5" action="{{ route('carts.checkout') }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @if($errors->any())
     @foreach($errors->all() as $err)
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ $err }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
     </div>
      @endforeach
     @endif
  <div class="form-group">
    <label for="name">Username</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" name="address" id="address"></textarea>
  </div>
  <button type="submit" class="btn btn-outline-primary"><i class="fas fa-check-circle"></i> Check Out</button>
</form>
</div>

@endsection