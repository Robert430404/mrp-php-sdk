<html>
<head>
    <title>{{ $title ? $title . ' - ' : '' }}{{ $config['site_title'] }}</title>
    <style>

    </style>
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>