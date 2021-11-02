@extends('admin.admin_layout')

@section('admin_content')
        <!-- FORMULARIO -->
        <div class="row form-admin min-height">
            <div class="col-12">
                <h1>Modificar Derecho</h1>
            </div>

            <div class="col-12">
                <form action="#">
                    
                    <div class="row admin-select-box">
                        <div id="txt-select-box">
                            <p>Documentación</p><img src="../../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                        </div>
                        <div class="options-container">
                            <div onclick="changeSelected(id)" class="col option"><span class="btn-repo">Documentación</span></div>
                            <div class="col option"><span class="btn-repo">Salud</span></div>
                            <div class="col option"><span class="btn-repo">Educación</span></div>
                            <div class="col option"><span class="btn-repo">Vivienda</span></div>
                            <div class="col option"><span class="btn-repo">Laborales</span></div>
                            <div class="col option"><span class="btn-repo">Permisos laborales</span></div>
                        </div>
                    </div>

                    <input type="text" placeholder="Título *">
                    <textarea name="descripcion" id="descripcion-derecho" cols="30" rows="5" placeholder="Descripción *"></textarea>
                    <input type="file"></input>
                    <button type="submit">Modificar</button>
                </form>
            </div>
        </div>
        <!-- FORMULARIO -->

@endsection