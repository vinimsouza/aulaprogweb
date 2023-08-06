<?php $__env->startSection('content'); ?>
<table class="table">
    <h1> LISTAGEM DE AULAS </h1>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Materia</th>
        <th scope="col">Ano Atual</th>
        <th scope="col">Notas</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <th>Vinícius Souza</th>
        <th>Programção Web</th>
        <th>2023</th>
        <th>7</th>

      </tr>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\projetoaula\aulaweb\resources\views/aulas/index.blade.php ENDPATH**/ ?>