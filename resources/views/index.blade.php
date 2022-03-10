@extends('layout')

@section('content')
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
@endsection