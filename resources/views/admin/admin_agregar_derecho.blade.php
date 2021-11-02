@extends('admin.admin_layout')

@section('admin_content')

        <!-- FORMULARIO -->
        <div class="row form-admin min-height">
            <div class="col-12">
                <h1>Agregar Derecho</h1>
            </div>

            <div class="col-12">
                <form id="formId" action="{{ route('addRightPost') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row admin-select-box">
                        <div id="txt-select-box">
                            <p id="p-select-box">Documentación</p><img src="../../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                        </div>
                        <div class="options-container">
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
                        </div>
                    </div>

                    <input type="text" placeholder="Título *" name="titulo">
                    <textarea name="descripcion" id="descripcion-derecho" cols="30" rows="5" placeholder="Descripción *"></textarea>
                    <input name="archivo" type="file" onchange="verificarDerecho(this)"></input>
                    <button id="btnSubmitAgregarDerecho" type="submit" disabled>Agregar</button>
                </form>
            </div>
        </div>
        <!-- FORMULARIO -->

        @endsection