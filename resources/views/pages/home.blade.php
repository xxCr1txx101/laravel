<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Laravel Demo</title>
</head>
<body>
    <h1>Laravel Demo</h1>
    Home | <a href="{{url('/profile')}}">Profile</a> | <a href="{{url('/about')}}">About</a>
</body>
</html>