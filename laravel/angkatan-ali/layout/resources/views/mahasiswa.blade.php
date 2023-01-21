@extends('layout.app')

@section('title', 'mahasiswa')

@section('content')
<div class="container">
    <div class="py-2">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection