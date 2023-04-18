<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('/public/css/bootstrap/bootstrap.css')}}" type="text/css">
</head>
<body>

    <div class="container-full">
        @include('web.header')
        <div class="row">
            @include('web.sidebar')
 
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script src="{{asset('/public/js/bootstrap/bootstrap.min.js')}}"></script>
</html>