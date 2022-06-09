@extends('layout')

@section('content')

        <!-- HEADER -->
        <section class="min-height" id="headerID">
            <div class="row temas-interes-header">
                <div class="row">
                    <h1>Temas de Interés</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="left-text bold">Talleres</h3>
                        <div class="row">
                            <div class="col">
                                <div class="horizontal-scroll-wrapper">
                                @if(!empty($talleres))
                                    @foreach($talleres as $taller)
                                        <div data-bs-toggle="modal" data-bs-target="#modal{{ $taller->id }}">
                                            <img src="{{ URL::asset('storage/talleres/'.$taller->portada) }}" alt="">
                                            <p class="bold">{{$taller->nombre}}</p>
                                            <p>{{$taller->fecha}}</p>
                                            <p>{{$taller->lugar}}</p>
                                        </div>
                                    @endforeach
                                @else
                                    <div>
                                        <p class="bold">No hay talleres registrados</p>
                                    </div>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
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

        <!-- MODAL -->
        @foreach($talleres as $taller)
            <div class="modal fade" id="modal{{ $taller->id }}" tabindex="-1" role="dialog" aria-labelledby="foto" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modales" role="document">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-sm-6 col-taller-modal">
                                <span class="span-modal-left-galeria d-flex align-content-center"><img src="{{ URL::asset('storage/talleres/'.$taller->portada) }}" alt=""></span>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="modal-title" id="exampleModalLongTitle" title="{{ $taller->nombre }}">{{ $taller->titulo }}</h5>
                                <div class="descripcion-modal">
                                    <p>{{ $taller->descripcion }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


@endsection