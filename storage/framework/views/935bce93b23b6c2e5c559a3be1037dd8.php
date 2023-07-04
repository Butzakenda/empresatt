

<?php $__env->startSection('contenidorrhh'); ?>
    <a href=" <?php echo e(Route('ciudades.create')); ?> ">
        <button>Crear</button>
    </a>
    <div>
        <table>
            <tr>
                <td>Còdigo</td>
                <td>Ciudad</td>
                <td>Departamento</td>
                <td>Acciones</td>
            </tr>
            
                
            <?php $__empty_1 = true; $__currentLoopData = $ciudades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filaCiudad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td> <?php echo e($filaCiudad->idciudad); ?> </td>
                <td> <?php echo e($filaCiudad->nombre); ?> </td>
                <td> <?php echo e($filaCiudad->dep); ?> </td>
                <td>
                    <a href=" <?php echo e(Route('ciudades.edit',$filaCiudad->idciudad)); ?> ">
                        <button>Editar</button>
                    </a>                    
                </td>
                <td>
                    <a href=" <?php echo e(Route('ciudades.destroy',$filaCiudad->idciudad)); ?> " onclick="return confirm('¿Esta seguro de que desea eliminar la ciudad?')" >
                        <button>Eliminar</button>
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../sesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\empresatt\resources\views/ciudades/index.blade.php ENDPATH**/ ?>