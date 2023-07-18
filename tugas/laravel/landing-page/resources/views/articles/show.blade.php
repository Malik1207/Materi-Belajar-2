@extends('..dashboard')

@section('content')

    <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black;">
                <strong style="width:100px;">Title</strong>
                : {{ $article->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Content</strong>
                : <div style="word-break:break-all; text-align:justify; width: 600px;">{!! $article->content !!}</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="color: black">
            <div class="form-group d-flex">
                <strong style="width:100px;">Article Image</strong>
                <div><img src="/image/{{ $article->image }}" width="200px"></div>
            </div>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary mx-3" href="{{ route('articles.index') }}">Back</a>
        </div>
    </div>
@endsection
