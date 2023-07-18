@extends('..dashboard')

@section('content')

    <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black;">
                <strong style="width:100px;">Name</strong>
                : {{ $testimonial->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="d-flex" style="color: black;">
                <strong style="width:100px;">Review</strong>
                : <div style="word-break: break-all; text-align:justify; width: 700px;">{!!  $testimonial->review  !!}</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Business</strong>
                : {{ $testimonial->business }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="color: black">
            <div class="form-group d-flex">
                <strong style="width:100px;">Image User</strong>
                <div><img src="/image/{{ $testimonial->image }}" width="80px" height="80px" style="border-radius: 80px"></div>
            </div>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary mx-3" href="{{ route('testimonials.index') }}">Back</a>
        </div>
    </div>
@endsection
