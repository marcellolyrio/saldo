<?php $__env->startSection('title', 'Histórico de Movimentações'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Histórico de Movimentações</h1>
    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Histórico</a></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box">
        <div class="box-header">
            <form action="<?php echo e(route('historic.search')); ?>"  method="post" class="form form-inline">
            <?php echo csrf_field(); ?>

                <input type="text" name="id" class="form-control" placeholder="ID">
                <input type="date" name="data" class="form-control">
                <select name="type"  class="form-control">
                    <option value="">-- Selecione --</option>
                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($type); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <button class="btn btn-primary">Pesquisar</button>
            </form>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Valor</th>
                        <th>Tipo</th>
                        <th>Data</th>
                        <th>?Sender?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $historics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($historic->id); ?></td>
                        <td><?php echo e(number_format($historic->amount, 2, ',', '.')); ?></td>
                        <td><?php echo e($historic->type($historic->type)); ?></td>
                        <td><?php echo e($historic->date); ?></td>
                        <td>
                            <?php if($historic->user_id_transaction): ?>                        
                                <?php echo e($historic->userSender->name); ?>

                            <?php else: ?>
                            -
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <?php if(isset($dataForm)): ?>
            <?php echo $historics->appends($dataForm)->links(); ?>

            <?php else: ?>
            <?php echo $historics->links(); ?>

            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>