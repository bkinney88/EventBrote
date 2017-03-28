<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eventbrote</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
</head>
<body>
    @include('layouts.partials._nav')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
