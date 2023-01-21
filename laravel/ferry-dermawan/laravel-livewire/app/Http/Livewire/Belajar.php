<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    public function render()
    {
        return view('livewire.belajar');
    }

    // public $nama = "Abd Malik";
    // public $show_password = false;

    public $keranjang = 0;

    public function plus()
    {
        $this->keranjang++;
    }

    public function minus()
    {
        $this->keranjang--;
    }
}
