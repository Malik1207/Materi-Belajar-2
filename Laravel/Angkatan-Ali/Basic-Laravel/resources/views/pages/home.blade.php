{{-- @include('layouts.app', ['title'=> 'Home'])
@include('includes.header', ['isActive' => 'active']) --}}

@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="nav col-10 d-flex justify-content-center">
            <div class="card-body text-center">
                Ini Home
            </div>
        </div>
    </div>
@endsection