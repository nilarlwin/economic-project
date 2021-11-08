@extends('master.master')

@section('content')

<div class="container-fluid bg-dark text-white p-5">
    <h2><i class="fas fa-cart-arrow-down"></i> Order
    <a class="float-right" href="{{ route('orders.index') }}">
        To Customer List
      <i class="fas fa-hand-point-left"></i> 
   </a>
   </h2>
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
    </tr>
  </thead>
  <tbody>
      @php $no=1; $total=0; @endphp
      @foreach($orders as $order)
      @php
      $total+= $order['quantity'] * $order['price'];
      @endphp
    <tr>
      <th scope="row">{{ $no }}</th>
      <td>
          <img src="{{ asset('assets/product-image/'.$order['image']) }}" width=40 height=40>
      </td>
      <td>{{ $order['title'] }}</td>
      <td>{{ $order['quantity'] }}</td>
      <td>{{ $order['price'] }}</td>
      <td>
          {{ $order['quantity'] * $order['price'] }}
      </td>
    </tr>
    @php $no++; @endphp
    @endforeach
  </tbody>
  <tfoot>
   <tr>
     <td colspan="5">Total</td>
     <td>{{ $total }} <span>MMK</span></td>
  </tr>
  </tfoot>
</table>
</div>

<div class="container-fluid text-white bg-dark">
<h2 class="pl-5">Customer's Information</h2>
<form class="p-5" action="" method="post" enctype="multipart/form-data">
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
    <input type="text" class="form-control" name="name" id="name" value="{{ $customer->name }}" disabled>
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" id="phone" value="{{ $customer->phone }}" disabled>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" name="address" id="address" disabled>{{ $customer->address }}</textarea>
  </div>
</form>
</div>

@endsection