<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('app.dashboard') }}</title>
    <link rel="stylesheet" href="{{ url('src/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('src/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ url('src/css/custom.css') }}">
</head>

<body>
    <div class="container">
        @yield('login')
        {{-- @yield('register') --}}
    </div>
    <script src="{{ url('src/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
