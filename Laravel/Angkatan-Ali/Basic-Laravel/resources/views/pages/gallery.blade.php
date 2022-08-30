{{-- @include('layouts.app', ['title'=> 'Gallery'])
@include('includes.header', ['isActive' => 'active']) --}}

@extends('layouts.app')
@section('title', 'Gallery')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="nav col-10 d-flex justify-content-center">
            <div class="card-body text-center">
                Ini Gallery
                <ol>
                    @forelse ($galleries as $gallery)
                        <li>{{$gallery->name}}</li>
                    @empty
                        <li>Tidak ada data</li>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
@endsection
