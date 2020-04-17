<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    @include('includes.header')
    
    @yield('main')

    @yield('container')

</body>
</html>