<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>
 this is page index
 {{Auth::user()}}
 {{Auth::check()}}
 <?php print_r(Session::all()); ?>
</body>
</html>