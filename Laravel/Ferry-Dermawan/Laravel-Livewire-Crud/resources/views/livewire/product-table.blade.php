<div>
    @include('livewire.product-edit')
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $item)
                <tr>
                    <td>{{ $products->firstItem() + $index }}</td>
                    <td>{{ $item->name }}</td>
                    <td>Rp.{{ number_format($item->price) }}</td>
                    <td>
                        <button class="btn badge bg-warning" wire:click='productEdit({{ $item }})' data-bs-toggle="modal" data-bs-target="#editModal">Update</button>
                        <button class="btn badge bg-danger" wire:click='productDelete({{ $item->id }})'>Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
</div>
