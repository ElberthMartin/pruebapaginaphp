<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <!-- Agrega los enlaces a los archivos CSS de Bootstrap si los estás utilizando -->
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Mi Tienda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <!-- Ruta para registrarse -->
                <a class="nav-link" href="{{ route('showForm') }}">Registrarse</a>
 </li>
            <li class="nav-item">
                <!-- Ruta para listar -->
                <a class="nav-link" href="{{ route('listar') }}" target="_blank">Listar</a>
            </li>
        </ul>
    </div>
</nav>



    <!-- Contenido principal -->
    <div class="container mt-4">
        <h1>Bienvenido a Mi Tienda</h1>
        <p>Encuentra los mejores productos en nuestra tienda en línea.</p>
        <!-- Más contenido y descripciones aquí -->
    </div>
</body>
</html>
