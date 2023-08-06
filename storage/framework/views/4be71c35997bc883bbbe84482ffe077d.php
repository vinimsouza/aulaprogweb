<?php $__env->startSection('content'); ?>
 <div class="container">
    <h1> Página de Registro</h1>
    <hr>
    <form action="<?php echo e(route ('aulas-store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome...">
        </div>
        <div class="form-group">
            <label for="nome">Materia:</label>
            <input type="text" class="form-control" name="materia" placeholder="Digite a materia cursada...">
        </div>
        <div class="form-group">
            <label for="nome">Ano:</label>
            <input type="date" class="form-control" name="ano_atual" placeholder="Digite o Ano Atual...">
        </div>
        <div class="form-group">
            <label for="nome">Nota:</label>
            <input type="number" class="form-control" name="notas" placeholder="Digite a Nota...">
        </div>
        <br>
        <div class="form group">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetoaula\aulaweb\resources\views/aulas/create.blade.php ENDPATH**/ ?>