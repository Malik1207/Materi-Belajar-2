@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" value="{{ $user->name }}" disabled>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="text" class="form-control" value="{{ $user->email }}" disabled>
    </div>
    <a href="{{ route('users.home') }}" class="btn btn-primary">Back</a>
  </div>
  @endsection