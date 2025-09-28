<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    @include('partials.styles')
    <title>@yield('title')</title>
    @fluxAppearance
</head>
<body class="bg-[#F3F4F6] h-screen text-black">
    <aside class="w-[300px] bg-white h-screen px-4 shadow-lg pt-8 fixed">
        @include('partials.sidebar')
    </aside>
    <main class="ml-[300px] min-h-screen px-8 pt-8">
        @yield('content')
    </main>
    @fluxScripts
</body>
</html>
