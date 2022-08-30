<!-- Button trigger modal -->
    <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#navigation-<?php echo e($navigation->id); ?>">
        Delete
    </button>
  
  <!-- Modal -->
  <div class="modal fade" id="navigation-<?php echo e($navigation->id); ?>" tabindex="-1" aria-labelledby="navigation-<?php echo e($navigation->id); ?>Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="navigation-<?php echo e($navigation->id); ?>Label">Are you sure</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="my-2">
                <?php echo e($navigation->name); ?> - <a href="<?php echo e(url($navigation->url)); ?>"><?php echo e($navigation->url); ?></a>
            </div>
            <div class="d-flex justify-content-around">
                <div class="w-100">
                    <form action="<?php echo e(route('navigation.delete', $navigation)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger w-100">Yes</button>
                    </form>
                </div>
                <div class="mx-1"></div>
                <div class="w-100">
                    <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div><?php /**PATH /home/abdmalik/learn-permission/resources/views/navigation/delete.blade.php ENDPATH**/ ?>