<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="fw-bold mb-3">Product List</h2>
                    <table class="table table-bordered table-hovered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th width="20%">Image</th>
                                <th>Description</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $index => $product)    
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td><img src="{{ asset('storage/images/'.$product->image) }}" class="img-fluid"></td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->qty }}</td>
                                    <td>{{ $product->price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="fw-bold mb-3">Create Product</h2>
                    <form wire:submit.prevent='store'>
                        <div class="form-group mt-2">
                            <label for="name">Product Name</label>
                            <input type="text" id="name" class="form-control" wire:model='name'>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label>Product Image</label>
                            <div class="input-group">
                                <input type="file" class="form-control" wire:model='image'>
                            </div>
                            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                            @if ($image)
                                <label for="" class="mt-2">Image Preview :</label>
                                <img src="{{ $image->temporaryUrl() }}" class="container-fluid" alt="">
                            @endif
                        </div>
                        <div class="form-group mt-2">
                            <label for="description">Description</label>
                            <input type="text" id="description" class="form-control" wire:model='description'>
                            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="qty">Qty</label>
                            <input type="number" id="qty" class="form-control" wire:model='qty'>
                            @error('qty') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label for="price">Price</label>
                            <input type="number" id="price" class="form-control" wire:model='price'>
                            @error('price') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary w-100">Submit Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
