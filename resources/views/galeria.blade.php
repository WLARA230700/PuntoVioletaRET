@extends('layout')

@section('content')
        <!-- HEADER -->
        <section class="min-height cards" id="headerID">
            <h1>Galería</h1>
            <div class="row container-cards">
                <div class="col-sm-3 ">
                    <div class="row select-box">
                        <div id="txt-select-box">

                        @if(!empty($imagenes))
                            <p>{{ $imagenes[0]->tipo_imagen}}</p><img src="../imgs/svg/icon_dropdown.svg"
                                alt="icon_dropdown">
                        @else
                            <p>Fotografías</p><img src="../imgs/svg/icon_dropdown.svg"
                                alt="icon_dropdown">
                        @endif

                        </div>
                        <div class="options-container">
                        @if(!empty($imagenes))
                            @switch($imagenes[0]->tipo_imagen)
                                @case("Fotografía")
                                    <div class="col option"><a href="/galeria/Fotografía" class="btn-repo btn-repo-selected">Fotografía</a></div>
                                    <div class="col option"><a href="/galeria/Infografía" class="btn-repo">Infografía</a></div>
                                @break

                                @case("Infografía")
                                    <div class="col option"><a href="/galeria/Fotografía" class="btn-repo">Fotografías</a></div>
                                    <div class="col option"><a href="/galeria/Infografía" class="btn-repo btn-repo-selected">Infografía</a></div>
                                @break
                            @endswitch
                        @else
                            <div class="col option"><a href="/galeria/Fotografía" class="btn-repo">Fotografías</a></div>
                            <div class="col option"><a href="/galeria/Infografía" class="btn-repo">Infografía</a></div>
                        @endif                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                @if(!empty($imagenes))
                    <div class="row">
                        <h2>{{$imagenes[0]->tipo_imagen}}</h2>
                    </div>
                    <div class="row">
                    @foreach($imagenes as $imagen)
                        <div class="card-galeria" data-bs-toggle="modal" data-bs-target="#modal{{ $imagen->id }}">
                            <img src="{{ URL::asset('storage/imagenes/'.$imagen->archivo) }}" alt="Fotografía">
                            <p class="card-p">{{$imagen->titulo}}</p>
                        </div>
                    @endforeach
                @else
                    <h2>¡No hay registro de este tipo de imagen!</h2>
                @endif
                </div>
            </div>
        </section>
        <div class="btn-up">
            <a href="#headerID"><img src="../imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->

        <!-- MODAL -->
        @foreach($imagenes as $imagen)
            <div class="modal fade" id="modal{{ $imagen->id }}" tabindex="-1" role="dialog"
                aria-labelledby="foto" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modales" role="document">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-sm-6 col-imagen-modal">
                                <span class="span-modal-left-galeria d-flex align-content-center"><img src="{{ URL::asset('storage/imagenes/'.$imagen->archivo) }}" alt=""></span>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="modal-title" id="exampleModalLongTitle" title="{{ $imagen->titulo }}">{{ $imagen->titulo }}</h5>
                                <div class="descripcion-modal">
                                    <p>{{ $imagen->descripcion }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- MODAL -->
@endsection