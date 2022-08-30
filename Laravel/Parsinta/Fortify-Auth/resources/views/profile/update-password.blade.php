@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                @if(session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                <div class="card-header">Update your password</div>
                <div class="card-body">
                    <form action="{{ route('password.edit') }}" method="POST" novalidate>
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" name="current_password" id="current_password" class="form-control @error('current_password')is-invalid @enderror" required>
                            @error('current_password')
                              <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password')is-invalid @enderror" required>
                            @error('password')
                              <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection