<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <!-- Aquí puedes incluir la navegación, el logo, etc. -->
    </header>

    <main>
        <div class="container">
            @yield('contenido')
        </div>
    </main>

    <footer>
        <!-- Aquí puedes incluir el pie de página -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
