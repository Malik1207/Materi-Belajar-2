@extends('..dashboard')

@section('content')

    <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black;">
                <strong style="width:100px;">Name</strong>
                : {{ $officer->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Position</strong>
                : {{ $officer->position }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Biography</strong>
                : <div style="word-break: break-all; text-align:justify; width: 600px;">{!! $officer->biography !!}</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="color: black">
            <div class="form-group d-flex">
                <strong style="width:100px;">Image Officer</strong>
                <div><img src="/image/{{ $officer->image }}" width="80px" height="80px" style="border-radius: 80px"></div>
            </div>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary mx-3" href="{{ route('officers.index') }}">Back</a>
        </div>
    </div>
@endsection
