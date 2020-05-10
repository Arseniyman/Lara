<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield("tokenMeta")
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>@yield("title")</title>
</head>
<body>
    @include("includes.header")
    
    @yield("main")

    @yield("container")
    
    @yield("scriptjs")
</body>
</html>