<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title ? $title . ' - ' : '' }}{{ $config['site_title'] }}</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="{{ $config['base_url'] . $config['css_path'] . 'index.css' }}" />
        <script type="text/javascript" src="{{ $config['base_url'] . $config['js_path'] . 'index.js' }}"></script>
    </head>

    <body>

    <div class="container">
        @yield('content')
    </div>

    </body>
</html>