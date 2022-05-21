@extends('layout')

@section('content')

        <!-- HEADER -->
        <section class="min-height cards" id="headerID">
            <h1>Te acompañamos a denunciar</h1>
            <div class="row container-cards">
                <div class="col-sm-3">
                    <div class="row select-box">
                        <div id="txt-select-box">

                            <p>Medidas de protecci&#243;n</p><img src="../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                        
                        </div>
                        <div class="options-container">
                            <div class="col option"><a href="/denunciar" class="btn-repo small-btn-repo">Violencia dom&#233;stica</a></div>
                            <div class="col option"><a href="/medidas-de-proteccion" class="btn-repo small-btn-repo sm-btn-repo-selected">Medidas de protecci&#243;n</a></div>
                            <div class="col option"><a href="/solicitud-medidas-de-proteccion" class="btn-repo small-btn-repo">Solicitud Medidas de Protecci&#243;n</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Requisitos para solicitud de Medidas de Protecci&#243;n</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Denuncias Penales</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Oficina de atenci&#243;n y protecci&#243;n a la v&#237;ctima</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Violencia Sexual</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Pensi&#243;n Alimentaria</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">

                        <h2>Solicitud de medidas de protecci&#243;n</h2>
                        
                        <p class="info-text-block">Si usted est&#225; viviendo una situaci&#243;n de violencia y desea solicitar medidas de protecci&#243;n debe ir a los Juzgados de Violencia Dom&#233;stica que se encuentran en el Poder Judicial. <br>El horario de atenci&#243;n es de 8:00 a 12: 00 y de 1:00 a 4:00 pm. Antes de dirigirse, es importante que se asegure del juzgado que le compete seg&#250;n la ubicaci&#243;n geogr&#225;fica de su domicilio, procure llevar a la mano un correo electr&#243;nico al que tenga acceso para que pueda consultar su expediente digital y reciba las notificaciones que el juzgado le env&#237;e.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="btn-up">
            <a href="#headerID"><img src="../imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->

        
@endsection