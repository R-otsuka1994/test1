<?php $__env->startSection('title','Person.Delete'); ?>

<?php $__env->startSection('menubar'); ?>
    ##parent-placeholder-b87313ea43ef51d84641be104c943962e1df3977##
    削除ページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="/person/del" method="post">
        <table>
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($form->id); ?>">
            <tr><th>name: </th><td><?php echo e($form->name); ?></td></tr>
            <tr><th>mail: </th><td><?php echo e($form->mail); ?></td></tr>
            <tr><th>age: </th><td><?php echo e($form->age); ?></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright 2020 tuyano.
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xapp\htdocs\test1\resources\views/person/del.blade.php ENDPATH**/ ?>