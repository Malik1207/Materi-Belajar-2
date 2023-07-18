@extends('..dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="pull-left" style="color: black;">
                <h2>ARTICLE / LIST ARTICLE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('articles.create') }}">Create New</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible ">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($message = Session::get('danger'))
        <div class="alert alert-danger alert-dismissible ">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($message = Session::get('primary'))
        <div class="alert alert-primary alert-dismissible ">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table my-5">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Content</th>
            <th width="100rem">Image</th>
            <th>Action</th>
        </tr>
        @foreach ($articles as $article)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $article->title }}</td>
            <td style="word-break:break-all; text-align:justify;">{!! $article->content !!}</td>
            <td><img src="/image/{{ $article->image }}" width="120px"></td>
            <td>
                <form action="{{ route('articles.destroy',$article->id) }}" method="POST" class="d-flex flex-column" style="width: 5rem;">

                    <a class="btn btn-success"  href="{{ route('articles.show',$article->id) }}">Show</a>

                    <a class="btn btn-primary my-1"  href="{{ route('articles.edit',$article->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $articles->links() !!}

@endsection
