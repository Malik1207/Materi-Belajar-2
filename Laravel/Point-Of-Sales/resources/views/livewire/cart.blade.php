<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="row mb-2">
                    <div class="col-md-3">
                        <h2>Products List</h2>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Search Products..." wire:model="search">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @forelse ($products as $product)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('storage/images/'.$product->image) }}" style="object-fit: contain; width:100%; height: 125px;">
                                    <button class="btn btn-primary btn-sm" wire:click="addItem({{ $product->id }})" style="position: absolute; top:0; right:0; padding: 10px 15px;">
                                        <i class="fas fa-cart-plus fa-lg"></i>
                                    </button>
                                </div>
                                <div class="card-footer bg-white">
                                    <h6 class="text-center fw-bold">{{ $product->name }}</h6>
                                    <h6 class="text-center fw-bold">Rp {{ number_format($product->price,2,',','.') }}</h6>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-primary mt-5">
                            <h3>No Products Founds</h3>
                        </div>
                    @endforelse
                </div>
                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h2 class="fw-bold">Cart</h2>
            </div>
            <div class="card-body">
                @if (session()->has('error'))
                    <p class="text-danger">
                        {{ session('error') }}
                    </p>
                @endif
                <table class="table table-sm table-bordered table-hovered">
                    <thead class="bg-white text-dark">
                        <tr class="fw-bold">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($carts as $index => $cart)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    {{ $cart['name'] }}
                                    <p style="font-size: 12px;">
                                        Rp {{ number_format($cart['pricesingle'],2,',','.') }}
                                    </p>
                                </td>
                                <td>
                                    {{ $cart['qty'] }}
                                    <div>
                                        <button class="btn btn-primary" style="padding: 1px 3px; font-size: 10px;" wire:click="increaseItem('{{ $cart['rowId'] }}')">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <button class="btn btn-warning" style="padding: 1px 3px; font-size: 10px;" wire:click="decreaseItem('{{ $cart['rowId'] }}')">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <button class="btn btn-danger" style="padding: 1px 3px; font-size: 10px;" wire:click="removeItem('{{ $cart['rowId'] }}')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                                <td>Rp {{ number_format($cart['price'],2,',','.') }}</td>
                            </tr>
                        @empty
                            <td colspan="4">
                                <h6 class="text-center">Empty Cart</h6>
                            </td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h4 class="fw-bold">Cart Summary</h4>
                <h5>Sub Total: Rp {{ number_format($summary['sub_total'],2,',','.') }}</h5>
                <h5>Tax: Rp {{ number_format($summary['pajak'],2,',','.') }}</h5>
                <h5>Total: Rp {{ number_format($summary['total'],2,',','.') }}</h5>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <button class="btn btn-primary w-100" wire:click="enableTax">Add Tax</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-danger w-100" wire:click="disableTax">Remove Tax</button>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-success  w-100">Save Transaction</button>
                </div>
            </div>
        </div>
    </div>
</div>