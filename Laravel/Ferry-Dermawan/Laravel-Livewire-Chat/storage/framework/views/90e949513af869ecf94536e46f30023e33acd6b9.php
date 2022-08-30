<div>
    <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-header">
            Groups
          </div>
          <div class="card-body">
            <div class="list-group list-group-flush">
                <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div wire:click="selectGroup(<?php echo e($item->id); ?>)" class="list-group-item text-capitalize" role="button"><?php echo e($item->name); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
      <?php if($group != NULL): ?>     
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><?php echo e($group->name); ?></div>
            <div class="card-body">
                <div wire:poll.750ms class="list-group list-group-flush mb-4 overflow-auto" style="max-height: 300px; display:flex; flex-direction:column-reverse;">
                    <?php $__currentLoopData = $chats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="list-group-item <?php if($item->user_id == $user->id): ?> text-end <?php endif; ?>">
                            <div><?php echo e($item->created_at); ?> <?php echo e($item->user->name); ?></div>
                            <div><?php echo e($item->message); ?></div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="d-flex">
                    <input  wire:model='text' type="text" class="form-control me-3 <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Messages....">
                    <button wire:click='send' class="btn btn-primary">Send</button>
                </div>
            </div>
            </div>
        </div>
      <?php endif; ?>
    </div>
</div>
</div>
<?php /**PATH /home/abdmalik/livewire-chat/resources/views/livewire/messages.blade.php ENDPATH**/ ?>