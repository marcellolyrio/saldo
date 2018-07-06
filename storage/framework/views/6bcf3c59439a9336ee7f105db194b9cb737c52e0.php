<?php $__env->startSection('title', 'Nova Recarga'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Fazer Retirada</h1>
    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Retirada</a></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box">
        <div class="box-header">
            <h3>Fazer Retirada</h3>
        </div>
        <div class="box-body">
           <?php echo $__env->make('admin.includes.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
           <form method="POST" action="<?php echo e(route('withdrawn.store')); ?>">
           <?php echo csrf_field(); ?>

                <div class="form-group">
                    <input type="text" name="value" placeholder="Valor Retirada" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Sacar</button>
                </div>
           </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>