@extends('layouts.app')

@section('content')

<div class="container bg-dark p-5">
    <h2><i class="fas fa-stream"></i> User Lists</h2>
    @if(Session::has('status'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
      {{ Session::get('status') }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
     </div>
     @endif
    <table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @php $no=1; @endphp
      @foreach($users as $user)
    <tr>
      <th scope="row">{{ $no }}</th>
      <td>{{ $user->name }}</td>
      <td>
          <a href="{{ route('users.show',$user->id) }}" class="btn btn-success"><i class="fas fa-eye"></i> </a>
          <a href="{{ route('users.delete',$user->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> </a>
        </td>
    </tr>
    @php $no++; @endphp
    @endforeach
  </tbody>
</table>
</div>

@endsection