@extends('layouts.app')

@push('styles')
  @livewireStyles
@endpush

@section('content')
  <div class="container">
    <h1>Products</h1>
    <hr>
    @livewire('product-table')
  </div>
@endsection

@push('scripts')
  @livewireScripts
@endpush