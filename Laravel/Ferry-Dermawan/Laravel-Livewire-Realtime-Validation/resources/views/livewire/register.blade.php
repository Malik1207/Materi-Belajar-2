<div>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" wire:model='name' id="name" class="form-control @if($errors->has('name')) is-invalid @elseif ($name == NULL) @else is-valid @endif" placeholder="Nama Lengkap">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">Alamat Email</label>
            <input type="text" name="email" wire:model='email' id="email" class="form-control @if($errors->has('email')) is-invalid @elseif ($email == NULL) @else is-valid @endif"" placeholder="user@example.com">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password">Kata Sandi</label>
            <input type="password" name="password" wire:model='password' id="password" class="form-control @if($errors->has('password')) is-invalid @elseif ($password == NULL) @else is-valid @endif"" placeholder="Password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation">Ulangi Kata Sandi</label>
            <input type="password" name="password_confirmation" wire:model='password_confirmation' id="password_confirmation" class="form-control @if($errors->has('password_confirmation')) is-invalid @elseif ($password_confirmation == NULL) @else is-valid @endif"" placeholder="Password">
            @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button wire:click='storeUser' type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
