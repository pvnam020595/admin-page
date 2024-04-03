<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="{{ url('public/src/css/bootstrap.css') }}">
 <link rel="stylesheet" href="{{ url('public/src/css/bootstrap-icons.css') }}">
 {{-- <link rel="stylesheet" href="{{ url('public/src/') }}"> --}}
</head>

<body>
 <div class="container">
  @yield('login')
  @yield('register')
 </div>
 <script src="{{ url('public/src/js/bootstrap.bundle.js') }}"></script>
 <script src="{{ url('public/src/js/bootstrap-icons.bundle.js') }}"></script>
 {{-- <script src="{{ url('public/src/vendors-node_modules_bootstrap-icons_font_bootstrap-icons_scss-node_modules_bootstrap_dist_js-ca060b.js') }}"></script> --}}
</body>

</html>
