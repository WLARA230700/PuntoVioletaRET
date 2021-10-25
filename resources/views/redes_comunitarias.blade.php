<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Redes Comunitarias - Punto Violeta</title>
</head>

<body>

    <section class="container-fluid min-height">

        <!-- TOP NAV -->
        <nav class="nav">
            <svg class="menu-ham" width="26" height="23" viewBox="0 0 26 23" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" onclick="mostrarMenu()">
                <path d="M26 4.6V0H0V4.6H26ZM26 13.8V9.2H0V13.8H26ZM26 23V18.4H0V23H26Z" fill="currentcolor"/>
            </svg>
            <a class="logo-nav" href="../index.html"><span>PUNTO VIOLETA</span></a>
            <div>
                <ul class="nav-list">
                    <li><a href="./temas_interes.html">Temas de interés</a></li>
                    <li><a href="./derechos.html">Derechos</a></li>
                    <li><a href="./redes_comunitarias.html">Redes comunitarias</a></li>
                    <li><a href="./colaboradores.html">Colaboradores</a></li>
                    <li><a href="./galeria.html">Galería</a></li>
                </ul>  
                <div class="nav-list-bg" onclick="mostrarMenu()"></div>
                </div>              
            </div>
            <span>
                <a href="#"><img src="../imgs/svg/instagram_icon.svg" alt="instagram_icon"></a>
            </span>
        </nav>
        <!-- TOP NAV -->

        <!-- HEADER -->
        <section class="min-height" id="headerID">
            <div class="row redes-comunitarias-header">
                <div class="row">
                    <h1>Redes comunitarias</h1>
                    <h2>¿Quiénes somos?</h2>
                    <p>Lorem ipsum dolor sit amet, cum sapientem honestatis ea, verear labores feugait sea in, cu justo
                        suscipiantur mel. Mel facilis sensibus petentium in, ne ignota mollis suavitate mei, modus reque
                        signiferumque in cum. Ut molestiae complectitur eam, partiendo necessitatibus ad vix. Putent
                        semper nusquam ...</p>
                    <h2>¿Dónde estamos?</h2>
                    <p>Lorem ipsum dolor sit amet, cum sapientem honestatis ea, verear labores feugait sea in, cu justo
                        suscipiantur mel. Mel facilis sensibus petentium in, ne ignota mollis suavitate mei, modus reque
                        signiferumque in cum. Ut molestiae complectitur eam, partiendo necessitatibus ad vix. Putent
                        semper nusquam ...</p>
                </div>

                <div class="row card-iniciativas">
                    <h2>Iniciativas</h2>
                    <div class="col-sm-6">
                        <div>
                            <img src="../imgs/svg/icon_pointer.svg" alt="icon_pointer">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamcorper a lacus vestibulum sed arcu. </p>
                        </div>
                        <div>
                            <img src="../imgs/svg/icon_user_dialog.svg" alt="icon_user_dialog">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamcorper a lacus vestibulum sed arcu. </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <img src="../imgs/svg/icon_prisma.svg" alt="icon_prisma">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamcorper a lacus vestibulum sed arcu. </p>
                        </div>
                        <div>
                            <img src="../imgs/svg/icon_house.svg" alt="icon_house">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamcorper a lacus vestibulum sed arcu. </p>
                        </div>
                    </div>
                </div>

            </div>

            

        </section>
        
        <div class="btn-up">
            <a href="#headerID"><img src="../imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->


        <!-- FOTTER -->
        <footer class="row footer">
            <div class="col-sm left-text">
                <p>©2021</p>
                <p>Todos los derechos reservados</p>
            </div>
            <div class="col-sm icons-footer">
                <img src="../imgs/svg/icon_punto-violeta.svg" alt="Logo Punto Violeta">
            </div>
            <div class="col-sm icons-footer">
                <img src="../imgs/svg/icon_ret.svg" alt="Logo RET">
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