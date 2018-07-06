<?php $__env->startSection('title', 'Saldo'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Saldo</h1>
    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box">
        <div class="box-header">
            <a href="<?php echo e(route('balance.deposit')); ?>" class="btn btn-primary"><i class="fa fa-cart-plus"></i> Recarregar</a>
            <?php if($amount > 0): ?>
            <a href="<?php echo e(route('balance.withdraw')); ?>" class="btn btn-danger"><i class="fa fa-cart-arrow-down"></i> Sacar</a>
            <?php endif; ?>
            <?php if($amount > 0): ?>
            <a href="<?php echo e(route('balance.transfer')); ?>" class="btn btn-info"><i class="fa fa-exchange"></i> Transferir</a>
            <?php endif; ?>
        </div>
        <div class="box-body">
        <?php echo $__env->make('admin.includes.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                    <h4>R$ <?php echo e(number_format($amount, 2, ',', '.')); ?></h4>

                    
                    </div>
                    <div class="icon">
                    <i class="ion ion-cash"></i>
                    </div>
                    <a href="<?php echo e(route('admin.historic')); ?>" class="small-box-footer">Histórico <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>