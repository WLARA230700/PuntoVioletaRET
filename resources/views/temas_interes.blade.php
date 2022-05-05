@extends('layout')

@section('content')

        <!-- HEADER -->
        <section class="min-height" id="headerID">
            <div class="row temas-interes-header">
                <div class="row">
                    <h1>Temas de Interés</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <h3 class="left-text bold">Eventos</h3>
                        <div class="row">
                            <div class="col">
                                <div class="horizontal-scroll-wrapper">
                                    <div>
                                        <img src="{{ URL::asset('storage/imagenes/imagen-Fotografía1636419148.jpg') }}" alt="">
                                        <p class="bold">Nombre de evento</p>
                                        <p>4 de Mayo de 2022</p>
                                        <p>Salón de eventos Pedregal</p>
                                    </div>
                                    <div>
                                        <img src="{{ URL::asset('storage/imagenes/imagen-Fotografía1636419148.jpg') }}" alt="">
                                        <p class="bold">Nombre de evento muy largo para verse completo</p>
                                        <p>Fecha del evento</p>
                                        <p>Lugar</p>
                                    </div>
                                    <div>
                                        <img src="{{ URL::asset('storage/imagenes/imagen-Fotografía1636419148.jpg') }}" alt="">
                                        <p class="bold">Nombre de evento</p>
                                        <p>Fecha del evento</p>
                                        <p>Lugar</p>
                                    </div>
                                    <div>
                                        <img src="{{ URL::asset('storage/imagenes/imagen-Fotografía1636419148.jpg') }}" alt="">
                                        <p class="bold">Nombre de evento</p>
                                        <p>Fecha del evento</p>
                                        <p>Lugar</p>
                                    </div>
                                    <div>
                                        <img src="{{ URL::asset('storage/imagenes/imagen-Fotografía1636419148.jpg') }}" alt="">
                                        <p class="bold">Nombre de evento</p>
                                        <p>Fecha del evento</p>
                                        <p>Lugar</p>
                                    </div>
                                    <div>
                                        <img src="{{ URL::asset('storage/imagenes/imagen-Fotografía1636419148.jpg') }}" alt="">
                                        <p class="bold">Nombre de evento</p>
                                        <p>Fecha del evento</p>
                                        <p>Lugar</p>
                                    </div>
                                    <div>
                                        <img src="{{ URL::asset('storage/imagenes/imagen-Fotografía1636419148.jpg') }}" alt="">
                                        <p class="bold">Nombre de evento</p>
                                        <p>Fecha del evento</p>
                                        <p>Lugar</p>
                                    </div>
                                    <div>
                                        <img src="{{ URL::asset('storage/imagenes/imagen-Fotografía1636419148.jpg') }}" alt="">
                                        <p class="bold">Nombre de evento</p>
                                        <p>Fecha del evento</p>
                                        <p>Lugar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h3 class="left-text bold">Solicitudes de Refugio</h3>
                        <div class="row cards-temas-interes">
                            <div class="col-sm-6">
                                <div>
                                    <h2>¿Cómo solicitar refugio en Costa Rica?</h2>

                                    <div>
                                        <p>- Puede hacerlo en los puestos fronterizos habilitados para el ingreso internacional de personas al país.</p>
                                        <p>- Puede sacar su cita para solicitar refugio llamando al número 1311. La persona que le atienda le indicará fecha y hora para presentarse a la Unidad de Refugio. Puede hacerlo desde cualquier telefónica, recuerde  tener saldo disponible para realizar la llamada y un correo electrónico para recibir el comprobante.</p>
                                        <p>- Si usted ya se encuentra en el territorio nacional, puede sacar su cita ingresando al sitio oficial www.migracion.go.cr en el menú “Citas trámites migratorios”.</p>
                                        <p>- *Las personas perseguidas por orientación, identidad o violencia de género pueden solicitar refugio en Costa Rica.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <h2>Datos estadísticos</h2>

                                    <div>
                                        <p>- De Mujeres, personas menores de edad y personas trans.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            
        </section>
        <div class="btn-up">
            <a href="#headerID"><img src="../imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->


@endsection