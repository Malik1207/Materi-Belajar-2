<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    public $product_id = NULL;
    public $name = NULL;
    public $price = NULL;

    public $search = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.product-table', [
            'products' => Product::where('name', 'like', '%' . $this->search . '%')->paginate(5)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function editProduct($product)
    {
        $this->product_id = $product['id'];
        $this->name = $product['name'];
        $this->price = $product['price'];
    }

    public function changeProduct()
    {
        Product::where('id', $this->product_id)->update([
            'name' => $this->name,
            'price' => $this->price,
        ]);
        $this->cancelEdit();
    }

    public function cancelEdit()
    {
        $this->product_id = NULL;
        $this->name = NULL;
        $this->price = NULL;
    }
}
