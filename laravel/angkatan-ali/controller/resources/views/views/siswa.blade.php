@extends('includes.app')
@section('judul', 'Halaman Siswa')

@section('content')
    <table class="table table-striped container mt-5 table-dark">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Makanan</th>
              <th scope="col">Minuman</th>
            </tr>
        </thead>
        @php
            $i = 1;
            $makan = ['Nasi', 'Ikan', 'Gandum', 'Indomie'];
            $minum = ['Air', 'Teh', 'Kopi', 'Jus'];
            $va = 0;
            $ar = 0;
        @endphp
        <tbody>
            @forelse ($siswa as $murid)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{ $murid }}</td>
              <td>{{ $makan[$va++] }}</td>
              <td>{{ $minum[$ar++] }}</td>
            </tr>
            @empty
            <p>Tidak ada data</p>
            @endforelse
        </tbody>
    </table>
@endsection
