<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
    <title>Inicio - Punto Violeta</title>
</head>

<body>

    <section class="container-fluid min-height">

        <!-- TOP NAV -->
        <nav class="nav">
            <svg class="menu-ham" width="26" height="23" viewBox="0 0 26 23" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" onclick="mostrarMenu()">
                <path d="M26 4.6V0H0V4.6H26ZM26 13.8V9.2H0V13.8H26ZM26 23V18.4H0V23H26Z" fill="currentcolor"/>
            </svg>
            <a class="logo-nav" href="/"><span>PUNTO VIOLETA</span></a>
            <div>
                <ul class="nav-list">
                    <li><a href="/temas_interes">Temas de interés</a></li>
                    <li><a href="/nosotras">Nosotras</a></li>
                    <li><a href="/denuncias">Te acompañamos a denunciar</a></li>
                    <li><a href="/derechos/Documentación">Derechos</a></li>
                    <li><a href="/redes_comunitarias">Redes comunitarias</a></li>
                    <li><a href="/galeria/Fotografía">Galería</a></li>
                </ul>  
                <div class="nav-list-bg" onclick="mostrarMenu()"></div>
                </div>              
            </div>
            <span>
                <a href="https://www.instagram.com/puntovioletaret/"><img src="{{ URL::asset('/imgs/svg/instagram_icon.svg') }}"></a>
            </span>
        </nav>
        <!-- TOP NAV -->

        @yield('content')

        <!-- FOTTER -->
        <footer class="row footer">
            <div class="col-sm-3 left-text">
                <p>Punto Violeta - RET INTERNACIONAL</p>
                <p>200 mts al sur del Instituto México, Los Yoses, Montes de Oca.</p>
                <p>San José, Costa Rica</p>
                <p>puntovioletaret@gmail.com</p>
                <p>(506) 6452-9206/4035-6913</p>
            </div>
            <div class="col-sm-3 icons-footer">
                <img src="{{ URL::asset('/imgs/svg/icon_punto-violeta.svg') }}" alt="Logo Punto Violeta">
            </div>
            <div class="col-sm-3 icons-footer">
                <img src="{{ URL::asset('/imgs/svg/icon_ret.svg') }}" alt="Logo RET">
            </div> 
            <div class="col-sm-3 right-text">
                <p>©2021</p>
                <p>Todos los derechos reservados</p>
                <p>By Willy Lara Campos</p>
                <p>By Ronald Chaves González</p>
            </div>
        </footer>
        <!-- FOTTER -->

    </section>

    <script src="{{ URL::asset('/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>

</body>

</html>