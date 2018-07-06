<?php $__env->startSection('title', 'Meu perfil'); ?>


<?php $__env->startSection('content_header'); ?>
    <h1>Meu Perfil</h1>
    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Meu Perfil</a></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.includes.alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="box">
    <div class="box-body">
        <div class="col-lg-6 col-xs-6">
            <?php if(auth()->user()->image != null): ?>
                    <img src="<?php echo e(url('storage/users/'.auth()->user()->image)); ?>" alt="<?php echo e(auth()->user()->name); ?>" class="img-circle" style="width: 100px; height: 100px;">
            <?php endif; ?>
            <form action="<?php echo e(route('profile.update')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

                <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" value="<?php echo e(auth()->user()->name); ?>" name="name" placeholder="Nome" class="form-control">
                </div>
                <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" value="<?php echo e(auth()->user()->email); ?>" name="email" placeholder="E-mail" class="form-control">
                </div>

                <div class="form-group">
                <label for="password">Senha</label>
                <input type="text" name="password" placeholder="Senha" class="form-control">
                </div>

                <div class="form-group">

                <label for="image">Foto</label>
                <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
            <button type="submit" class="btn btn-info">Atualizar Perfil</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>