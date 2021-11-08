@extends('layouts.app')

@section('content')

<div class="container p-5 bg-dark">

    <h2 class="pl-5 text-center"><i class="fas fa-user-plus"></i> User Profile</h2>
    <div class="text-center">
      <img src='{{ asset("assets/user-profile/$user->profile") }}' class="img-circle mt-3" width=150 height=150>
    </div>
    
    <form class="p-5" action="" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
    <label for="name">Username</label>
    <input type="text" class="form-control" name="username" id="name" value="{{ $user->name }}">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
  </div>

</form>
</div>

@endsection