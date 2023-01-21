<div>
    <input type="text" wire:model="hobi" placeholder="Properti Hobi">
    <input type="text" wire:model="warna_kesukaan" placeholder="Properti Warna Kesukaan">
    <div>
        <div>Hobi: {{ $hobi }} </div>
        <div>Warna Kesukaan: {{ $warna_kesukaan }}</div>
    </div>

    <ul>
        @foreach ($proses as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
