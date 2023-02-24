@extends('app',['title' => 'Detail'])

@section('content')
    <div class="row">
        <div class="col-7">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mt-5">Halaman Article</h2>
                <a href="{{ route('articles.index') }}" class="btn btn-primary">Back</a>
            </div>
            <div>
                <img src="{{ asset('storage/'.$article->image) }}" alt="image" class="img-fluid mt-5">
                <h3 class="mt-3">{{ $article->title }}</h3>
                <p class="mt-3">
                    {!! $article->description !!}
                </p>
            </div>
            <div class="d-flex justify-content-between align-items-center my-5">
                <a href="#" class="badge bg-danger text-decoration-none">{{ $article->category }}</a>
                <span>{{ $article->created_at->format('d M Y') }}</span>
            </div>
        </div>
    </div>

@endsection
