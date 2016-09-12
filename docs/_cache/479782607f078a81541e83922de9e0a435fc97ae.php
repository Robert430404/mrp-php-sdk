<html>
<head>
    <title><?php echo e($title ? $title . ' - ' : ''); ?><?php echo e($config['site_title']); ?></title>
    <style>

    </style>
</head>
<body>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html>