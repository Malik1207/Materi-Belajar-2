<div>
    <div class="row">
        <div class="col-md-8">
            <form wire:submit.prevent='store' method="post">
                <div class="mb-3">
                    <label for="">Judul Artikel</label>
                    <input type="text" class="form-control" wire:model='title'>
                </div>
                <div class="mb-3">
                    <label for="">Content Artikel</label>
                    <textarea row="3" class="form-control" wire:model='content'></textarea>
                </div>
                <div class="mb-3" wire:ignore>
                    <label for="">Category</label>
                    <select class="js-example-basic w-100" id="my-category" wire:model='category'>
                        <option></option>
                        <?php $__currentLoopData = $my_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3" wire:ignore>
                    <label for="">Tag</label>
                    <select class="js-example-basic w-100"  id="my-tag"  multiple="multiple" wire:model='tag'>
                        <?php $__currentLoopData = range(1,10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="Tag <?php echo e($item); ?>">Tag <?php echo e($item); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" row="">Submit</button>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic').select2();
            // 
            $("#my-category").select2({
                placeholder: "Pilih Kategori",
            });
            $("#my-tag").select2({
                placeholder: "Pilih Tag",
            });
            $('#my-category').on('change',function(e){
                const data = $('#my-category').select2("val");
                window.livewire.find('<?php echo e($_instance->id); ?>').set('category',data);
            })
            $('#my-tag').on('change',function(e){
                const data = $('#my-tag').select2("val");
                window.livewire.find('<?php echo e($_instance->id); ?>').set('tag',data);
            })
        });
        window.addEventListener('articleStore', event => {
            $("#my-category").val(null).trigger('change');
            $("#my-tag").val(null).trigger('change');
        })
    </script>
</div>
<?php /**PATH /home/abdmalik/livewire-select2/resources/views/livewire/my-tutorial.blade.php ENDPATH**/ ?>