@section('isActive','active')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('bootstrap')
    <title>Document</title>
</head>
<body>
    @include('navbar')
    <div class="py-4 container col-10">
        <h2>Edit Mahasiswa</h2>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <div class="car col-10">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                   <ul>
                       @foreach ($errors->all() as $error)
                         <li>{{$error}}</li>
                       @endforeach
                   </ul>
                </div>
            @endif
            <form method="POST" action="{{route('mahasiswa.update', $mahasiswa->id)}}" class="card-body">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label>NIM</label>
                    <input value="{{ empty(old('nim')) ? $mahasiswa->nim : old('nim') }}" type="number" class="form-control" name="nim">
                </div>
                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input value="{{ empty(old('nama')) ? $mahasiswa->nama : old('nama') }}" type="text" class="form-control" name="nama">
                </div>
                <div class="form-group mb-3">
                    <label>Laki-Laki</label>
                    <input type="radio" {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin) == 'L'? 'checked' : '' }} class="form-check-input" name="jenis_kelamin" value="L">
                    <label>Perempuan</label>
                    <input type="radio" {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin) == 'P'? 'checked' : '' }} class="form-check-input" name="jenis_kelamin" value="P">
                </div>
                <!-- <div class="form-group mb-3">
                    <label>Jurusan</label>
                    <input value="{{ empty(old('jurusan' )) ? $mahasiswa->jurusan : old('jurusan') }}" type="text" class="form-control" name="jurusan">
                </div> -->
                <select id="jurusan" name="jurusan" value="{{ old('jurusan') }}" >
                    <option value="Programming" name="jurusan" {{ (old('jurusan' ) ?? $mahasiswa->jurusan) == 'Programming' ? 'selected' : '' }}>Programming</option>
                    <option value="Graphic Design" name="jurusan" {{ (old('jurusan' ) ?? $mahasiswa->jurusan) == 'Graphic Design' ? 'selected' : ''}}>Graphic Design</option>
                    <option value="Photography" name="jurusan" {{ (old('jurusan' ) ?? $mahasiswa->jurusan) == 'Photography' ? 'selected' : '' }}>Photography</option>
                    <option value="Videography" name="jurusan" {{ (old('jurusan' ) ?? $mahasiswa->jurusan) == 'Videography' ? 'selected' : ''}}>Videography</option>
                </select>
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control">{{ old('alamat') ?? $mahasiswa->alamat }}</textarea>
                </div>

                <button class="btn btn-primary btn-sm mt-3">Edit</button>
            </form>
        </div>
    </div>
</body>
</html>
