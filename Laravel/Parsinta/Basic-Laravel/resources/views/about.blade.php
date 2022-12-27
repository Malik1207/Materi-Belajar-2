{{-- @extends('layouts.app', ['title' => 'About'])

@section('content')

    <h1>About</h1>
    Lorem <strong>ipsum</strong> dolor sit amet consectetur adipisicing elit. Voluptatem, quisquam.

@endsection --}}

<x-app-layout>

    About Page

    @slot('styles')

        <style>
            
            body {

                background: indigo; 
                
            }
            
        </style>
    
    @endslot
    
</x-app-layout>