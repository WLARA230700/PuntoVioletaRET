@extends('admin.admin_layout')

@section('admin_content')
<!-- FORMULARIO -->
<div class="row form-admin min-height">
    <div class="col-12">
        <h1>Modificar Derecho</h1>
    </div>

    <div class="col-12">
        <form id="formId" action="{{ route('modifyRightPost') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="row admin-select-box">
                <div id="txt-select-box">
                    <p id="p-select-box">{{$derecho[0]->tipo_derecho}}</p><img src="../../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                </div>
                <div class="options-container">
                    @switch($derecho[0]->tipo_derecho)

                        @case('Documentación')
                            <div onclick="changeSelected('id_documentacion')" class="col option">
                                <input class="btn-repo" id="Documentacion" type="radio" name="tipo_derecho" value="Documentación" checked>
                                <label id="id_documentacion" for="Documentacion">Documentación</label>
                            </div>
                            <div onclick="changeSelected('id_salud')" class="col option">
                                <input class="btn-repo" id="Salud" type="radio" name="tipo_derecho" value="Salud">
                                <label id="id_salud" for="Salud">Salud</label>
                            </div>
                            <div onclick="changeSelected('id_educacion')" class="col option">
                                <input class="btn-repo" id="Educacion" type="radio" name="tipo_derecho" value="Educación">
                                <label id="id_educacion" for="Educacion">Educación</label>
                            </div>
                            <div onclick="changeSelected('id_vivienda')" class="col option">
                                <input class="btn-repo" id="Vivienda" type="radio" name="tipo_derecho" value="Vivienda">
                                <label id="id_vivienda" for="Vivienda">Vivienda</label>
                            </div>
                            <div onclick="changeSelected('id_laborales')" class="col option">
                                <input class="btn-repo" id="Laborales" type="radio" name="tipo_derecho" value="Laborales">
                                <label id="id_laborales" for="Laborales">Laborales</label>
                            </div>
                            <div onclick="changeSelected('id_permisos_laborales')" class="col option">
                                <input class="btn-repo" id="Permisos laborales" type="radio" name="tipo_derecho" value="Permisos laborales">
                                <label id="id_permisos_laborales" for="Permisos laborales">Permisos laborales</label>
                            </div>
                        @break

                        @case('Salud')
                            <div onclick="changeSelected('id_documentacion')" class="col option">
                                <input class="btn-repo" id="Documentacion" type="radio" name="tipo_derecho" value="Documentación">
                                <label id="id_documentacion" for="Documentacion">Documentación</label>
                            </div>
                            <div onclick="changeSelected('id_salud')" class="col option">
                                <input class="btn-repo" id="Salud" type="radio" name="tipo_derecho" value="Salud" checked>
                                <label id="id_salud" for="Salud">Salud</label>
                            </div>
                            <div onclick="changeSelected('id_educacion')" class="col option">
                                <input class="btn-repo" id="Educacion" type="radio" name="tipo_derecho" value="Educación">
                                <label id="id_educacion" for="Educacion">Educación</label>
                            </div>
                            <div onclick="changeSelected('id_vivienda')" class="col option">
                                <input class="btn-repo" id="Vivienda" type="radio" name="tipo_derecho" value="Vivienda">
                                <label id="id_vivienda" for="Vivienda">Vivienda</label>
                            </div>
                            <div onclick="changeSelected('id_laborales')" class="col option">
                                <input class="btn-repo" id="Laborales" type="radio" name="tipo_derecho" value="Laborales">
                                <label id="id_laborales" for="Laborales">Laborales</label>
                            </div>
                            <div onclick="changeSelected('id_permisos_laborales')" class="col option">
                                <input class="btn-repo" id="Permisos laborales" type="radio" name="tipo_derecho" value="Permisos laborales">
                                <label id="id_permisos_laborales" for="Permisos laborales">Permisos laborales</label>
                            </div>
                        @break

                        @case('Educación')
                            <div onclick="changeSelected('id_documentacion')" class="col option">
                                <input class="btn-repo" id="Documentacion" type="radio" name="tipo_derecho" value="Documentación">
                                <label id="id_documentacion" for="Documentacion">Documentación</label>
                            </div>
                            <div onclick="changeSelected('id_salud')" class="col option">
                                <input class="btn-repo" id="Salud" type="radio" name="tipo_derecho" value="Salud">
                                <label id="id_salud" for="Salud">Salud</label>
                            </div>
                            <div onclick="changeSelected('id_educacion')" class="col option">
                                <input class="btn-repo" id="Educacion" type="radio" name="tipo_derecho" value="Educación" checked>
                                <label id="id_educacion" for="Educacion">Educación</label>
                            </div>
                            <div onclick="changeSelected('id_vivienda')" class="col option">
                                <input class="btn-repo" id="Vivienda" type="radio" name="tipo_derecho" value="Vivienda">
                                <label id="id_vivienda" for="Vivienda">Vivienda</label>
                            </div>
                            <div onclick="changeSelected('id_laborales')" class="col option">
                                <input class="btn-repo" id="Laborales" type="radio" name="tipo_derecho" value="Laborales">
                                <label id="id_laborales" for="Laborales">Laborales</label>
                            </div>
                            <div onclick="changeSelected('id_permisos_laborales')" class="col option">
                                <input class="btn-repo" id="Permisos laborales" type="radio" name="tipo_derecho" value="Permisos laborales">
                                <label id="id_permisos_laborales" for="Permisos laborales">Permisos laborales</label>
                            </div>
                        @break

                        @case('Vivienda')
                            <div onclick="changeSelected('id_documentacion')" class="col option">
                                <input class="btn-repo" id="Documentacion" type="radio" name="tipo_derecho" value="Documentación">
                                <label id="id_documentacion" for="Documentacion">Documentación</label>
                            </div>
                            <div onclick="changeSelected('id_salud')" class="col option">
                                <input class="btn-repo" id="Salud" type="radio" name="tipo_derecho" value="Salud">
                                <label id="id_salud" for="Salud">Salud</label>
                            </div>
                            <div onclick="changeSelected('id_educacion')" class="col option">
                                <input class="btn-repo" id="Educacion" type="radio" name="tipo_derecho" value="Educación">
                                <label id="id_educacion" for="Educacion">Educación</label>
                            </div>
                            <div onclick="changeSelected('id_vivienda')" class="col option">
                                <input class="btn-repo" id="Vivienda" type="radio" name="tipo_derecho" value="Vivienda" checked>
                                <label id="id_vivienda" for="Vivienda">Vivienda</label>
                            </div>
                            <div onclick="changeSelected('id_laborales')" class="col option">
                                <input class="btn-repo" id="Laborales" type="radio" name="tipo_derecho" value="Laborales">
                                <label id="id_laborales" for="Laborales">Laborales</label>
                            </div>
                            <div onclick="changeSelected('id_permisos_laborales')" class="col option">
                                <input class="btn-repo" id="Permisos laborales" type="radio" name="tipo_derecho" value="Permisos laborales">
                                <label id="id_permisos_laborales" for="Permisos laborales">Permisos laborales</label>
                            </div>
                        @break

                        @case('Laborales')
                            <div onclick="changeSelected('id_documentacion')" class="col option">
                                <input class="btn-repo" id="Documentacion" type="radio" name="tipo_derecho" value="Documentación">
                                <label id="id_documentacion" for="Documentacion">Documentación</label>
                            </div>
                            <div onclick="changeSelected('id_salud')" class="col option">
                                <input class="btn-repo" id="Salud" type="radio" name="tipo_derecho" value="Salud">
                                <label id="id_salud" for="Salud">Salud</label>
                            </div>
                            <div onclick="changeSelected('id_educacion')" class="col option">
                                <input class="btn-repo" id="Educacion" type="radio" name="tipo_derecho" value="Educación">
                                <label id="id_educacion" for="Educacion">Educación</label>
                            </div>
                            <div onclick="changeSelected('id_vivienda')" class="col option">
                                <input class="btn-repo" id="Vivienda" type="radio" name="tipo_derecho" value="Vivienda">
                                <label id="id_vivienda" for="Vivienda">Vivienda</label>
                            </div>
                            <div onclick="changeSelected('id_laborales')" class="col option">
                                <input class="btn-repo" id="Laborales" type="radio" name="tipo_derecho" value="Laborales" checked>
                                <label id="id_laborales" for="Laborales">Laborales</label>
                            </div>
                            <div onclick="changeSelected('id_permisos_laborales')" class="col option">
                                <input class="btn-repo" id="Permisos laborales" type="radio" name="tipo_derecho" value="Permisos laborales">
                                <label id="id_permisos_laborales" for="Permisos laborales">Permisos laborales</label>
                            </div>
                        @break

                        @case('Permisos laborales')
                            <div onclick="changeSelected('id_documentacion')" class="col option">
                                <input class="btn-repo" id="Documentacion" type="radio" name="tipo_derecho" value="Documentación">
                                <label id="id_documentacion" for="Documentacion">Documentación</label>
                            </div>
                            <div onclick="changeSelected('id_salud')" class="col option">
                                <input class="btn-repo" id="Salud" type="radio" name="tipo_derecho" value="Salud">
                                <label id="id_salud" for="Salud">Salud</label>
                            </div>
                            <div onclick="changeSelected('id_educacion')" class="col option">
                                <input class="btn-repo" id="Educacion" type="radio" name="tipo_derecho" value="Educación">
                                <label id="id_educacion" for="Educacion">Educación</label>
                            </div>
                            <div onclick="changeSelected('id_vivienda')" class="col option">
                                <input class="btn-repo" id="Vivienda" type="radio" name="tipo_derecho" value="Vivienda">
                                <label id="id_vivienda" for="Vivienda">Vivienda</label>
                            </div>
                            <div onclick="changeSelected('id_laborales')" class="col option">
                                <input class="btn-repo" id="Laborales" type="radio" name="tipo_derecho" value="Laborales">
                                <label id="id_laborales" for="Laborales">Laborales</label>
                            </div>
                            <div onclick="changeSelected('id_permisos_laborales')" class="col option">
                                <input class="btn-repo" id="Permisos laborales" type="radio" name="tipo_derecho" value="Permisos laborales" checked>
                                <label id="id_permisos_laborales" for="Permisos laborales">Permisos laborales</label>
                            </div>
                        @break

                    @endswitch

                </div>
            </div>

            <input type="text" placeholder="Título *" value="{{ $derecho[0]->titulo }}" name="titulo">
            <textarea name="descripcion" id="descripcion-derecho" cols="30" rows="5" placeholder="Descripción *" maxlength="255">{{ $derecho[0]->descripcion }}</textarea>
            <input type="file" onchange="verificarDerechoModificar(this)" name="archivo"></input>
            <input type="hidden" value="{{ $derecho[0]->id }}" name="id">
            <button type="submit" id="btnSubmitAgregarDerecho">Modificar</button>
        </form>
    </div>
</div>
<!-- FORMULARIO -->



@endsection