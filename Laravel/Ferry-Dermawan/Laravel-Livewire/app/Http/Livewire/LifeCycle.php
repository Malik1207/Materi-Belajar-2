<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LifeCycle extends Component
{
    public $hobi = "Bermain Game";
    public $warna_kesukaan = "Biru";

    public $proses = [];

    public function mount()
    {
        $this->proses[] = 'sedang dimount';
    }

    public function hydrate()
    {
        $this->proses[] = 'sedang dihydrate';
    }

    public function updating($name, $value)
    {
        $this->proses[] = 'sedang diupdating';
    }

    public function updated($name, $value)
    {
        $this->proses[] = 'sedang diupdated';
    }

    public function render()
    {
        $this->proses[] = 'sedang dirender';
        $this->proses[] = '---';
        return view('livewire.life-cycle');
    }
}
