<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('auth.auth_partials.styles')
    <title>@yield('title')</title>
</head>
<body>
    <div class="flex w-screen h-screen">
        <div class="w-full h-full flex flex-col items-center justify-center md:w-[500px] md:m-auto">
            @yield('auth_container')
        </div>
    </div>
</body>
</html>