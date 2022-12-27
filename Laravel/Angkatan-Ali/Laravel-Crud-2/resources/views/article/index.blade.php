<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="py-4">Tabel Data Article</h2>
                    <div>
                        <a href="{{route('articles.create')}}" class="btn btn-info text-white">Tambah Data</a>
                    </div>
                </div>

                @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan')}}
                    </div>
                @endif
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                        <tr>
                            <td class="w-25">
                                <img src="{{asset('storage/'.$article->image)}}" class="img-fluid" alt="">
                            </td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->desc}}</td>
                            <td>{{$article->category}}</td>
                            <td>
                                <a href="{{route('articles.show', $article->id)}}" class="btn btn-success">Show</a>
                                <a href="{{route('articles.edit', $article->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('articles.destroy', $article->id)}}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                         <tr>
                            <td>Belum ada data article</td>
                         </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>