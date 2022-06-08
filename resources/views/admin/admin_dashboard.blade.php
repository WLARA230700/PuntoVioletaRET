@extends('admin.admin_layout')

@section('admin_content')
<!-- DASHBOARD -->

<div class="row admin-dashboard">
    <div class="col-12">
        <h1>Administrador</h1>
    </div>
    
    <div class="col-12 col-btn-right">
        @isset($isDerechos)
        @else
            <?php $isDerechos = true ?>
        @endisset

        @if ($isDerechos)
            <a href="{{ route('addRight') }}" class="btn-repo btn-dashboard-agregar"><span><img src="../../imgs/svg/icon_new_document.svg" alt="Agregar Derecho"></span>Agregar</a>
            
        @else
            <a href="{{ route('addImage') }}" class="btn-repo btn-dashboard-agregar"><span><img src="../../imgs/svg/icon_new_img.svg" alt="documento"></span>Agregar</a>
        @endif
    </div>

    <div class="col-2">
        @if (!empty($derechos))
            <a href="{{ route('showDerechos') }}" class="btn-repo btn-repo-selected">Documentos</a>
        @else
            <a href="{{ route('showDerechos') }}" class="btn-repo">Documentos</a>
        @endif

        @if (!empty($infografias))
            <a href="{{ route('showInfografias') }}" class="btn-repo btn-repo-selected">Infografías</a>
        @else
            <a href="{{ route('showInfografias') }}" class="btn-repo">Infografías</a>
        @endif

        @if (!empty($fotografias))
            <a href="{{ route('showPhotos') }}" class="btn-repo btn-repo-selected">Fotografías</a>
        @else
            <a href="{{ route('showPhotos') }}" class="btn-repo">Fotografías</a>
        @endif

        @if (!empty($user))
            <a href="{{ route('showUsers') }}" class="btn-repo btn-repo-selected">Usuarios</a>
        @else
            <a href="{{ route('showUsers') }}" class="btn-repo">Usuarios</a>
        @endif

        @if (!empty($taller))
            <a href="{{ route('showTalleres') }}" class="btn-repo btn-repo-selected">Talleres</a>
        @else
            <a href="{{ route('showTalleres') }}" class="btn-repo">Talleres</a>
        @endif
        
        
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
                        <a href="{{ route('modifyRight', ['id' => $derecho->id]) }}">Modificar</a>
                    </div>
                    <div class="col-2">
                        <a data-bs-toggle="modal" data-bs-target="#modal{{ $derecho->id }}">Eliminar</a>
                    </div>
                </div>
                <!--Tupla-->

                <!--Modal-->
                <div class="modal fade" id="modal{{ $derecho->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-{{ $derecho->titulo }}">Advertencia</h5>
                        </div>
                        <div class="modal-body">
                            <p class="msg-modal-admin">¿Estás seguro que deseas eliminarlo? </br> Esta acción no se puede revertir</p>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-repo" data-bs-dismiss="modal">Cancelar</a>
                            <a type="button" class="btn btn-repo" href="{{ route('deleteRight', ['id' => $derecho->id]) }}">Eliminar</a>
                        </div>
                        </div>
                    </div>
                </div>
                <!--Modal-->
            @endforeach
        @endif

        @if (!empty($fotografias))
        
            @foreach($fotografias as $fotografia)
                <!--Tupla-->
                <div class="row tupla">
                    <div class="col-6">
                        <img src="../../imgs/svg/icon_new_img.svg" alt="documento">
                        <p>{{ $fotografia->titulo }}</p>
                    </div>

                    <?php
                        $fecha = preg_split("/[:|\s-]/", $fotografia->created_at);
                        $ano = $fecha[0];
                        $mes = $fecha[1];
                        $diaNum = $fecha[2];
                    ?>

                    <div class="col-2">
                        <p><?php echo $diaNum . "/" . $mes . "/" . $ano?></p>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('modifyImage', ['id' => $fotografia->id]) }}">Modificar</a>
                    </div>
                    <div class="col-2">
                        <a data-bs-toggle="modal" data-bs-target="#modal{{ $fotografia->id }}">Eliminar</a>
                    </div>
                </div>
                <!--Tupla-->

                <!--Modal-->
                <div class="modal fade" id="modal{{ $fotografia->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-{{ $fotografia->titulo }}">Advertencia</h5>
                        </div>
                        <div class="modal-body">
                            <p class="msg-modal-admin">¿Estás seguro que deseas eliminarlo? </br> Esta acción no se puede revertir</p>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-repo" data-bs-dismiss="modal">Cancelar</a>
                            <a type="button" class="btn btn-repo" href="{{ route('deleteImage', ['id' => $fotografia->id]) }}">Eliminar</a>
                        </div>
                        </div>
                    </div>
                </div>
                <!--Modal-->
            @endforeach
        @endif

        @if (!empty($infografias))
        
            @foreach($infografias as $infografia)
                <!--Tupla-->
                <div class="row tupla">
                    <div class="col-6">
                        <img src="../../imgs/svg/icon_new_img.svg" alt="documento">
                        <p>{{ $infografia->titulo }}</p>
                    </div>

                    <?php
                        $fecha = preg_split("/[:|\s-]/", $infografia->created_at);
                        $ano = $fecha[0];
                        $mes = $fecha[1];
                        $diaNum = $fecha[2];
                    ?>

                    <div class="col-2">
                        <p><?php echo $diaNum . "/" . $mes . "/" . $ano?></p>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('modifyImage', ['id' => $infografia->id]) }}">Modificar</a>
                    </div>
                    <div class="col-2">
                        <a data-bs-toggle="modal" data-bs-target="#modal{{ $infografia->id }}">Eliminar</a>
                    </div>
                </div>
                <!--Tupla-->

                <!--Modal-->
                <div class="modal fade" id="modal{{ $infografia->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-{{ $infografia->titulo }}">Advertencia</h5>
                        </div>
                        <div class="modal-body">
                            <p class="msg-modal-admin">¿Estás seguro que deseas eliminarlo? </br> Esta acción no se puede revertir</p>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-repo" data-bs-dismiss="modal">Cancelar</a>
                            <a type="button" class="btn btn-repo" href="{{ route('deleteImage', ['id' => $infografia->id]) }}">Eliminar</a>
                        </div>
                        </div>
                    </div>
                </div>
                <!--Modal-->
            @endforeach
        @endif
    </div>
</div>

<!-- DASHBOARD -->
@endsection