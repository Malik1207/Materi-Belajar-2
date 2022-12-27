<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function __construct() {
        $this->middleware('guest');
    }

    public function login(Request $request) {

        $credentials = $request->all();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('mahasiswa.index');
        }

        return back()->withErrors([
            'email' => 'Email tidak terdaftar'
        ]);

    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }

}
