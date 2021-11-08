@extends('layouts.app')

@section('content')

<div class="container p-5 bg-dark">

    <h2 class="pl-5"><i class="fas fa-plus"></i> Add New Product</h2>
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

      @if(Session::has('status'))
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
      {{ Session::get('status') }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
     </div>
      @endif

    <form class="p-5" action=" {{ route('products.store') }} " method="post" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" name="price" id="price" placeholder="Enter price">
  </div>
  <div class="form-group">
   <label for="price">Upload Image</label>
    <div class="custom-file">
     <input type="file" class="custom-file-input" id="customFile" name="image">
     <label class="custom-file-label" for="customFile">Upload New Image</label>
     </div>
  </div>
  <button type="submit" class="btn btn-outline-primary"><i class="fas fa-check-circle"></i> Save</button>
</form>
</div>

@endsection