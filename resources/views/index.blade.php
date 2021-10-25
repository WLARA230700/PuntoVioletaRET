<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Inicio - Punto Violeta</title>
</head>

<body>

    <section class="container-fluid min-height">

        <!-- TOP NAV -->
        <nav class="nav">
            <svg class="menu-ham" width="26" height="23" viewBox="0 0 26 23" fill="currentcolor" xmlns="http://www.w3.org/2000/svg" onclick="mostrarMenu()">
                <path d="M26 4.6V0H0V4.6H26ZM26 13.8V9.2H0V13.8H26ZM26 23V18.4H0V23H26Z" fill="currentcolor"/>
            </svg>
            <a class="logo-nav" href="./index.html"><span>PUNTO VIOLETA</span></a>
            <div>
                <ul class="nav-list">
                    <li><a href="./html/temas_interes.html">Temas de interés</a></li>
                    <li><a href="./html/derechos.html">Derechos</a></li>
                    <li><a href="./html/redes_comunitarias.html">Redes comunitarias</a></li>
                    <li><a href="./html/colaboradores.html">Colaboradores</a></li>
                    <li><a href="./html/galeria.html">Galería</a></li>
                </ul>  
                <div class="nav-list-bg" onclick="mostrarMenu()"></div>
                </div>              
            </div>
            <span>
                <a href="#"><img src="./imgs/svg/instagram_icon.svg" alt="instagram_icon"></a>
            </span>
        </nav>
        <!-- TOP NAV -->

        <!-- HEADER -->
        <section class="min-height header"  id="headerID">
            <div>
                <h2>JUNTAS RESISTIMOS, JUNTAS CRECEMOS</h2>
                <h1>Punto Violeta</h1>
            </div>
        </section>
        <div class="btn-up">
            <a href="#headerID"><img src="./imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->

        <!-- QUIENES SOMOS -->
        <section class="min-height quienes-somos">
            <div class="row">
                <div class="col-12">
                    <h3>Quienes somos</h3>
                    <h2>¿Sabes qué es Punto Violeta?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="./imgs/svg/point_icon.svg" alt="point icon">
                    <p>Somos una iniciativa impulsada por RET Internacional, donde promovemos la prevención de la
                        violencia hacia las mujeres y población LGTBI+, migrantes solicitantes de refugio y refugiadas
                        que se encuentran en Costa Rica.</p>
                </div>
                <div class="col-sm-4">
                    <img src="./imgs/svg/people_icon.svg" alt="people icon">
                    <p>A través de la promoción de espacios de encuentro e intercambio de saberes desde los distintos
                        proyectos ejecutados por nuestra organización, compartimos información y herramientas que
                        erradiquen la violencia basada en género y fortalezcan el conocimiento y reivindicación de los
                        derechos sexuales y reproductivos.</p>
                </div>
                <div class="col-sm-4">
                    <img src="./imgs/svg/calendar_icon.svg" alt="calendar icon">
                    <p>Ofrecemos espacios de encuentro para compartir y reflexionar en torno a la violencia, derechos
                        sexuales y empleabilidad desde una propuesta creativa, inclusiva y respetuosa.
                        En este espacio abrazamos a todos los géneros y todas las edades.</p>
                </div>
            </div>
        </section>
        <!-- QUIENES SOMOS -->

        <!-- TESTIMONIOS -->
        <section class="min-height testimonios">
            <div class="row">
                <h2>Testimonios</h2>
            </div>
            <div class="row">
                <div class="col-1">
                    <span>
                        <img src="./imgs/svg/previous_icon.svg" alt="previous">
                    </span>
                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-4 testimonios-laterales">
                            <span><img src="./imgs/testimonio1.png" alt="testimonio1"></span>
                            <p class="cita">“Porque resistir también es informarse”</p>
                            <div class="row">
                                <p>Managing Director</p>
                            </div>
                        </div>
                        <div class="col-4 testimonios">
                            <span><img src="./imgs/testimonio2.png" alt="testimonio2"></span>
                            <p class="cita">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris feugiat ornare metus, eget congue magna condimentum vel. Quisque commodo”</p>
                            <div class="row">
                                <p>Designer</p>
                            </div>
                        </div>
                        <div class="col-4 testimonios-laterales">
                            <span><img src="./imgs/testimonio3.png" alt="testimonio3"></span>
                            <p class="cita">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dignissim ullamcorper commodo.”</p>
                            <div class="row">
                                <p>CEO and Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <span>
                        <img src="./imgs/svg/next_icon.svg" alt="next">
                    </span>
                </div>
            </div>
        </section>
        <!-- TESTIMONIOS -->

        <!-- CONTACTO -->
        <section class="min-height contacto">
            <div class="row">
                <h2>Contacto</h2>
                <h3>¿Tienes alguna consulta?</h3>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <form action="">
                        <input type="text" placeholder="Nombre completo *">
                        <input type="email" placeholder="Correo electrónico *">
                        <input type="text" placeholder="Asunto *">
                        <textarea name="" id="" cols="30" rows="8" placeholder="Mensaje *"></textarea>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div class="row card-contacto">
                        <div class="row">
                            <span><img src="./imgs/svg/telefono_icon.svg" alt="telefono"></span>
                            <p>+(506) 8591-8387</p>
                        </div>
                        <div class="row">
                            <span><img src="./imgs/svg/email_icon.svg" alt="email"></span>
                            <p>prevenciondelaviolenciaret@gmail.com</p>
                        </div>
                    </div>
                    <div class="row card-ubicacion">
                        <h3>¿Dónde nos ubicamos?</h3>
                        <span><a href="https://www.google.com/maps/place/RET+AMERICAS/@9.9290733,-84.0590538,19z/data=!4m5!3m4!1s0x8fa0e37865555555:0xdde26f48d162e361!8m2!3d9.9296083!4d-84.0596895?hl=es"><img src="./imgs/ubicacion_googleMaps.png" alt="Ubicación"></a></span>
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTACTO -->

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

    <script src="./js/main.js"></script>

</body>

</html>