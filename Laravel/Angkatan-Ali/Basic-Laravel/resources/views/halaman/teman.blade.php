@extends('koneksi.koneksi')
@section('title', 'Teman')
@section('copyright', 'Teman')

@section('content')
    <div class="container mt-5">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Tempat Tinggal</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($teman as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item}}</td>
                    @foreach ($home as $rumah)
                        <td>{{$rumah}}</td>
                    @endforeach
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
