<!DOCTYPE html>
<html>
    <head>
        <title><?php echo e($title ? $title . ' - ' : ''); ?><?php echo e($config['site_title']); ?></title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e($config['base_url'] . $config['css_path'] . 'index.css'); ?>" />
        <script type="text/javascript" src="<?php echo e($config['base_url'] . $config['js_path'] . 'index.js'); ?>"></script>
    </head>

    <body>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    </body>
</html>