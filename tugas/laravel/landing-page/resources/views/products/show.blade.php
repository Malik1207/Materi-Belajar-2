@extends('..dashboard')

@section('content')

    <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black;">
                <strong style="width:100px;">Name</strong>
                : {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 d-flex">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Category</strong>
                : {{ $product->category }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 d-flex">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Category</strong>
                : {{ $product->type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Price</strong>
                : {{ $product->price }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex" style="color: black">
                <strong style="width:100px;">Details</strong>
                : <div style="word-break: break-all; width: 650px; text-align:justify;">{!! $product->detail !!}</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="color: black">
            <div class="form-group d-flex">
                <strong style="width:100px;">Image</strong>
                <div><img src="/image/{{ $product->image }}" width="200px"></div>
            </div>
        </div>
        <div class="pull-left">
            <a class="btn btn-primary mx-3" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
@endsection
