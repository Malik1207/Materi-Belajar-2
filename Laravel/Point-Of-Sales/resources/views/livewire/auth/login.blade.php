<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Login</h1>
                    @if (session()->has('error')) <span class="text-danger">{{ session('error') }}</span> @endif
                    <form wire:submit.prevent="submit">
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input wire:model='form.email' type="text" class="form-control">
                            @error('form.email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input wire:model='form.password' type="password" class="form-control">
                            @error('form.password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-primary w-100">Login</button>
                        </div>
                        <div>
                            <a href="/register">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
