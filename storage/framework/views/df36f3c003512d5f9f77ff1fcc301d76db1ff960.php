<?php $__env->startSection('444'); ?>
    <?php echo Form::open(['route'=>'fallo.store','method'=>'POST']); ?>

    <div class="form-group">
        <?php echo Form::label('Lugar:'); ?>

        <?php echo Form::text('nom_defecto',null,['class'=>'form-control','placeholder'=>'Nombre del lugar de defecto','required'=>'true']); ?>

    </div>
    <?php echo Form::submit('Agregar Lugar',['class'=>'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>