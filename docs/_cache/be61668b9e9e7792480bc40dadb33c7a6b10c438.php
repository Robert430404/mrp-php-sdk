<!DOCTYPE html>
<html>
    <head>
        <title><?php echo e($title ? $title . ' - ' : ''); ?><?php echo e($config['site_title']); ?></title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e($config['base_url'] . $config['css_path'] . 'reset.css'); ?>" />
        <link rel="stylesheet" href="<?php echo e($config['base_url'] . $config['css_path'] . 'index.css'); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/themes/prism.min.css" />
    </head>

    <body>
        <div class="container">
            <div class="sidebar">
                <?php echo $__env->make('sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

            <div class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/prism.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-json.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-php.min.js"></script>
        <script src="<?php echo e($config['base_url'] . $config['js_path'] . 'index.js'); ?>"></script>
    </body>
</html>