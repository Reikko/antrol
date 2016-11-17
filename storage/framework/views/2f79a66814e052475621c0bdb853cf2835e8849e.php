<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php $__env->startSection('363'); ?>
    <button><?php echo link_to_route('unidad.edit', $title = 'Editar',$id); ?></button>
    <table class="table">
        <thead>
        <th>#</th>
        <th>Nombre de la Calle</th>
        <th>Numero Exterior</th>
        <th>Numero Interior</th>
        <th>Asignada</th>
        <th>Editar</th>
        </thead>

        <?php foreach($propiedades as $key =>$propiedad): ?>

            <tbody>
            <td><?php echo e($key+1); ?></td>
            <td><?php echo e($propiedad->nom_calle); ?></td>
            <td><?php echo e($propiedad->num_ext); ?></td>
            <td><?php echo e($propiedad->num_int); ?></td>
            <td><?php echo e($propiedad->id_clie); ?></td>
            <td><?php echo e($propiedad->editable); ?></td>
            </tbody>
        <?php endforeach; ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>