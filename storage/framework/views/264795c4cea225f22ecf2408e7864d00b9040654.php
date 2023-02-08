<?php $__env->startSection('title','Board.Add'); ?>

<?php $__env->startSection('menubar'); ?>
    ##parent-placeholder-b87313ea43ef51d84641be104c943962e1df3977##
    投稿ページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="/board/add" method="post">
    <table>
        <?php echo csrf_field(); ?>
        <tr><th>person id: </th><td><input type="number" name="person_id"></td></tr>
        <tr><th>title: </th><td><input type="text" name="title"></td></tr>
        <tr><th>message: </th><td><input type="text" name="message"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright 2020 tuyano.
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xapp\htdocs\test1\resources\views/board/add.blade.php ENDPATH**/ ?>