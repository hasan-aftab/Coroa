<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php echo $__env->make('includes.navbar_left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="page__content">
            <?php echo $__env->make('includes.navbar_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="row">
                <div class="col-lg-6">
                    <h2>Todos os jogos</h2>
                </div>
                <div class="col-lg-6">

                    <form action="<?php echo e(route('web.game.list')); ?>" class="w-full" method="GET">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                            <input type="text" name="searchTerm" class="form-control" placeholder="Digite o nome do jogo" value="<?php echo e($search); ?>">
                            <input type="hidden" name="tab" value="<?php echo e($tab); ?>" id="">

                            <span class="input-group-text" style="padding-right: 5px;">
                                <button type="submit">
                                    Buscar
                                </button>
                            </span>
                        </div>
                    </form>

                </div>
            </div>

            <div class="row">
                <?php if($tab == 'exclusives'): ?>
                    <div class="d-steam-cards js-steamCards">
                        <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gamee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('web.vgames.show', ['game' => $gamee->uuid])); ?>" class="d-steam-card-wrapper">
                                <div class="d-steam-card js-steamCard" style="background-image: url('storage/<?php echo e($gamee->cover); ?>')"></div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>

                <?php if($tab != 'exclusives'): ?>
                    <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6 caixa-loop-elementos">
                            <a href="<?php echo e(route('web.game.index', ['slug' => $game->slug])); ?>" class="inner-loop-elementos">
                                <img src="<?php echo e(asset('storage/'.$game->image)); ?>" alt="<?php echo e($game->name); ?>" class="img-fluid rounded-3">
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>

            <div class="">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <?php echo e($games->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hasan/Desktop/real pro/coroabet/resources/views/web/game/list.blade.php ENDPATH**/ ?>