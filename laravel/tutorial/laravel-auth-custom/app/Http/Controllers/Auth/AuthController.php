<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'except' => [
                'logout',
                'verifyEmailProcess',
                'verifyEmailSuccess',
                'verifyEmail',
                'sendEmailVerification',
                'resendEmailVerification'
            ]
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());

        auth()->login($user);
        $this->sendEmailVerification();

        return redirect()->route('verification');
    }

    public function sendEmailVerification()
    {
        try {
            $user = auth()->user();

            if (RateLimiter::tooManyAttempts(auth()->user()->email, 3)){
                $seconds = RateLimiter::availableIn(auth()->user()->email);
                $second  = $seconds <= 60 ? $seconds.' detik' : ceil($seconds/60).' menit';
                return 'Anda sudah melakukan 6 kali percobaan silahkan tunggu '.$second.' lagi untuk mencoba kirim kembali';
            }

            $token = Crypt::encrypt($user->password);

            $actionLink = route('verification.process', $token);
            $body = 'Silahkan Verifikasi Email anda dari website <strong>Finval</strong> akun dengan email <strong>'.$user->email.'</strong>, Verifikasi Email anda dengan mengklik link berikut';

            RateLimiter::hit($user->email, 1800);

            Mail::send('email.email-verification', compact('body', 'actionLink'), function($message) use ($user) {
                // $message->from('finval@gmail.com');
                $message->to($user->email)
                        ->subject('Verifikasi Email');
            });

            RateLimiter::clear($user->email);

            return true;
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    public function verifyEmailProcess($token)
    {
        $user            = auth()->user();
        $token_decrypted = Crypt::decryptString($token);

        if (explode('"', $token_decrypted)[1] != $user->password){
            return redirect()->route('verification')->with('error', 'Token tidak valid');
        }

        $user = User::findOrFail(auth()->user()->id);
        $user->update([
            "email_verified_at" => Date('Y-m-d'),
        ]);

        return redirect()->route('user.dashboard');
    }

    public function resendEmailVerification()
    {

        $is_send_email = $this->sendEmailVerification();

        if (gettype($is_send_email) == 'string'){
            $type    = 'error';
            $message = $is_send_email;
        }else {
            $type    = 'success';
            $message = 'Berhasil kirim email verifikasi';
        }

        $this->sendEmailVerification();
        return redirect()->route('verification')->with($type, $message);
    }

    public function verifyEmail()
    {
        return view('auth.email-verification');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        // $request->validate([
        //     'email' => 'email|required|exists:users,email',
        //     'password' => 'required'
        // ]);

        // $credentials = $request->only('email', 'password');
        // $authenticated = Auth::attempt($credentials, $request->has('remember'));

        // if (!$authenticated){
        //     return redirect()->back()->with('error', 'email atau password salah.');
        // }

        // // dd(auth()->guard('admin')->user()->name);

        // return redirect()->intended('/user/dashboard');

        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == 'user') {
                return redirect()->route('user.dashboard');
            }else{
                return redirect()->route('admin.dashboard');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Berhasil logout');
    }
}
