@extends('layouts.app', ['title' => 'Email Verification'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Email Verification</div>
                    <div class="card-body">
                       @if(session('status'))
                              <div class="alert alert-success" role="alert">
                                Verifikasi email sudah dikirim
                              </div>
                       @endif
                        Untuk mengunjungi halaman ini anda butuh verifikasi email
                        <form action="/email/verification-notification" method="post" class="mt-2">
                            @csrf
                            <button type="submit" class="btn btn-primary mt-4">Kirim Ulang</button>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection