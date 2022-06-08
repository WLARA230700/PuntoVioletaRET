@extends('admin.admin_layout')

@section('admin_content')
<!-- DASHBOARD -->

<div class="row admin-dashboard">
    <div class="col-12">
        <h1>Administrador</h1>
    </div>
    
    <div class="col-12 col-btn-right">
        @isset($tipoContenido)
        @else
            <?php $tipoContenido = "DERECHOS" ?>
        @endisset
        @switch($tipoContenido)
            @case('FOTOGRAFIAS')
                <a href="{{ route('addImage') }}" class="btn-repo btn-dashboard-agregar"><span><img src="../../imgs/svg/icon_new_img.svg" alt="Agregar Fotografía"></span>Agregar</a>
                @break
            @case('INFOGRAFIAS')
                <a href="{{ route('addImage') }}" class="btn-repo btn-dashboard-agregar"><span><img src="../../imgs/svg/icon_new_img.svg" alt="Agregar Infografía"></span>Agregar</a>
                @break
            @case('USERS')
                <a href="{{ route('addUser') }}" class="btn-repo btn-dashboard-agregar"><span><img src="../../imgs/svg/icon_user.svg" alt="Agregar Usuario"></span>Agregar</a>
                @break
            @case('DERECHOS')
                <a href="{{ route('addRight') }}" class="btn-repo btn-dashboard-agregar"><span><img src="../../imgs/svg/icon_new_document.svg" alt="Agregar Derecho"></span>Agregar</a>
                @break
            @case('TALLERES')
                <a href="{{ route('addTaller') }}" class="btn-repo btn-dashboard-agregar"><span><img src="../../imgs/svg/icon_taller.svg" alt="Agregar Taller"></span>Agregar</a>
                @break
        @endswitch
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

        @if (Auth::id() == 1)
            @if (!empty($users))
                <a href="{{ route('showUsers') }}" class="btn-repo btn-repo-selected">Usuarios</a>
            @else
                <a href="{{ route('showUsers') }}" class="btn-repo">Usuarios</a>
            @endif
        @endif

        @if (!empty($talleres))
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

        @if (!empty($users))
        
            @foreach($users as $user)
                <!--Tupla-->
                <div class="row tupla">
                    <div class="col-6">
                        <img src="../../imgs/svg/icon_user.svg" alt="documento">
                        <p>{{ $user->email }}</p>
                    </div>

                    <?php
                        $fecha = preg_split("/[:|\s-]/", $user->created_at);
                        $ano = $fecha[0];
                        $mes = $fecha[1];
                        $diaNum = $fecha[2];
                    ?>

                    <div class="col-2">
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="col-2">
                        <p><?php echo $diaNum . "/" . $mes . "/" . $ano?></p>
                    </div>
                    <div class="col-2">
                        <a data-bs-toggle="modal" data-bs-target="#modal{{ $user->id }}">Eliminar</a>
                    </div>
                </div>
                <!--Tupla-->

                <!--Modal-->
                <div class="modal fade" id="modal{{ $user->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-{{ $user->name }}">Advertencia</h5>
                        </div>
                        <div class="modal-body">
                            <p class="msg-modal-admin">¿Estás seguro que deseas eliminarlo? </br> Esta acción no se puede revertir</p>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-repo" data-bs-dismiss="modal">Cancelar</a>
                            <a type="button" class="btn btn-repo" href="{{ route('deleteUser', ['id' => $user->id]) }}">Eliminar</a>
                        </div>
                        </div>
                    </div>
                </div>
                <!--Modal-->
            @endforeach
        @endif

        @if (!empty($talleres))
        
            @foreach($talleres as $taller)
                <!--Tupla-->
                <div class="row tupla">
                    <div class="col-6">
                        <img src="../../imgs/svg/icon_taller.svg" alt="documento">
                        <p>{{ $taller->nombre }}</p>
                    </div>

                    <?php
                        $fecha = preg_split("/[:|\s-]/", $taller->created_at);
                        $ano = $fecha[0];
                        $mes = $fecha[1];
                        $diaNum = $fecha[2];
                    ?>

                    <div class="col-2">
                        <p><?php echo $diaNum . "/" . $mes . "/" . $ano?></p>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('modifyTaller', ['id' => $taller->id]) }}">Modificar</a>
                    </div>
                    <div class="col-2">
                        <a data-bs-toggle="modal" data-bs-target="#modal{{ $taller->id }}">Eliminar</a>
                    </div>
                </div>
                <!--Tupla-->

                <!--Modal-->
                <div class="modal fade" id="modal{{ $taller->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-{{ $taller->nombre }}">Advertencia</h5>
                        </div>
                        <div class="modal-body">
                            <p class="msg-modal-admin">¿Estás seguro que deseas eliminarlo? </br> Esta acción no se puede revertir</p>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-repo" data-bs-dismiss="modal">Cancelar</a>
                            <a type="button" class="btn btn-repo" href="{{ route('deleteTaller', ['id' => $taller->id]) }}">Eliminar</a>
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