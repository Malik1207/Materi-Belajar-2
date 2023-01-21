@extends('layouts.master')

@section('title', 'Dosen')
@section('menuDosen', 'active')

@section('content')
    <div class="container text-center mp-3 p-4 bg-white">
        <h1>Nama dosen {{$name}}</h1>

        <img src="{{asset('giphy_5.gif')}}" alt="">
        <img src="{{url('https://media.giphy.com/media/pVGsAWjzvXcZW4ZBTE/giphy.gif')}}" alt="">
    </div>
@endsection
