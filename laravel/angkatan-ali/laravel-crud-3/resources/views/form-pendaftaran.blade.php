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
        <h2>Pengisian Data Mahasiswa</h2>
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
            <form method="POST" action="{{route('mahasiswa.store')}}" class="card-body">
                @csrf
                @method('POST')
                <div class="form-group mb-3">
                    <label>NIM</label>
                    <input value="{{old('nim')}}" type="number" class="form-control" name="nim">
                </div>
                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input value="{{old('nama')}}" type="text" class="form-control" name="nama">
                </div>
                <div class="form-group mb-3">
                    <label>Laki-Laki</label>
                    <input type="radio" {{old('jenis_kelamin') == 'L'? 'checked' : ''}} class="form-check-input" name="jenis_kelamin" value="L">
                    <label>Perempuan</label>
                    <input type="radio" {{old('jenis_kelamin') == 'P'? 'checked' : ''}} class="form-check-input" name="jenis_kelamin" value="P">
                </div>
                <!-- <div class="form-group mb-3">
                    <label>Jurusan</label>
                    <input value="{{old('jurusan')}}" type="text" class="form-control" name="jurusan">
                </div> -->
                <select class="form-select" aria-label="Default select example" name="jurusan" value="{{ old('jurusan')}}" >
                    <option>Mesin Makanan</option>
                    <option>Mesin Minuman</option>
                    <option>Mesin Industri</option>
                    <option>Mesin Limbah</option>
                </select>
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control">{{old('alamat')}}</textarea>
                </div>

                <button class="btn btn-primary btn-sm mt-3">Create</button>
            </form>
        </div>
    </div>
</body>
</html>
