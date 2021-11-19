@extends('admin.admin_layout')

@section('admin_content')
        <!-- FORMULARIO -->
        <div class="row form-admin min-height">
            <div class="col-12">
                <h1>Modificar Imagen</h1>
                @if(session()->has('messageError'))
                    <div class="alert alert-danger">
                        {{ session()->get('messageError') }}
                    </div>
                @endif
            </div>

            <div class="col-12">
            <form id="formId" action="{{ route('modifyImagePost') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row admin-select-box">
                        <div id="txt-select-box">
                            <p id="p-select-box">{{$imagen[0]->tipo_imagen}}</p><img src="../../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                        </div>
                        <div class="options-container">
                            @switch($imagen[0]->tipo_imagen)

                                @case('Infografía')
                                    <div onclick="changeSelected('id_infografia')" class="col option">
                                        <input class="btn-repo" id="infografia" type="radio" name="tipo_imagen" value="Infografía" checked>
                                        <label id="id_infografia" for="infografia">Infografía</label>
                                    </div>
                                    <div onclick="changeSelected('id_fotografia')" class="col option">
                                        <input class="btn-repo" id="fotografia" type="radio" name="tipo_imagen" value="Fotografía">
                                        <label id="id_fotografia" for="fotografia">Fotografía</label>
                                    </div>
                                @break

                                @case('Fotografía')
                                    <div onclick="changeSelected('id_infografia')" class="col option">
                                        <input class="btn-repo" id="infografia" type="radio" name="tipo_imagen" value="Infografía">
                                        <label id="id_infografia" for="infografia">Infografía</label>
                                    </div>
                                    <div onclick="changeSelected('id_fotografia')" class="col option">
                                        <input class="btn-repo" id="fotografia" type="radio" name="tipo_imagen" value="Fotografía" checked>
                                        <label id="id_fotografia" for="fotografia">Fotografía</label>
                                    </div>
                                @break

                            @endswitch
                        </div>
                    </div>

                    <input type="text" placeholder="Título *" name="titulo" value="{{ $imagen[0]->titulo }}">
                    <textarea name="descripcion" id="descripcion-imagen" cols="30" rows="5" placeholder="Descripción *" maxlength="255">{{ $imagen[0]->descripcion }}</textarea>
                    <input name="archivo" type="file"></input>
                    <input type="hidden" value="{{ $imagen[0]->id }}" name="id">
                    <button type="submit">Modificar</button>
                </form>
            </div>
        </div>
        <!-- FORMULARIO -->

@endsection