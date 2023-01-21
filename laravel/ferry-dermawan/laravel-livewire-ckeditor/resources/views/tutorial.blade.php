@extends('layouts.app')

@push('styles')
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    @livewireStyles
@endpush

@section('content')
<div class="container">
   <h1>Livewire CKEDITOR</h1>
   <hr>
   <div class="row">
    <div class="col-md-8">
      @livewire('my-editor')
    </div>
   </div>
</div>
@endsection

@push('scripts')
    @livewireScripts
@endpush