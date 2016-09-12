<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title ? $title . ' - ' : '' }}{{ $config['site_title'] }}</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="{{ $config['base_url'] . $config['css_path'] . 'index.css' }}" />
    </head>

    <body>
        <div class="container">
            <div class="sidebar">
                @include('sidebar')
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>