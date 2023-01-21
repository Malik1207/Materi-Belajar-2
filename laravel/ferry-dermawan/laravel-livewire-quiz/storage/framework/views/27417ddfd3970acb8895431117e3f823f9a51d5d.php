<div>
    <?php if($status == 'instruction'): ?>
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Instruction
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque eos atque obcaecati cum. Quod optio assumenda, ipsa est reprehenderit nobis impedit distinctio aliquam fugiat ducimus quidem possimus minus earum explicabo?</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque eos atque obcaecati cum. Quod optio assumenda, ipsa est reprehenderit nobis impedit distinctio aliquam fugiat ducimus quidem possimus minus earum explicabo?</p>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button class="btn btn-danger" wire:click="changeStatus('start')">Start</button>
                    </div>
                </div>
            </div>
        </div>
    <?php elseif($status == 'start'): ?>
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Soal <?php echo e($priority); ?>/<?php echo e($total_quiz); ?></div>
                    <div class="card-body">
                        <p><?php echo e($question->body); ?></p>
                        <ul class="list-group list-group-flush">
                            <?php $__currentLoopData = json_decode($question->answers); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                <li class="list-group-item" wire:click='choiceOption(<?php echo e($index); ?>)' role="button">
                                    <?php if($mySelected === $index): ?>
                                        <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                    <?php else: ?>
                                        <i class="bi bi-circle me-2"></i>
                                    <?php endif; ?>
                                        <?php echo e($answer); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <?php if($mySelected !== NULL): ?>
                            <div>
                                <button class="btn btn-primary" wire:click='nextQuestion'>Next</button>
                            </div>
                        <?php else: ?>
                                <button class="btn btn-secondary" disabled>Next</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php elseif($status == 'finish'): ?>
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Finish</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush d-flex justify-content-between">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Jawaban Benar</span>
                                <span><?php echo e($correct); ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Score</span>
                                <span><?php echo e(round(($correct*100) / $total_quiz)); ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="<?php echo e(route('quiz')); ?>" class="btn btn-warning">Ulang Ujian</a>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <h1>Error</h1>
    <?php endif; ?>
</div>
<?php /**PATH /home/abdmalik/livewire-quiz/resources/views/livewire/quiz.blade.php ENDPATH**/ ?>