<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Minha Aplicação')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    @yield('scripts')
</body>
</html>