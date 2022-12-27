<div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form</div>
                <div class="card-body">
                    <form action="" wire:submit.prevent='check'>
                        <div class="mb-3">
                            <label for="weight" class="form-label">Berat / Gram</label>
                            <input type="number" min="0" class="form-control" id="weight" wire:model.defer='weight' required>
                        </div>
                        <div class="mb-3">
                            <label for="fromProvince" class="form-label">Pengirim Provinsi</label>
                            <select id="fromProvince" wire:model='fromProvince' class="form-select" required>
                                <option>Pilih Provinsi</option>
                                @foreach ($provinces as $item)
                                    <option value="{{ $item['province_id'] }}">{{ $item['province'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fromCity" class="form-label">Pengirim Kota</label>
                            <select id="fromCity" wire:model='fromCity' class="form-select" @if(!$fromProvince) disabled @endif required>
                                <option>Pilih Kota</option>
                                @if ($fromCities)
                                    @foreach ($fromCities as $item)
                                        <option value="{{ $item['city_id'] }}">{{ $item['city_name'] }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="toProvince" class="form-label">Penerima Provinsi</label>
                            <select id="toProvince" wire:model='toProvince' class="form-select" required>
                                <option>Pilih Provinsi</option>
                                @foreach ($provinces as $item)
                                    <option value="{{ $item['province_id'] }}">{{ $item['province'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="toCity" class="form-label">Penerima Kota</label>
                            <select id="toCity" wire:model='toCity' class="form-select" @if(!$toProvince) disabled @endif required>
                                <option>Pilih Kota</option>
                                 @if ($toCities)
                                    @foreach ($toCities as $item)
                                        <option value="{{ $item['city_id'] }}">{{ $item['city_name'] }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="courier" class="form-label">Kurir</label>
                            <select id="courier" wire:model='courier' class="form-select" required>
                                <option>Pilih Kurir</option>
                                <option value="jne">JNE</option>
                                <option value="jnt">JNT</option>
                                <option value="tiki">TIKI</option>
                                <option value="pos">PON INDONESIA</option>
                            </select>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Check</button>
                            <span wire:loading>Loading...</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if ($myResult)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Hasil</div>
                    <div class="card-body">
                        <ul>
                            @foreach ($myResult as $item1)
                                <li>Kode : {{ $item1['code'] }}</li>
                                <li>Nama Perusahaan : {{ $item1['name'] }}</li>
                                <ul>
                                    @foreach ($item1['costs'] as $item2)
                                        <li>Layanan : {{ $item2['service'] }}</li>
                                        <li>Deskripsi : {{ $item2['description'] }}</li>
                                        <ul>
                                            @foreach ($item2['cost'] as $item3)
                                                <li>Harga : Rp{{ number_format($item3['value']) }}</li>
                                                <li>Estimasi : {{ $item3['etd'] }} Hari</li>
                                            @endforeach
                                        </ul>
                                    @endforeach
                                </ul>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
