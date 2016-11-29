<?php $__env->startSection('completo'); ?>
    <div class="panel panel-default">
        <div class="panel-heading">Ubicación</div>
        <div class="panel-body">
            <h2><?php echo e($ts->nom_trab); ?> <?php echo e($ts->ap_pat); ?> <?php echo e($ts->ap_mat); ?></h2>
            <div class="col-sm-8">
                <h5>Estado: <?php echo e($dir->estado); ?></h5>
                <h5>Municipio: <?php echo e($dir->municipio); ?></h5>
                <h5><?php echo e($dir->tipo); ?>: <?php echo e($dir->asentamiento); ?></h5>
                <h5>Tipo de zona: <?php echo e($dir->zona); ?></h5>
                <h5>Tipo de Propiedad: <?php echo e($ts->tipo); ?></h5>
                <h5>Calle : <?php echo e($ts->calle); ?></h5>
                <h5>Código Postal: <?php echo e($dir->cp); ?></h5>
                <h5>Numero Exterior: <?php echo e($ts->num_ext); ?></h5>
                <h5>Numero Interior: <?php echo e($ts->num_int); ?></h5>
            </div>
        </div>
    </div>



    <div class="panel panel-info">
        <div class="panel-heading"></div>
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <td>
                        <button type="button" class="form-control btn btn-info">
                            Inquilinos
                            <span class="glyphicon glyphicon-user"></span>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="form-control btn btn-info">
                            Contabilidad
                            <span class="glyphicon glyphicon-th-list"></span>
                        </button>
                    <td>
                        <button type="button" class="form-control btn btn-info">
                            Recordatorios
                            <span class="glyphicon glyphicon-time"></span>
                        </button>
                    <td>
                        <button type="button" class="form-control btn btn-info">
                            Mantenimiento
                            <span class="glyphicon glyphicon-wrench"></span>
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Documentos</div>
        <div class="panel-body">
            <h5>Escrituras: </h5>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>