<!DOCTYPE html>
<html>
    <head>
        <title><?php echo e($title ? $title . ' - ' : ''); ?><?php echo e($config['site_title']); ?></title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e($config['base_url'] . $config['css_path'] . 'index.css'); ?>" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/styles/default.min.css" />
        <script type="text/javascript" src="<?php echo e($config['base_url'] . $config['js_path'] . 'index.js'); ?>"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/highlight.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="sidebar">
                <ul class="endpoints">
                    <li class="endpoint-title">
                        News
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                    <li class="endpoint-title">
                        Schedules/Results
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                    <li class="endpoint-title">
                        Points
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                    <li class="endpoint-title">
                        Galleries
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                    <li class="endpoint-title">
                        Media
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                    <li class="endpoint-title">
                        Crew
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                    <li class="endpoint-title">
                        Links
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                    <li class="endpoint-title">
                        Ads
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                    <li class="endpoint-title">
                        Drivers
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                    <li class="endpoint-title">
                        Classes
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                    <li class="endpoint-title">
                        Stats
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                    <li class="endpoint-title">
                        Staff
                        <ul class="endpoint-menu">
                            <li class="endpoint">
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </body>
</html>