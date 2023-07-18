@extends('..dashboard')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stories.update',$story->id) }}" method="POST" enctype="multipart/form-data" class="my-3">
        @csrf
        @method('PUT')

        <div class="my-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Story:</strong>
                    <textarea name="story" class="my-editor form-control" id="my-editor" cols="30" rows="10">{{ $story->story }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Image Story:</strong>
                    <input type="file" name="image" class="form-control my-4" placeholder="Image Story" >
                    <img src="/image/{{ $story->image }}" width="120px">
                </div>
            </div>
            <div class="pull-left mx-3 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="{{ route('stories.index') }}">Back</a>
            </div>
        </div>

    </form>
@endsection

@push('scripts')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
    </script>
@endpush
