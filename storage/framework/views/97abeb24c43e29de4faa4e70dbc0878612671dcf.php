<?php $__env->startSection('title','Board.index'); ?>

<?php $__env->startSection('menubar'); ?>
    ##parent-placeholder-b87313ea43ef51d84641be104c943962e1df3977##
    ボード・ページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table>
    <tr><th>Data</th></tr>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($item->getData()); ?></td>
    <tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright 2020 tuyano.
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xapp\htdocs\test1\resources\views/board/index.blade.php ENDPATH**/ ?>