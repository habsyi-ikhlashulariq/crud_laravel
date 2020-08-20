<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
<h2>Menu : <a href="/"> Home</a> || <a href="/profile">Menu Profile</a>|| <a href="/course">Course</a></h2><hr>    
    @yield('content')
</body>
</html>