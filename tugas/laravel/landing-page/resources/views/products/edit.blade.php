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

    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data" class="my-3">
        @csrf
        @method('PUT')

        <div class="my-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control my-1" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Category:</strong>
                    {{--  <input type="text" name="category" value="{{ $product->category }}" class="form-control my-1" placeholder="Category">  --}}
                    <select id="category" name="category" value="{{ old('category') }}" style="color: black;width: 400px;" class="form-select my-1">
                        <option value="Mesin Makanan" name="category" {{ (old('category' ) ?? $product->category) == 'Mesin Makanan' ? 'selected' : '' }}>Mesin Makanan</option>
                        <option value="Mesin Minuman" name="category" {{ (old('category' ) ?? $product->category) == 'Mesin Minuman' ? 'selected' : ''}}>Mesin Minuman</option>
                        <option value="Mesin Industri" name="category" {{ (old('category' ) ?? $product->category) == 'Mesin Industri' ? 'selected' : '' }}>Mesin Industri</option>
                        <option value="Mesin Limbah" name="category" {{ (old('category' ) ?? $product->category) == 'Mesin Limbah' ? 'selected' : ''}}>Mesin Limbah</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Type:</strong>
                    {{--  <input type="text" name="type" class="form-control my-1" placeholder="Type">  --}}
                    <select id="type" name="type" value="{{ old('type') }}" style="color: black;width: 400px;" class="form-select my-1">
                        <option value="A0001" name="type" {{ (old('type' ) ?? $product->type) == 'A0001' ? 'selected' : '' }}>A0001</option>
                        <option value="A0002" name="type" {{ (old('type' ) ?? $product->type) == 'A0002' ? 'selected' : ''}}>A0002</option>
                        <option value="A0003" name="type" {{ (old('type' ) ?? $product->type) == 'A0003' ? 'selected' : '' }}>A0003</option>
                        <option value="A0004" name="type" {{ (old('type' ) ?? $product->type) == 'A0004' ? 'selected' : ''}}>A0004</option>
                        <option value="A0005" name="type" {{ (old('type' ) ?? $product->type) == 'A0005' ? 'selected' : '' }}>A0005</option>
                        <option value="A0006" name="type" {{ (old('type' ) ?? $product->type) == 'A0006' ? 'selected' : ''}}>A0006</option>
                        <option value="A0007" name="type" {{ (old('type' ) ?? $product->type) == 'A0007' ? 'selected' : '' }}>A0007</option>
                        <option value="A0008" name="type" {{ (old('type' ) ?? $product->type) == 'A0008' ? 'selected' : ''}}>A0008</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Price:</strong>
                    <input type="number" name="price" value="{{ $product->price }}" class="form-control my-1" placeholder="Price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Detail:</strong>
                <textarea name="detail" class="my-editor form-control" id="my-editor" cols="30" rows="10">{{ $product->detail }}</textarea>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Image:</strong>
                    <input type="file" name="image" class="form-control my-4" placeholder="image" >
                    <img src="/image/{{ $product->image }}" width="120px">
                </div>
            </div>
            <div class="pull-left mx-3 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="{{ route('products.index') }}">Back</a>
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
