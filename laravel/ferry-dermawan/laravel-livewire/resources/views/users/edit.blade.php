@extends('layouts.master')

@push('styles')
  @livewireStyles
@endpush

@push('scripts')
  @livewireScripts
@endpush

@section('content')
  <div class="container">
    <div>
      <h1>Edit Data</h1>
      <div class="row mb-3">
        <div class="col-md-6">
          @livewire('user-edit',['user' => $user])
        </div>
      </div>
    </div>
  </div>
  @endsection