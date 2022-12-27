<?php

namespace App\Http\Livewire;

use App\Models\Product as ModelsProduct;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Product extends Component
{
    use WithFileUploads;

    public $name, $image, $description, $qty, $price;

    public function render()
    {
        $products = ModelsProduct::orderBy('created_at', 'desc')->get();
        return view('livewire.product', [
            'products' => $products
        ]);
    }

    public function previewImage()
    {
        $this->validate([
            'image' => 'image|max:2048'
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'image|max:2048|required',
            'description' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);

        $imageName = md5($this->image . microtime() . '.' . $this->image->extension());

        Storage::putFileAs(
            'public/images',
            $this->image,
            $imageName
        );

        ModelsProduct::create([
            'name' => $this->name,
            'image' => $imageName,
            'description' => $this->description,
            'qty' => $this->qty,
            'price' => $this->price
        ]);

        session()->flash('info', 'Product Created Successfully');

        $this->name = '';
        $this->image = '';
        $this->description = '';
        $this->qty = '';
        $this->price = '';
    }
}
