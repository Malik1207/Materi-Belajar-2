<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>File upload Rename</title>
</head>
<body>
    <div class="container mt-3">
        <h2>File Upload</h2>
        <hr>

        <form action="{{ url('/file-upload-rename') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nama_gambar" class="form-label">Nama Gambar</label>
                <input type="text" class="form-control" name="nama_gambar" value="{{ old('nama_gambar') }}">
                @error('nama_gambar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <lable class="form-label" for="nama_profile">Gambar Profile</lable>
                <input type="file" id="nama_profile" class="form-control" name="nama_profile">
                @error('nama_profile')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                 @enderror
            </div>

            <button type="submit" class="btn btn-primary my-2">Upload</button>
        </form>
    </div>
</body>
</html>
