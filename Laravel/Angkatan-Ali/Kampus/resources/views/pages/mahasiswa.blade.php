@extends('layouts.master')

@section('title', 'Mahasiswa')
@section('menuMahasiswa', 'active')

@section('content')
    <div class="container text-center mp-3 p-4 bg-white">
        <h1>Informasi Fakultas {{$data}}</h1>
    </div>
@endsection
