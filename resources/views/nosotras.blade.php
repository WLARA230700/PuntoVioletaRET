@extends('layout')

@section('content')
        <!-- HEADER -->
        <section class="min-height" id="headerID">
            <div class="row redes-comunitarias-header">
                <div class="row">
                    <h1>Nosotras</h1>
                    <p class="text-center nosotras-info">Somos una plataforma feminista que promueve acciones para el acompañamiento y  prevención de la violencia, el acceso la justicia y otros derechos de las mujeres y niñas solicitantes de refugio y refugiadas en Costa Rica.</p>
                </div>
                <div class="nosotras-img-container">
                    <img class="nosotras-img" src="{{ URL::asset('/imgs/svg/icon_punto-violeta_purple.svg') }}" alt="Logo Punto Violeta">
                </div>
                <div class="nosotras-img-container">
                    <img class="nosotras-img" src="{{ URL::asset('/imgs/svg/icon_ret_blue.svg') }}" alt="Logo RET">
                </div>
        </section>
        
        <div class="btn-up">
            <a href="#headerID"><img src="../imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->
@endsection