@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <span>Profile</span>
            <a href="{{ route('users.edit') }}" class="badge bg-warning text-decoration-none text-dark">
              Edit
            </a>
          </div>
          <div class="card-body">
            <div class="mb-2">
              <label for="name">Name</label>
              <input type="text" id="name" class="form-control" value="{{ Auth::user()->name }}" disabled>
            </div>
            <div class="mb-2">
              <label for="email">Email</label>
              <input type="text" id="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
            </div>
            <div class="mb-2">
              <label for="province">Province</label>
              @if (Auth::user()->myProvince)
                <input type="text" id="province" class="form-control" value="{{ Auth::user()->myProvince->name }}" disabled>
                @else
                <input type="text" id="province" class="form-control" disabled>
              @endif
            </div>
            <div class="mb-2">
              <label for="city">City</label>
              @if (Auth::user()->myCity)
                <input type="text" id="city" class="form-control" value="{{ Auth::user()->myCity->name }}" disabled>
                @else
                <input type="text" id="city" class="form-control" disabled>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection