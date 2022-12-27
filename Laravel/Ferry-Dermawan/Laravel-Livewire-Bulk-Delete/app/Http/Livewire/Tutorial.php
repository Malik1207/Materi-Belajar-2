<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Tutorial extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['resetMySelected' => 'resetSelected'];

    public $mySelected = [];
    public $selectAll = false;
    public $firstId = NULL;

    public function render()
    {
        $users = User::latest()->paginate(5);
        $this->firstId = $users[0]->id;
        return view('livewire.tutorial', [
            'users' => $users
        ])->extends('layouts.master')->section('content');
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->mySelected = User::where('id', '>=', $this->firstId)->limit(5)->pluck('id');
        } else {
            $this->mySelected = [];
        }
    }

    public function updatedMySelected($value)
    {
        if (count($value) == 5) {
            $this->selectAll = true;
        } else {
            $this->selectAll = false;
        }
    }

    public function resetSelected()
    {
        $this->mySelected = [];
        $this->selectAll = false;
    }

    public function deletedSelected()
    {
        User::WhereIn('id', $this->mySelected)->delete();
        $this->mySelected = [];
        $this->selectAll = false;
    }
}
