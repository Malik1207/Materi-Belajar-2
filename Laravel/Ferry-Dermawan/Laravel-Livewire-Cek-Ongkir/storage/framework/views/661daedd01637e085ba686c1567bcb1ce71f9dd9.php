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
                                <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item['province_id']); ?>"><?php echo e($item['province']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fromCity" class="form-label">Pengirim Kota</label>
                            <select id="fromCity" wire:model='fromCity' class="form-select" <?php if(!$fromProvince): ?> disabled <?php endif; ?> required>
                                <option>Pilih Kota</option>
                                <?php if($fromCities): ?>
                                    <?php $__currentLoopData = $fromCities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item['city_id']); ?>"><?php echo e($item['city_name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="toProvince" class="form-label">Penerima Provinsi</label>
                            <select id="toProvince" wire:model='toProvince' class="form-select" required>
                                <option>Pilih Provinsi</option>
                                <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item['province_id']); ?>"><?php echo e($item['province']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="toCity" class="form-label">Penerima Kota</label>
                            <select id="toCity" wire:model='toCity' class="form-select" <?php if(!$toProvince): ?> disabled <?php endif; ?> required>
                                <option>Pilih Kota</option>
                                 <?php if($toCities): ?>
                                    <?php $__currentLoopData = $toCities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item['city_id']); ?>"><?php echo e($item['city_name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
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
        <?php if($myResult): ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Hasil</div>
                    <div class="card-body">
                        <ul>
                            <?php $__currentLoopData = $myResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>Kode : <?php echo e($item1['code']); ?></li>
                                <li>Nama Perusahaan : <?php echo e($item1['name']); ?></li>
                                <ul>
                                    <?php $__currentLoopData = $item1['costs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>Layanan : <?php echo e($item2['service']); ?></li>
                                        <li>Deskripsi : <?php echo e($item2['description']); ?></li>
                                        <ul>
                                            <?php $__currentLoopData = $item2['cost']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>Harga : Rp<?php echo e(number_format($item3['value'])); ?></li>
                                                <li>Estimasi : <?php echo e($item3['etd']); ?> Hari</li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/abdmalik/livewire-cek-ongkir/resources/views/livewire/tutorial.blade.php ENDPATH**/ ?>