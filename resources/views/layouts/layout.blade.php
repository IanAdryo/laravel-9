<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aprendible - @yield('title')</title>
    <meta name="description" content="@yield('meta-desciption', 'Default meta description')">
</head>
<body>
    @include('partials.navigation')
    @yield('content')
</body>
</html>
