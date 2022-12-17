<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Register</h1>
                    <form wire:submit.prevent="submit">
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input wire:model='form.name' type="text" class="form-control">
                            @error('form.name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
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
                            <label for="">Password</label>
                            <input wire:model='form.password_confirmation' type="password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-primary w-100">Register</button>
                        </div>
                        <div>
                            <a href="/login">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
