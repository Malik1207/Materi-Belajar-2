{{-- @extends('layouts.app', ['title' => 'Profile'])

@section('content')

    <h1>Profile</h1>
    Lorem <strong>ipsum</strong> dolor sit amet consectetur adipisicing elit. Voluptatem, quisquam.

@endsection --}}

<x-app-layout :title="$name ?? 'Profile'">

    <h1>{{ $name ?? 'Profile' }}</h1>
    
</x-app-layout>