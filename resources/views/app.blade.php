<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="grid grid-rows-[auto,1fr] h-[100vh] grid-cols-1">
    @include('layouts.nav')
    <div class=" h-[100%] container-main flex justify-center ">
        @yield('content')
    </div>
</body>

</html>
