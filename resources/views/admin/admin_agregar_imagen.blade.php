@extends('admin.admin_layout')

@section('admin_content')
        <!-- FORMULARIO -->
        <div class="row form-admin min-height">
            <div class="col-12">
                <h1>Agregar Imagen</h1>
            </div>

            <div class="col-12">
            <form id="formId" action="{{ route('addImagePost') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row admin-select-box">
                        <div id="txt-select-box">
                            <p id="p-select-box">Infografía</p><img src="../../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                        </div>
                        <div class="options-container">
                            <div onclick="changeSelected('id_infografia')" class="col option">
                                <input class="btn-repo" id="infografia" type="radio" name="tipo_imagen" value="Infografía" checked>
                                <label id="id_infografia" for="infografia">Infografía</label>
                            </div>
                            <div onclick="changeSelected('id_fotografia')" class="col option">
                                <input class="btn-repo" id="fotografia" type="radio" name="tipo_imagen" value="Fotografía">
                                <label id="id_fotografia" for="fotografia">Fotografía</label>
                            </div>
                        </div>
                    </div>

                    <input type="text" placeholder="Título *" name="titulo">
                    <textarea name="descripcion" id="descripcion-imagen" cols="30" rows="5" placeholder="Descripción *"></textarea>
                    <input name="archivo" type="file"></input>
                    <button type="submit">Agregar</button>
                </form>
            </div>
        </div>
        <!-- FORMULARIO -->
@endsection