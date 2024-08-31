<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php echo $__env->make('includes.navbar_left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="page__content">
            <?php echo $__env->make('includes.navbar_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('includes.wallet_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="wallet-transactions mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">HISTÓRICO DE SAQUES</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Comprovante</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Data</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($withdrawals)): ?>
                                        <?php $__currentLoopData = $withdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrawal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th scope="row"><?php echo e($withdrawal->id); ?></th>
                                                <td>
                                                    <?php if(!empty($withdrawal->proof)): ?>
                                                        <a href="<?php echo e(url('storage/'. $withdrawal->proof)); ?>" download class="text-success">Baixar</a>
                                                    <?php else: ?>
                                                        ....
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($withdrawal->type); ?></td>
                                                <td><?php echo e(\Helper::amountFormatDecimal($withdrawal->amount)); ?></td>
                                                <td>
                                                    <?php if($withdrawal->status == 0): ?>
                                                        <span class="badge bg-warning text-dark">Pendente</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-success">Confirmado</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($withdrawal->dateHumanReadable); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <tr>
                                            <td class="flex items-center justify-center text-center py-4" colspan="5">
                                                <h4 class=" mb-0">NENHUMA INFORMAÇÃO A EXIBIR</h4>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-5">
                            <div class="row">
                                <div class="col-lg-6"></div>
                                <div class="col-lg-6">
                                    <?php echo e($withdrawals->links()); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hasan/Desktop/real pro/coroabet/resources/views/panel/wallet/withdrawal.blade.php ENDPATH**/ ?>