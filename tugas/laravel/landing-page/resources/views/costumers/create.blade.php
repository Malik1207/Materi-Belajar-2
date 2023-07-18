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

<form action="{{ route('costumers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Name:</strong>
                <input type="text" name="name" class="form-control my-1" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Image:</strong>
                <input type="file" name="image" class="form-control my-1" placeholder="image">
            </div>
        </div>
        <div class="mx-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-success" href="{{ route('costumers.index') }}"> Back</a>
        </div>
        {{--  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>  --}}
    </div>

</form>
@endsection
