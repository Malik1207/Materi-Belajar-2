@extends('dashboard')
@section('content')


<div style="padding-left: 300px" class="my-3 d-flex flex-column pull-left">
    <h1 style="padding-left: 6px;">Dashboard</h1>
    <div>
        <div class="my-3 d-flex m-auto align-items-center flex-wrap">
            <div class="card text-white bg-primary mx-2" style="width: 30%;">
                <div class="card-body justify-content-between d-flex align-items-center ">
                    <h5 class="text-white card-title">Total Product</h5>
                    <h1 class="text-white card-text">{{ $product }}</h1>
                </div>
            </div>
            <div class="card text-white bg-secondary mx-2" style="width: 30%;">
                <div class="card-body justify-content-between d-flex align-items-center">
                    <h5 class="text-white card-title">Total Article</h5>
                    <h1 class="text-white card-text">{{ $article }}</h1>
                </div>
            </div>
            <div class="card text-white bg-success mx-2" style="width: 30%;">
                <div class="card-body justify-content-between d-flex align-items-center">
                    <h5 class="text-white card-title">Total Costumer</h5>
                    <h1 class="text-white card-text">{{ $costumer }}</h1>
                </div>
            </div>
            <div class="card text-white bg-danger mx-2" style="width: 30%;">
                <div class="card-body justify-content-between d-flex align-items-center">
                    <h5 class="text-white card-title">Total Testimonial</h5>
                    <h1 class="text-white card-text">{{ $testimonial }}</h1>
                </div>
            </div>
            <div class="card text-white bg-warning mx-2" style="width: 30%;">
                <div class="card-body justify-content-between d-flex align-items-center">
                    <h5 class="text-white card-title">Total Story</h5>
                    <h1 class="text-white card-text">{{ $story }}</h1>
                </div>
            </div>
            <div class="card text-white bg-info mx-2" style="width: 30%;">
                <div class="card-body justify-content-between d-flex align-items-center">
                    <h5 class="text-white card-title">Total Officer</h5>
                    <h1 class="text-white card-text">{{ $officer }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
