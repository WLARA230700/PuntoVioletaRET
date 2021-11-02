@extends('admin.admin_layout')

@section('admin_content')
<!-- DASHBOARD -->

<div class="row admin-dashboard">
    <div class="col-12">
        <h1>Administrador</h1>
    </div>
    
    <div class="col-12 col-btn-right">
        <a href="{{ route('addRight') }}" class="btn-repo btn-dashboard-agregar"><span><img src="../../imgs/svg/icon_new_document.svg" alt="Agregar Derecho"></span>Agregar</a>
        <a href="./admin_agregar_imagen.html" class="btn-repo btn-dashboard-agregar"><span><img src="../../imgs/svg/icon_new_img.svg" alt="documento"></span>Agregar</a> 
    </div>

    <div class="col-2">
        <a href="{{ route('showDerechos') }}" class="btn-repo">Documentos</a>
        <a href="#" class="btn-repo">Infografías</a>
        <a href="#" class="btn-repo">Fotografías</a>
    </div>

    <div class="col-10">
        @if (!empty($derechos))

            @foreach($derechos as $derecho)
                <!--Tupla-->
                <div class="row tupla">
                    <div class="col-6">
                        <img src="../../imgs/svg/document_icon.svg" alt="documento">
                        <p>{{ $derecho->titulo }}</p>
                    </div>

                    <?php
                        $fecha = preg_split("/[:|\s-]/", $derecho->created_at);
                        $ano = $fecha[0];
                        $mes = $fecha[1];
                        $diaNum = $fecha[2];
                    ?>

                    <div class="col-2">
                        <p><?php echo $diaNum . "/" . $mes . "/" . $ano?></p>
                    </div>
                    <div class="col-2">
                        <a href="#">Modificar</a>
                    </div>
                    <div class="col-2">
                        <a href="#">Eliminar</a>
                    </div>
                </div>
                <!--Tupla-->
            @endforeach
        @endif
        <!--Tupla-->
        <div class="row tupla">
            <div class="col-6">
                <img src="../../imgs/svg/document_icon.svg" alt="documento">
                <p>Título del documento</p>
            </div>

            <div class="col-2">
                <p>25/04/21</p>
            </div>
            <div class="col-2">
                <a href="#">Modificar</a>
            </div>
            <div class="col-2">
                <a href="#">Eliminar</a>
            </div>
        </div>

        <div class="row tupla">
            <div class="col-6">
                <img src="../../imgs/svg/document_icon.svg" alt="documento">
                <p>Título del documento</p>
            </div>

            <div class="col-2">
                <p>25/04/21</p>
            </div>
            <div class="col-2">
                <a href="#">Modificar</a>
            </div>
            <div class="col-2">
                <a href="#">Eliminar</a>
            </div>
        </div>

        <div class="row tupla">
            <div class="col-6">
                <img src="../../imgs/svg/document_icon.svg" alt="documento">
                <p>Título del documento</p>
            </div>

            <div class="col-2">
                <p>25/04/21</p>
            </div>
            <div class="col-2">
                <a href="#">Modificar</a>
            </div>
            <div class="col-2">
                <a href="#">Eliminar</a>
            </div>
        </div>

        <div class="row tupla">
            <div class="col-6">
                <img src="../../imgs/svg/document_icon.svg" alt="documento">
                <p>Título del documento</p>
            </div>

            <div class="col-2">
                <p>25/04/21</p>
            </div>
            <div class="col-2">
                <a href="#">Modificar</a>
            </div>
            <div class="col-2">
                <a href="#">Eliminar</a>
            </div>
        </div>
    </div>
</div>

<!-- DASHBOARD -->
@endsection