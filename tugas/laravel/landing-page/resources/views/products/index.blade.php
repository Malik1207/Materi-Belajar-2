@extends('..dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="pull-left" style="color: black;">
                <h2>PRODUCT / LIST PRODUCT</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('products.create') }}">Create New</a>
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

    <table class="table my-5" width="500px">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th width="200px">Name</th>
            <th width="200px">Category</th>
            <th>Type</th>
            <th>Price</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $product->image }}" width="120px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->type }}</td>
            <td>{{ $product->price }}</td>
            <td style="word-break: break-all; text-align:justify; width: 600px;">
                {!! $product->detail !!}
            </td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="d-flex flex-column" style="width: 5rem;">

                    <a class="btn btn-success"  href="{{ route('products.show',$product->id) }}">Show</a>

                    <a class="btn btn-primary my-1"  href="{{ route('products.edit',$product->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
