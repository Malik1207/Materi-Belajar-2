@extends('layouts.master')

@push('styles')
  @livewireStyles
@endpush

@push('scripts')
  @livewireScripts
@endpush

@section('content')
  <div class="container">
    <h1>Belajar CRUD dengan Livewire</h1>
    <div>
      <div class="row mb-3">
        <div class="col-md-6">
          @livewire('user-create')
        </div>
      </div>
    </div>
    <div>
      @livewire('user-table')
    </div>
  </div>
  @endsection