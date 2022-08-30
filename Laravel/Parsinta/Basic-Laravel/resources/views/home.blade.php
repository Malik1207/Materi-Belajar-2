{{-- @extends('layouts.app', ['title' => 'Home']) --}}

{{-- @section('content') --}}

    {{-- @include('components.alert') --}}

    {{-- <x-alert>

        <x-slot name="title">
            Header component with <strong>Strong</strong> tag
        </x-slot>
        
        {{-- @slot('title')

            Header component with <strong>Strong</strong> tag
        
        @endslot --}}
        
        {{-- Ini adalah children

        @slot('footer')

        Ini adalah footer
    
        @endslot --}}
    
    {{-- </x-alert> --}}
    
    {{-- @component('components.alert')

        @slot('title')

            Header component with <strong>Strong</strong> tag
        
        @endslot
        
        Ini adalah children

        @slot('footer')

        Ini adalah footer
    
        @endslot
    
    @endcomponent --}}

    {{-- <h1>Home</h1>
    Lorem <strong>ipsum</strong> dolor sit amet consectetur adipisicing elit. Voluptatem, quisquam.

@endsection --}}

<x-app-layout>

    Home Page
    
</x-app-layout>