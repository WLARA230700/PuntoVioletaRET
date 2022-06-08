@extends('admin.admin_layout')

@section('admin_content')
        <!-- FORMULARIO -->
        <div class="row form-admin min-height">
            <div class="col-12">
                <h1>Agregar Imagen</h1>
                @if(session()->has('messageError'))
                    <div class="alert alert-danger">
                        {{ session()->get('messageError') }}
                    </div>
                @endif
            </div>

            <div class="col-12">
            <form id="formId" action="{{ route('addTallerPost') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="text" placeholder="Nombre *" name="nombre">
                    <input type="date" placeholder="Fecha *" name="fecha">
                    <input type="text" placeholder="Lugar *" name="lugar">
                    <textarea name="descripcion" id="descripcion-imagen" cols="30" rows="5" placeholder="Descripción *" maxlength="255"></textarea>
                    <input name="portada" type="file"></input>
                    <button type="submit">Agregar</button>
                </form>                
            </div>
        </div>
        <!-- FORMULARIO -->
@endsection