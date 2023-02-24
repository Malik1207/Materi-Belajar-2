@extends('app',['title' => 'Edit article'])

@section('content')
    <div class="row mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Edit Article</h4>
                    <a href="{{ route('articles.index') }}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('articles.update',$article->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="label" class="form-label">Judul</label>
                            <input type="text" name="title" placeholder="Name" class="form-control @error('title') is-invalid @enderror" value="{{ $article->title }}">
                            @error('title')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <div class="my-3">
                                <img src="{{ asset('storage/'.$article->image) }}" alt="gambar" class="img-fluid w-25">
                            </div>
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" id="category" class="form-select @error('category') is-invalid @enderror" aria-label="Default select example">
                                <option selected>{{ $article->category }}</option>
                                <option value="oxford">Oxford</option>
                                <option value="stanford">Stanford</option>
                                <option value="cambridge">Cambridge</option>
                                <option value="harvard">Harvard</option>
                            </select>
                            @error('category')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ $article->description }}</textarea>
                            @error('description')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
