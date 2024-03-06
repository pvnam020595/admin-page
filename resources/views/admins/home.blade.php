<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="{{ url('public/src/main.css') }}">
 <link rel="stylesheet" href="{{ url('public/src/vendors-node_modules_bootstrap_dist_js_bootstrap_esm_js-node_modules_bootstrap-icons_font_boo-87d249.css') }}">
</head>

<body>
 <div class="container">
  @yield('login')
  @yield('register')
 </div>
 <script src="{{ url('public/src/main.js') }}"></script>
 <script src="{{ url('public/src/vendors-node_modules_bootstrap-icons_font_bootstrap-icons_scss-node_modules_bootstrap_dist_js-ca060b.js') }}"></script>
</body>

</html>
