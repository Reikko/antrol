<?php if(Session::has('message')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>

<?php $__env->startSection('completo'); ?>
    <table class="table table-hover table-condensed">
        <thead>
        <th>Id</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Estatus</th>
        <th>Usuario</th>
        <th>Archivos</th>
        <th>Editar</th>
        </thead>

        <?php foreach($ts as $t): ?>
            <tbody>
            <?php if($t->estatus ==0): ?>
                <tr class="success">
            <?php endif; ?>
            <?php if($t->estatus ==1): ?>
                <tr class="info">
            <?php endif; ?>

            <?php if($t->estatus == 2): ?>
                <tr class="warning">
            <?php endif; ?>

            <?php if($t->estatus == 3): ?>
                <tr class="danger">
            <?php endif; ?>
                    <td><?php echo e($t->id); ?></td>
                    <td>
                        <?php if($t->foto == 'imagen.jpg'): ?>
                            <?php echo e(Html::image(asset('imagen.jpg'),null,['class' => ' ','style'=>'width: 100px'])); ?>

                        <?php else: ?>
                            <?php echo e(Html::image(asset('archivos/'.$t->foto),null, ['class' => ' ','style'=>'width: 100px'])); ?>

                        <?php endif; ?>
                            <br>
                       <?php echo e(link_to_route('trabajador.show', $title = 'VER PERFIL', $t->id,['class'=>'btn btn-success '])); ?></td>
                    <td><?php echo e($t->nom_trab); ?> <?php echo e($t->ap_pat); ?> <?php echo e($t->ap_mat); ?></td>
                    <td><?php echo e($t->puesto); ?></td>
                    <td><?php echo e($t->estatus); ?></td>
                    <td><?php echo e($t->alias); ?></td>
                    <td>
                        <?php if($t->renuncia!='null'): ?>
                            <a href="archivos/<?php echo e($t->renuncia); ?>" target="_blank"> Renuncia</a><br>
                        <?php endif; ?>
                        <?php if($t->ife!='null'): ?>
                                <a href="archivos/<?php echo e($t->ife); ?>" target="_blank"> IFE</a><br>
                        <?php endif; ?>
                        <?php if($t->curp!='null'): ?>
                            <a href="archivos/<?php echo e($t->curp); ?>" target="_blank"> CURP</a><br>
                        <?php endif; ?>
                        <?php if($t->comp_dom!='null'): ?>
                            <a href="archivos/<?php echo e($t->comp_dom); ?>" target="_blank"> DOMICILIO</a><br>
                        <?php endif; ?>
                        <?php if($t->com_seguro!='null'): ?>
                            <a href="archivos/<?php echo e($t->com_seguro); ?>" target="_blank"> SEGURO</a><br>
                        <?php endif; ?>
                    </td>
                    <td><?php echo link_to_route('trabajador.edit', $title = 'Editar', $parameters = $t->id, $attributes = ['class'=>'btn btn-primary btn-block']); ?></td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>