

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Laravel 8 CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('produto.create')); ?>"> Criar novo produto</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Detalhes</th>
            <th width="280px">Ações</th>
        </tr>
        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($produto->id); ?></td>
            <td><?php echo e($produto->descricao); ?></td>
            <td><?php echo e($produto->detail); ?></td>
            <td>
                <form action="<?php echo e(route('produto.destroy',$produto->id)); ?>" method="POST">
                    <a class="btn btn-info" href="<?php echo e(route('produto.show',$produto->id)); ?>">Listar</a>
                    <a class="btn btn-primary" href="<?php echo e(route('produto.edit',$produto->id)); ?>">Editar</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
    <?php echo e($produtos->links()); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('produto.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Henderson\Documents\Crud-php\resources\views/produto/index.blade.php ENDPATH**/ ?>