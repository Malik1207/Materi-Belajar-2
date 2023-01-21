<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('bootstrap')
    <title>Tabel Mahasiswa</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4 d-flex justify-content-between align-items-center">
                    <h2>Tabel Mahasiswa</h2>
                    <a href="{{route('mahasiswa.create')}}" class="btn btn-primary">Tambah Mahasiswa</a>
                </div>

                @if (session()->has('create'))
                    <div class="alert alert-success">
                        {{session()->get('create')}}
                    </div>
                @endif

                @if (session()->has('edit'))
                    <div class="alert alert-primary">
                        {{session()->get('edit')}}
                    </div>
                @endif

                @if (session()->has('hapus'))
                    <div class="alert alert-danger">
                        {{session()->get('edit')}}
                    </div>
                @endif

                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $data)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>{{$data->nim}}</td>
                                <td>{{$data->nama}}</td>
                                <td>
                                    {{$data->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan'}}
                                </td>
                                <td>{{$data->jurusan}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>
                                    <form action="{{ route('mahasiswa.destroy', $data->id) }}" method="POST">
                                    <a href="{{route('mahasiswa.show', $data->id)}}" class="btn btn-success btn-sm">Detail</a>
                                    <a href="{{route('mahasiswa.edit', $data->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="6" class="text-center">Tidak Ada Data</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
