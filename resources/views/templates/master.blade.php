<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    {{-- hoja de estilo css --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    @yield('titulo')
</head>

<body>
    {{-- NAVBAR --}}
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ asset('/') }}">Home</a>
            <a class="navbar-brand material-symbols-outlined" href="{{ asset('/login') }}">account_circle</a>
        </div>
    </nav>
    {{-- CONTENIDO PRINCIPAL --}}
    @yield('contenido-principal')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>