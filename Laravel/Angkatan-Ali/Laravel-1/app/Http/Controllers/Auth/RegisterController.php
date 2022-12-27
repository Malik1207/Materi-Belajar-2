<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // cara 1
    public function __contruct()
    {
        $this -> middleware('guess');

    }

    public function register(Ruquest $request)
    {
        $data = $request->all();

        User::create($data);

        Auth::login($data);

        return redirect()->route('mahasiswa.index');
    }
}
