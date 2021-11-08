@extends('layouts.app')

@section('content')

<div class="container p-5 bg-dark">

    <h2 class="pl-5 text-center"><i class="fas fa-user-plus"></i> Edit User</h2>
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
      
      <div class="text-center">
      <img src='{{ asset("assets/user-profile/$user->profile") }}' class="img-circle" width=150 height=150>
      </div>

    <form class="p-5" action="{{ route('users.update',$user->id) }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="form-group">
    <label for="name">Username</label>
    <input type="text" class="form-control" name="username" id="name" value="{{ $user->name }}">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="********">
  </div>
  <div class="form-group">
   <label for="price">Upload Profile</label>
    <div class="custom-file">
     <input type="file" class="custom-file-input" id="customFile" name="image">
     <label class="custom-file-label" for="customFile">Upload Profile</label>
     </div>
  </div>
  <button type="submit" class="btn btn-outline-primary"><i class="fas fa-check-circle"></i> Update</button>
</form>
</div>

@endsection