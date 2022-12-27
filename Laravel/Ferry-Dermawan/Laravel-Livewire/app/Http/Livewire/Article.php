<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Article extends Component
{
    public $name;
    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.article')->layout('layouts.app')->slot('main');
    }
}
