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
    <!--Fin del Loader-->
    <!--Menú Superior-->
    <nav id="navsup" class="navbar">
        <a class="navicon navbar-brand" href="#">
            <img loading="lazy" class="float-left" src="{{ asset('img/LogoLargo.png') }}" alt="Space Entertainment">
        </a>
        <!--Primer Buscador-->
        <form class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar tus series/peliculas favoritas"
                    aria-label="Buscar tus series/peliculas favoritas" aria-describedby="txtBuscar">
                <div class="input-group-prepend">
                    <select class="custom-select" id="selBuscar">
                        <option value="">N/A</option>
                        <option hidden selected>Buscar por...</option>
                        <option value="1">Anime</option>
                        <option value="2">Película</option>
                        <option value="3">Serie</option>
                    </select>
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
    <!--Fin del Menú Superior-->
    <!--Menú Superior-->
    <div id="navlat">
        <a href="#" class="btnmenu">
            <img loading="lazy" class="float-left" src="{{ asset('img/LogoCorto.png') }}" alt="Space Entertainment">
            <i class="material-icons">menu</i>
        </a>
        <a href="#" class="btnmenuhor">Menú<i class="material-icons">menu</i></a>
        <ul class="menu">
            <li>
                <a href="#">
                    <p><i class="izquierda material-icons">home</i>Inicio</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <p>
                        <i class="izquierda material-icons">description</i>
                        Animes
                        <i class="derecha material-icons">expand_more</i>
                    </p>
                </a>
                <ul>
                    <li><a href="#">
                            <p>Item 1</p>
                        </a>
                    </li>
                    <li><a href="#">
                            <p>Item 2</p>
                        </a>
                    </li>
                    <li><a href="#">
                            <p>Item 3</p>
                        </a>
                    </li>
                    <li><a href="#">
                            <p>Item 4</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <p><i class="izquierda material-icons">description</i>Peliculas</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <p><i class="izquierda material-icons">description</i>Series</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <p>
                        <i class="izquierda material-icons">face</i>
                        Contactenos
                        <i class="derecha material-icons">expand_more</i>
                    </p>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <p>Item 1</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Item 2</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Item 3</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Item 4</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="buscador">
                <!--Segundo Buscador-->
                <form class="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar tus series/peliculas favoritas"
                            aria-label="Buscar tus series/peliculas favoritas" aria-describedby="txtBuscar">
                        <div class="input-group-append">
                            <select class="custom-select" id="selBuscar">
                                <option value="">N/A</option>
                                <option hidden selected>Buscar por...</option>
                                <option value="1">Anime</option>
                                <option value="2">Película</option>
                                <option value="3">Serie</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <button type="button" id="btnbuscar" class="btn btn-primary">Buscar
                                <i class="material-icons">
                                    search
                                </i>
                            </button>
                        </div>
                    </div>
                </form>
            </li>
        </ul>
    </div>
    <!--Fin del Menú Inferior-->
    @yield("content")
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
