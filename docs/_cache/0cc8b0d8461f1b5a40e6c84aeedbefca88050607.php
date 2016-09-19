<h2 class="sidebar-title">Endpoints</h2>
<ul class="endpoints">
    <li class="endpoint-title">
        <a href="<?php echo e($config['base_url']); ?>">Overview</a>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        News
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'news'); ?>">/v2/news/</a>
            </li>
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'news/single'); ?>">/v2/news/?NewsId={id}</a>
            </li>
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'news/views'); ?>">/v2/news/views/</a>
            </li>
        </ul>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        Schedules/Results
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'schedules'); ?>">/v2/schedules/</a>
            </li>
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'schedules/years'); ?>">/v2/schedules/years/</a>
            </li>
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'schedules/events'); ?>">/v2/schedules/events/</a>
            </li>
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'schedules/event'); ?>">/v2/schedules/events/?EventId={id}</a>
            </li>
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'schedules/results'); ?>">/v2/schedules/results/</a>
            </li>
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'schedules/lineups'); ?>">/v2/schedules/lineups/</a>
            </li>
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'schedules/feed'); ?>">/v2/schedules/results/feed/</a>
            </li>
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'schedules/driver-stats'); ?>">/v2/schedules/driverStats/</a>
            </li>
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'schedules/driver-passes'); ?>">/v2/schedules/driverPasses/</a>
            </li>
            <li class="endpoint">
                <a href="<?php echo e($config['base_url'] . 'schedules/entry-list'); ?>">/v2/schedules/entryList/</a>
            </li>
        </ul>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        Points
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="">Link Goes Here</a>
            </li>
        </ul>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        Galleries
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="">Link Goes Here</a>
            </li>
        </ul>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        Media
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="">Link Goes Here</a>
            </li>
        </ul>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        Crew
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="">Link Goes Here</a>
            </li>
        </ul>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        Links
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="">Link Goes Here</a>
            </li>
        </ul>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        Ads
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="">Link Goes Here</a>
            </li>
        </ul>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        Drivers
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="">Link Goes Here</a>
            </li>
        </ul>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        Classes
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="">Link Goes Here</a>
            </li>
        </ul>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        Stats
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="">Link Goes Here</a>
            </li>
        </ul>
    </li>
    <li class="endpoint-title" onclick="showLinks(this)">
        Staff
        <ul class="endpoint-menu">
            <li class="endpoint">
                <a href="">Link Goes Here</a>
            </li>
        </ul>
    </li>
</ul>