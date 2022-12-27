<div>
    {{-- <div class="mb-3">
        <input type="text" name="" id="" class="form-control" wire:model="nama">
        
        <textarea name="" id="" cols="30" rows="10" class="form-control" wire:model="nama"></textarea>

        <input type="radio" name="jenis_kelamin" value="laki-laki" id="" wire:model='nama'> Laki-laki
        <input type="radio" name="jenis_kelamin" value="perempuan" id="" wire:model='nama'> Perempuan

        <select name="" id="" class="form-select" wire:model='nama'>
            <option hidden>Pilih jenis kelamin</option>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
        
        <input
        @if($show_password == 'show')
        type="text"
        @else
        type="password" 
        @endif
        class="form-control" wire:model='nama'>
        <label for="">Show Password</label>
        <input type="checkbox" name="" id="" wire:model='show_password' value="show">
        
    </div> --}}
    <div class="mb-3">
        <input type="number" class="form-control" wire:model='keranjang'>
    </div>
    <button class="btn btn-primary" wire:click='plus'>+ plus</button>
    @if($keranjang >= 1)
        <button class="btn btn-danger" wire:click='minus'>- minus</button>
    @endif
</div>
