<?php $__env->startSection('title', 'Transferência'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Fazer Transferência</h1>
    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Transferir</a></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box">
        <div class="box-header">
            <h3>Fazer Transferência (Informe o Recebedor)</h3>
        </div>
        <div class="box-body">
           <?php echo $__env->make('admin.includes.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
           <form method="POST" action="<?php echo e(route('confirm.transfer')); ?>">
           <?php echo csrf_field(); ?>

                <div class="form-group">
                    <input type="text" name="sender" placeholder="Informação de quem vai receber o saque (Nome ou E-mail)" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Próxima Etapa</button>
                </div>
           </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>