@extends('layout')

@section('content')
        <!-- HEADER -->
        <section class="min-height cards" id="headerID">
            <h1>Derechos</h1>
            <div class="row container-cards">
                <div class="col-sm-3">
                    <div class="row select-box">
                        <div id="txt-select-box">
                            <p>Documentación</p><img src="../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus at augue ut semper.
                            Praesent mattis sed dui eget placerat. Nullam non erat rutrum magna pharetra luctus eget id
                            erat.</p>
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
                                <button type="button" class="btn-repo"><span><img src="../imgs/svg/icon_download.svg" alt="Descargar"></span>Descargar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach        
        <!-- MODAL -->
@endsection