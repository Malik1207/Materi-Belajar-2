@extends('..dashboard')

@section('content')

    <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black;">
                <strong style="width:100px;">Name</strong>
                : {{ $costumer->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="color: black">
            <div class="form-group d-flex">
                <strong style="width:100px;">Image</strong>
                <div><img src="/image/{{ $costumer->image }}" width="200px"></div>
            </div>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary mx-3" href="{{ route('costumers.index') }}">Back</a>
        </div>
    </div>
@endsection
