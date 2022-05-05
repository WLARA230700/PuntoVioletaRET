@extends('layout')

@section('content')

<?php
    $tiposDerecho = array(
        'En Costa Rica, tanto las personas refugiadas como aquellas personas solicitantes de refugio tienen derecho a tener un documento que las identifique y que acredite y regularice su estancia en el país.',

        'Las personas refugiadas y solicitantes de refugio tienen derecho a acceder al sistema de seguridad, que corresponde a la Caja Costarricense del Seguro Social, también conocida como “La Caja”.
        Para ser atendido o atendida, es necesario afiliarse. Una vez se tenga la afiliación, se tiene derecho a recibir atención médica gratuita, ya sea en los EBAIS, hospitales o clínicas.
        Si no se cuenta con un seguro, igualmente podrá ser atendido o atendida en caso de una situación de emergencia. Posteriormente se le cobrará el servicio ofrecido.
        Para recibir atención es necesario estar asegurado o asegurada y portar su documento de identidad.
        En el caso de niños y niñas o mujeres embarazadas hasta los tres meses de lactancia, pueden recibir atención de los servicios de salud.',

        'La educación en Costa Rica es gratuita y obligatoria. 
        Las personas refugiadas tendrán derecho al mismo trato que reciben los nacionales respecto a la Educación General Básica, desde primaria hasta el tercer año de secundaria.',

        'El derecho internacional de los derechos humanos reconoce el derecho de toda persona a un nivel de vida adecuado, incluida una vivienda adecuada.',

        'En Costa Rica, toda persona refugiada tiene derecho a trabajar y recibir remuneración, ya sea por cuenta propia o por contratación por parte de una empresa u organización.',
        
        'Tres meses después de formalizar la solicitud de refugio, las personas solicitantes podrán pedir una cita por medio de la línea 1311 o el sitio web https://www.migracion.go.cr para solicitar un permiso temporal de trabajo. Para más información sobre los derechos laborales, requisito y permisos es posible llamar al Ministerio de Trabajo y Seguridad Social, a través de la línea gratuita 800-TRABAJO.'
    );

?>

        <!-- HEADER -->
        <section class="min-height cards" id="headerID">
            <h1>Derechos</h1>
            <div class="row container-cards">
                <div class="col-sm-3">
                    <div class="row select-box">
                        <div id="txt-select-box">

                        @if(!empty($derechos))
                            <p>{{ $derechos[0]->tipo_derecho}}</p><img src="../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                        @else
                            <p>Documentación</p><img src="../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                        @endif
                        
                        </div>
                        <div class="options-container">
                            @if(!empty($derechos))
                                @switch($derechos[0]->tipo_derecho)
                                    @case("Documentación")
                                    <div class="col option"><a href="/derechos/Documentación" class="btn-repo btn-repo-selected">Documentación</a></div>
                                    <div class="col option"><a href="/derechos/Salud" class="btn-repo">Salud</a></div>
                                    <div class="col option"><a href="/derechos/Educación" class="btn-repo">Educación</a></div>
                                    <div class="col option"><a href="/derechos/Vivienda" class="btn-repo">Vivienda</a></div>
                                    <div class="col option"><a href="/derechos/Laborales" class="btn-repo">Laborales</a></div>
                                    <div class="col option"><a href="/derechos/Permisos Laborales" class="btn-repo">Permisos Laborales</a></div>
                                    @break

                                    @case("Salud")
                                    <div class="col option"><a href="/derechos/Documentación" class="btn-repo">Documentación</a></div>
                                    <div class="col option"><a href="/derechos/Salud" class="btn-repo btn-repo-selected">Salud</a></div>
                                    <div class="col option"><a href="/derechos/Educación" class="btn-repo">Educación</a></div>
                                    <div class="col option"><a href="/derechos/Vivienda" class="btn-repo">Vivienda</a></div>
                                    <div class="col option"><a href="/derechos/Laborales" class="btn-repo">Laborales</a></div>
                                    <div class="col option"><a href="/derechos/Permisos Laborales" class="btn-repo">Permisos Laborales</a></div>
                                    @break

                                    @case("Educación")
                                    <div class="col option"><a href="/derechos/Documentación" class="btn-repo">Documentación</a></div>
                                    <div class="col option"><a href="/derechos/Salud" class="btn-repo">Salud</a></div>
                                    <div class="col option"><a href="/derechos/Educación" class="btn-repo btn-repo-selected">Educación</a></div>
                                    <div class="col option"><a href="/derechos/Vivienda" class="btn-repo">Vivienda</a></div>
                                    <div class="col option"><a href="/derechos/Laborales" class="btn-repo">Laborales</a></div>
                                    <div class="col option"><a href="/derechos/Permisos Laborales" class="btn-repo">Permisos Laborales</a></div>
                                    @break

                                    @case("Vivienda")
                                    <div class="col option"><a href="/derechos/Documentación" class="btn-repo">Documentación</a></div>
                                    <div class="col option"><a href="/derechos/Salud" class="btn-repo">Salud</a></div>
                                    <div class="col option"><a href="/derechos/Educación" class="btn-repo">Educación</a></div>
                                    <div class="col option"><a href="/derechos/Vivienda" class="btn-repo btn-repo-selected">Vivienda</a></div>
                                    <div class="col option"><a href="/derechos/Laborales" class="btn-repo">Laborales</a></div>
                                    <div class="col option"><a href="/derechos/Permisos Laborales" class="btn-repo">Permisos Laborales</a></div>
                                    @break

                                    @case("Laborales")
                                    <div class="col option"><a href="/derechos/Documentación" class="btn-repo">Documentación</a></div>
                                    <div class="col option"><a href="/derechos/Salud" class="btn-repo">Salud</a></div>
                                    <div class="col option"><a href="/derechos/Educación" class="btn-repo">Educación</a></div>
                                    <div class="col option"><a href="/derechos/Vivienda" class="btn-repo">Vivienda</a></div>
                                    <div class="col option"><a href="/derechos/Laborales" class="btn-repo btn-repo-selected">Laborales</a></div>
                                    <div class="col option"><a href="/derechos/Permisos Laborales" class="btn-repo">Permisos Laborales</a></div>
                                    @break

                                    @case("Permisos Laborales")
                                    <div class="col option"><a href="/derechos/Documentación" class="btn-repo">Documentación</a></div>
                                    <div class="col option"><a href="/derechos/Salud" class="btn-repo">Salud</a></div>
                                    <div class="col option"><a href="/derechos/Educación" class="btn-repo">Educación</a></div>
                                    <div class="col option"><a href="/derechos/Vivienda" class="btn-repo">Vivienda</a></div>
                                    <div class="col option"><a href="/derechos/Laborales" class="btn-repo">Laborales</a></div>
                                    <div class="col option"><a href="/derechos/Permisos Laborales" class="btn-repo btn-repo-selected">Permisos Laborales</a></div>
                                    @break
                                @endswitch
                            @else
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo">Documentación</a></div>
                                    <div class="col option"><a href="/derechos/Salud" class="btn-repo">Salud</a></div>
                                    <div class="col option"><a href="/derechos/Educación" class="btn-repo">Educación</a></div>
                                    <div class="col option"><a href="/derechos/Vivienda" class="btn-repo">Vivienda</a></div>
                                    <div class="col option"><a href="/derechos/Laborales" class="btn-repo">Laborales</a></div>
                                    <div class="col option"><a href="/derechos/Permisos Laborales" class="btn-repo">Permisos Laborales</a></div>
                            @endif
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                @if(!empty($derechos))
                    <div class="row">                    
                        <h2>Derecho a {{ $derechos[0]->tipo_derecho }}</h2>                        
                    </div>
                    <div class="row">
                    @switch($derechos[0]->tipo_derecho)
                        @case("Documentación")
                        <p>{{ $tiposDerecho[0] }}</p>
                        @break
                        @case("Salud")
                        <p>{{ $tiposDerecho[1] }}</p>
                        @break
                        @case("Educación")
                        <p>{{ $tiposDerecho[2] }}</p>
                        @break
                        @case("Vivienda")
                        <p>{{ $tiposDerecho[3] }}</p>
                        @break
                        @case("Laborales")
                        <p>{{ $tiposDerecho[4] }}</p>
                        @break
                        @case("Permisos Laborales")
                        <p>{{ $tiposDerecho[5] }}</p>
                        @break
                    @endswitch
                        
                    </div>                    
                    <div class="row">            
                            @foreach($derechos as $derecho)
                                <div class="col-sm-4 card-derechos" data-bs-toggle="modal" data-bs-target="#modal{{ $derecho->id }}">
                                    <img src="../imgs/svg/document_icon.svg" alt="Documento">
                                    <p class="card-p">{{$derecho->titulo}}</p>
                                </div>
                            @endforeach
                            @else
                            <h2>¡No hay registro de este derecho!</h2>
                        @endif                        
                    </div>
                </div>
            </div>
        </section>
        <div class="btn-up">
            <a href="#headerID"><img src="../imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->

        <!-- MODAL -->
        @foreach($derechos as $derecho)
            <div class="modal fade" id="modal{{ $derecho->id }}" tabindex="-1" role="dialog"
                aria-labelledby="derecho" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modales" role="document">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-sm-6 col-imagen-modal">
                                <span class="span-modal-left d-flex align-content-center flex-wrap"><img src="../imgs/svg/icon_document.svg" alt=""></span>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="modal-title" id="exampleModalLongTitle">{{ $derecho->titulo }}</h5>
                                <div class="descripcion-modal">
                                    <p>{{ $derecho->descripcion }}</p>
                                </div>                                
                                <a href="/download/{{ $derecho->archivo }}" class="btn-repo"><span><img src="../imgs/svg/icon_download.svg" alt="Descargar"></span>Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach        
        <!-- MODAL -->
@endsection