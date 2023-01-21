<div>
    <form wire:submit.prevent="articleStore">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" class="form-control" wire:model='title'>
        </div>
        <div class="mb-3" wire:ignore>
            <textarea id="my-ckeditor"><?php echo e($content); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <ul>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('articles.show',$item->id)); ?>"><?php echo e($item->title); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    
    <script>
        $(document).ready(function(){
            const editor = CKEDITOR.replace('my-ckeditor');
            editor.on('change',function(event){
                console.log(event.editor.getData())
                window.livewire.find('<?php echo e($_instance->id); ?>').set('content',event.editor.getData());
            })
            window.addEventListener('articleStore', event => {
                CKEDITOR.instances['my-ckeditor'].setData('');
            })
        })
    </script>
</div>
<?php /**PATH /home/abdmalik/livewire-ckeditor/resources/views/livewire/my-editor.blade.php ENDPATH**/ ?>