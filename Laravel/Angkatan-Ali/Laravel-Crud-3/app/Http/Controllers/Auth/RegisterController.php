<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

        // Cara 1
        public function __construct() {
            $this->middleware('guest');
        }

        public function register(Request $request) {

        $data = $request->all();

        User::created('$data');

        Auth::login('$data');

        return redirect()->route('mahasiswa.index');

    }

}
