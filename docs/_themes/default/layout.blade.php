<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title ? $title . ' - ' : '' }}{{ $config['site_title'] }}</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="{{ $config['base_url'] . $config['css_path'] . 'reset.css' }}" />
        <link rel="stylesheet" href="{{ $config['base_url'] . $config['css_path'] . 'index.css' }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/themes/prism.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/themes/prism-twilight.min.css">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/prism.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-bash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-json.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/components/prism-php.min.js"></script>
        <script src="{{ $config['base_url'] . $config['js_path'] . 'index.js' }}"></script>
    </body>
</html>