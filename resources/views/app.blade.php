<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel+React</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/ts/App.tsx'])
</head>

<body>
    <div id="app"></div>
</body>

</html>