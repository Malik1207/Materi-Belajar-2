<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Sistem Informasi Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/daftar-mahasiswa') }}" class="nav-link">
                            Daftar Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/tabel-mahasiswa') }}" class="nav-link">
                            Tabel Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/blog-mahasiswa') }}" class="nav-link">
                            Blog Mahasiswa
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-md-0">
                    <li class="nav-item">
                        <span class="text-light">Hello, {{ session('username') }}</span>
                        <a href="{{ url('/logout') }}" class="nav-link d-inline">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="text-center my-4">{{ $judul }}</h2>
        <hr>
    </div>


</body>
</html>
