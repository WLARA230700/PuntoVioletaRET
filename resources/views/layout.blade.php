<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
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
                    <li><a href="/derechos/Documentación">Derechos</a></li>
                    <li><a href="/redes_comunitarias">Redes comunitarias</a></li>
                    <li><a href="/colaboradores">Colaboradores</a></li>
                    <li><a href="/galeria">Galería</a></li>
                </ul>  
                <div class="nav-list-bg" onclick="mostrarMenu()"></div>
                </div>              
            </div>
            <span>
                <a href="#"><img src="./imgs/svg/instagram_icon.svg" alt="instagram_icon"></a>
            </span>
        </nav>
        <!-- TOP NAV -->

        @yield('content')

        <!-- FOTTER -->
        <footer class="row footer">
            <div class="col-sm left-text">
                <p>©2021</p>
                <p>Todos los derechos reservados</p>
            </div>
            <div class="col-sm icons-footer">
                <img src="./imgs/svg/icon_punto-violeta.svg" alt="Logo Punto Violeta">
            </div>
            <div class="col-sm icons-footer">
                <img src="./imgs/svg/icon_ret.svg" alt="Logo RET">
            </div> 
            <div class="col-sm right-text">
                <p>By Willy Lara Campos</p>
                <p>By Ronald Chaves González</p>
                <p>By Benjamín Álvarez Rodríguez</p>
            </div>
        </footer>
        <!-- FOTTER -->

    </section>

    <script src="../js/main.js"></script>

</body>

</html>