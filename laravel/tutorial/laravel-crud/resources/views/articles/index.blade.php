@extends('app', ['title'=> 'index'])

@section('content')
    <div class="mt-5">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h1>Table Article</h1>
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Create Article</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($article as $index => $article)
                    <tr>
                        <td>{{ $index + 1 }}.</td>
                        <td>
                            <img src="{{ asset('storage/'.$article->image) }}" class="img-fluid" alt="" width="250px">
                        </td>
                        <td>{{ $article->title }}</td>
                        <td class="w-25">
                            {!! $article->description !!}
                        </td>
                        <td>
                            <span class="badge bg-danger">{{ $article->category }}</span>
                        </td>
                        <td>
                            <a href="{{ route('articles.show',$article->id) }}" class="text-success">
                                <i class="fa-solid fa-eye fa-xl"></i>
                            </a>
                            <a href="{{ route('articles.edit',$article->id) }}" class="text-warning mx-3">
                                <i class="fa-solid fa-pen fa-xl"></i>
                            </a>
                            <form action="{{ route('articles.destroy',$article->id) }}" id="GFG" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="javascript:$('GFG')" class="text-danger" onclick="myFunction()">
                                    <i class="fa-sharp fa-solid fa-xmark fa-xl"></i>
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('javascript')
    <script>
        function myFunction(){
            document.getElementById('GFG').submit();
        }
    </script>
@endpush
