<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Galería - Punto Violeta</title>
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
        <section class="min-height cards" id="headerID">
            <h1>Galería</h1>
            <div class="row container-cards">
                <div class="col-sm-3 ">
                    <div class="row select-box">
                        <div id="txt-select-box">
                            <p>Fotografías</p><img src="../imgs/svg/icon_dropdown.svg"
                                alt="icon_dropdown">
                        </div>
                        <div class="options-container">
                            <div class="col option"><a href="#" class="btn-repo">Fotografías</a></div>
                            <div class="col option"><a href="#" class="btn-repo">Video</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <h2>Fotografías</h2>
                    </div>
                    <div class="row">
                        <div class="card-galeria" data-bs-toggle="modal" data-bs-target="#modalGaleria">
                            <img src="../imgs/fotografia_galeria.png" alt="Fotografía">
                            <p class="card-p">Título del documento</p>
                        </div>
                        <div class="card-galeria">
                            <img src="../imgs/fotografia_galeria.png" alt="Fotografía">
                            <p class="card-p">Título del documento con una extensión larga </p>
                        </div>
                        <div class="card-galeria">
                            <img src="../imgs/fotografia_galeria.png" alt="Fotografía">
                            <p class="card-p">Título del documento con una extensión exageradamente larga</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="btn-up">
            <a href="#headerID"><img src="../imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->

        <!-- MODAL -->
        <div class="modal fade" id="modalGaleria" tabindex="-1" role="dialog"
            aria-labelledby="foto" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modales" role="document">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-sm-6 col-imagen-modal">
                            <span class="span-modal-left-galeria d-flex align-content-center flex-wrap"><img src="../imgs/fotografia_galeria.png" alt=""></span>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="modal-title" id="exampleModalLongTitle">Imagen 1</h5>
                            <div class="descripcion-modal">
                                <p>Descripción del documento
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL -->

        
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