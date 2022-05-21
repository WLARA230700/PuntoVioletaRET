@extends('layout')

@section('content')

        <!-- HEADER -->
        <section class="min-height cards" id="headerID">
            <h1>Te acompañamos a denunciar</h1>
            <div class="row container-cards">
                <div class="col-sm-3">
                    <div class="row select-box">
                        <div id="txt-select-box">

                            <p>Violencia doméstica</p><img src="../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                        
                        </div>
                        <div class="options-container">
                            <div class="col option"><a href="/denunciar" class="btn-repo sm-btn-repo-selected">Violencia dom&#233;stica</a></div>
                            <div class="col option"><a href="/medidas-de-proteccion" class="btn-repo small-btn-repo">Medidas de protecci&#243;n</a></div>
                            <div class="col option"><a href="/solicitud-medidas-de-proteccion" class="btn-repo small-btn-repo">Solicitud Medidas de Protecci&#243;n</a></div>
                            <div class="col option"><a href="/requisitos-medidas-de-proteccion" class="btn-repo small-btn-repo">Requisitos para solicitud de Medidas de Protecci&#243;n</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Denuncias Penales</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Oficina de atenci&#243;n y protecci&#243;n a la v&#237;ctima</a></div>
                            <div class="col option"><a href="/violencia-sexual" class="btn-repo small-btn-repo">Violencia Sexual</a></div>
                            <div class="col option"><a href="/pension-alimentaria" class="btn-repo small-btn-repo">Pensi&#243;n Alimentaria</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">

                        <h2>Violencia doméstica</h2>
                        
                        <p class="info-text-block">La violencia dom&#233;stica es cualquier situaci&#243;n de maltrato <span>f&#237;sico, psicol&#243;gico, sexual o patrimonial</span>, en el que la persona que realiza el acto violento tiene o tuvo una relaci&#243;n de consanguinidad, afinidad o adopci&#243;n con la persona agredida. <br> La ley Contra la Violencia Dom&#233;stica permite que madres, personas mayores de 12 a&#241;os, personas de 60 o m&#225;s, con discapacidad, aquellas que se encuentren en una  relaci&#243;n  de pareja o est&#233;n viviendo violencia por parte de su expareja puedan solicitar medidas de protecci&#243;n que les garanticen la vida, la integridad y la dignidad.</p>
                        <ul class="info-text-bullets">
                            <li>hh</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="btn-up">
            <a href="#headerID"><img src="../imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->

        
@endsection