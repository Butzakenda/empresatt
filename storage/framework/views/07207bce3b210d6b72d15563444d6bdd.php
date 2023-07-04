

<?php $__env->startSection('contenidorrhh'); ?>
    <a href=" <?php echo e(route('departamentos.create')); ?> ">
        <button>Crear</button>
    </a>
    <div>
        <table>
            <tr>
                <td>Còdigo</td>
                <td>Nombre</td>
                <td>Acciones</td>
            </tr>
            <?php $__empty_1 = true; $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fila): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td> <?php echo e($fila->iddepartamento); ?> </td>
                    <td> <?php echo e($fila->nombre); ?> </td>
                    <td>
                        <a href=" <?php echo e(Route('departamentos.edit',$fila->iddepartamento)); ?> ">
                            <button>Editar</button>
                        </a>                    
                    </td>
                    <td>
                        <a href="<?php echo e(Route('departamentos.destroy',$fila->iddepartamento)); ?> " onclick="return confirm('¿Esta seguro de que desea eliminar el departamento?')">
                            <button>Eliminar</button>
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../sesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\empresatt\resources\views/departamentos/index.blade.php ENDPATH**/ ?>