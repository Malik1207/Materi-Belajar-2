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
    <div class="container mt-2">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="py-4">Detail Article</h2>
            <div>
                <a href="{{route('articles.index')}}" class="btn btn-info text-white">Kembali</a>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card w-50">
                <img src="{{asset('storage/'.$article->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">
                    {{$article->desc}}
                  </p>
                  <div class="d-flex justify-content-between">
                    <div class="">
                        <span class="badge bg-primary">{{$article->category}}</span>
                    </div>
                    <p>{{$article->created_at->format('d-m-Y')}}</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>