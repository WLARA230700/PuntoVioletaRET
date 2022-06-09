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
            <form id="formId" action="{{ route('modifyTallerPost') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="text" placeholder="Nombre *" name="nombre" value="{{ $taller[0]->nombre }}">
                    <input type="date" placeholder="Fecha *" name="fecha" value="{{ $taller[0]->fecha }}">
                    <input type="text" placeholder="Lugar *" name="lugar" value="{{ $taller[0]->lugar }}">
                    <textarea name="descripcion" id="descripcion-imagen" cols="30" rows="5" placeholder="Descripción *" maxlength="255">{{ $taller[0]->descripcion }}</textarea>
                    <input name="portada" type="file"></input>
                    <input type="hidden" value="{{ $taller[0]->id }}" name="id">
                    <button type="submit">Modificar</button>
                </form>
            </div>
        </div>
        <!-- FORMULARIO -->

@endsection