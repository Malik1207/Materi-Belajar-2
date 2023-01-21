<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreate extends Component
{
    public function render()
    {
        return view('livewire.user-create');
    }

    public $name;
    public $email;
    public $password;

    public function store()
    {
        $this->validate([
            'name' => 'required|string|unique:users,email',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->name = NULL;
        $this->email = NULL;
        $this->password = NULL;

        session()->flash('success', 'User berhasil dibuat!');

        $this->emit('userStore');
    }
}
