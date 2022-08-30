<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($article->title); ?></h1>
    <div>
        <?php echo $article->content; ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdmalik/livewire-ckeditor/resources/views/article.blade.php ENDPATH**/ ?>