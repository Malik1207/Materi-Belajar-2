@section('isActive', 'active')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('style')
    <title>Mahasiswa Create</title>
</head>
<body>
    @include('navbar')

    <div class="py-4 bg  container">
        <h2>Table Mahasiswa</h2>
    </div>

    <div class="justify-content-center container bg">
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ol>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
        @endif
        <form class="card-body" action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group mb-3">
                <label for="nim">NIM</label>
                <input value="{{old('nim')}}" type="number" name="nim" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="nama">nama</label>
                <input value="{{old('nama')}}" type="text" name="nama" class="form-control">
            </div>
            {{-- <div class="form-group mb-3 mt-3">
                <label class="mb-1" for="">Jenis Kelamin</label>
                <br>
                <input type="radio" {{old('jenis_kelamin') == 'laki-laki' ? 'checked' : ''}} value="laki-laki" name="jenis_kelamin" class="form-chack-input">
                <label for="jenis_kelamin">Laki Laki</label>
                <input type="radio" {{old('jenis_kelamin') == 'prempuan' ? 'checked' : ''}} value="prempuan" name="jenis_kelamin" class="form-chack-input">
                <label for="jenis_kelamin">Prempuan</label>
            </div> --}}
            <div class="form-group mb-3 mt-3">
                <label for="" class="mb-1">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin">
                    <option {{old('jenis_kelamin') == 'laki-laki' ? 'selected' : ''}} value="laki-laki" name="jenis_kelamin">Laki-laki</option>
                    <option {{old('jenis_kelamin') == 'prempuan' ? 'selected' : ''}} value="prempuan" name="jenis_kelamin">Prempuan</option>
                </select>
            </div>

            {{-- <div class="form-group mb-3">
                <label for="jurusan">Jurusan</label>
                <input type="text" value="{{old('jurusan')}}" name="jurusan" class="form-control">
            </div> --}}
            <div class="form-group mb-3 mt-3">
                <label class="mb-1">Jurusan</label>
                <select id="jurusan" name="jurusan">
                    <option name="jurusan" {{old('jurusan') == 'Akutansi' ? 'selected' : ''}} value="Akutansi">Akutansi</option>
                    <option name="jurusan" {{old('jurusan') == 'Kedokteran' ? 'selected' : ''}} value="Kedokteran" class="form-control">Kedokteran</option>
                    <option name="jurusan" {{old('jurusan') == 'Hotel' ? 'selected' : ''}} value="Hotel" class="form-control">Hotel</option>
                    <option name="jurusan" {{old('jurusan') == 'Bengkel' ? 'selected' : ''}} value="Bengkel">Bengkel</option>
                    <option name="jurusan" {{old('jurusan') == 'Agama' ? 'selected' : ''}} value="Agama">Agama</option>
                    <option name="jurusan" {{old('jurusan') == 'Design' ? 'selected' : ''}} value="Design">Design</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="alamat">alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{old('alamat')}}</textarea></textarea>
            </div>
            <button class="btn btn-primary btn-sm mt-2">buat</button>
        </form>
    </div>
</body>
</html>
