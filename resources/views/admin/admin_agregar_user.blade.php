@extends('admin.admin_layout')

@section('admin_content')
        <!-- FORMULARIO -->
        <div class="row form-admin min-height">
            <div class="col-12">
                <h1>Agregar Usuario</h1>
                @if(session()->has('messageError'))
                    <div class="alert alert-danger">
                        {{ session()->get('messageError') }}
                    </div>
                @endif
            </div>

            <div class="col-12">
            <form id="formId" action="{{ route('addUserPost') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="text" placeholder="Nombre *" name="name">
                    <input type="email" placeholder="Correo electrónico *" name="email">
                    <input type="password" placeholder="Contraseña *" name="password">
                    <button type="submit">Agregar</button>
                </form>                
            </div>
        </div>
        <!-- FORMULARIO -->
@endsection