<div>
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        @if($alert)
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Terima Kasih</strong> sudah melengkapi form profile.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <span>Edit</span>
            <a href="{{ route('users.profile') }}" class="badge bg-warning text-decoration-none text-dark">
              Back
            </a>
          </div>
          <div class="card-body">
            <div class="mb-2">
              <label for="name">Name</label>
              <input type="text" id="name" wire:model="name" class="form-control @error('name') is-invalid @enderror">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-2">
              <label for="email">Email</label>
              <input type="email" id="email" wire:model="email" class="form-control @error('email') is-invalid @enderror">
              @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-2">
              <label for="province">Province</label>
              <select type="text" id="province" wire:model="myProvince" class="form-select">
                <option value="" selected hidden>Pilih Provinsi</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province->code }}">{{ $province->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-2">
              <label for="city">City</label>
              @if ($city)
                <select type="text" id="city" wire:model="myCity" class="form-select">
                  <option value="">Pilih Kota</option>
                  @foreach ($city->cities as $item)
                    <option value="{{ $item->code }}">{{ $item->name }}</option>
                  @endforeach
                </select>
              @else
                <select type="text" id="city" wire:model="myCity" class="form-select" disabled>
                  <option value="">Pilih Kota</option>
                </select>
              @endif
            </div>
            <button type="submit" class="btn btn-primary" wire:click="submit">Update</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>