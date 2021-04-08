<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Entertainment - @yield("title")</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!--Loader-->
    <div class="container_Loader">
        <div class="loader"></div>
    </div>
    <nav id="navsup" class="navbar">
        <a class="navicon navbar-brand" href="#">
            <img class="float-left" loading="lazy" src="{{ asset('img/icons/logo_largo.png') }}"
                alt="Space Entertainment">
        </a>
        <form class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar tus series/peliculas favoritas"
                    aria-label="Buscar tus series/peliculas favoritas" aria-describedby="txtBuscar">
                <div class="dropdown input-group-prepend">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dmnBuscar"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Buscar por...
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dmnBuscar">
                        <a class="dropdown-item" href="#">Serie</a>
                        <a class="dropdown-item" href="#">Película</a>
                        <a class="dropdown-item" href="#">Anime</a>
                    </div>
                </div>
                <div class="input-group-append">
                    <button type="button" id="btnbuscar" class="btn btn-primary">Buscar
                        <i class="material-icons">
                            search
                        </i>
                    </button>
                </div>
            </div>
        </form>
    </nav>
    <!--Fin del Loader-->
    @yield("content")
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
