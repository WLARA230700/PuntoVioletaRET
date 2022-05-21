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
                            <div class="col option"><a href="/medidas-de-proteccion" class="btn-repo small-btn-repo">Medidas de protecci&#243;n</a></div>
                            <div class="col option"><a href="/solicitud-medidas-de-proteccion" class="btn-repo small-btn-repo">Solicitud Medidas de Protecci&#243;n</a></div>
                            <div class="col option"><a href="/requisitos-medidas-de-proteccion" class="btn-repo small-btn-repo sm-btn-repo-selected">Requisitos para solicitud de Medidas de Protecci&#243;n</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Denuncias Penales</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Oficina de atenci&#243;n y protecci&#243;n a la v&#237;ctima</a></div>
                            <div class="col option"><a href="/violencia-sexual" class="btn-repo small-btn-repo">Violencia Sexual</a></div>
                            <div class="col option"><a href="/pension-alimentaria" class="btn-repo small-btn-repo">Pensi&#243;n Alimentaria</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">

                        <h2>Requisitos para solicitar medidas de protecci&#243;n</h2>
                        
                        <p class="info-text-block">Presentar carn&#233; de refugio o pasaporte. Si no tiene documento de identificaci&#243;n, de igual manera, puede hacer una denuncia directa. Debe aportar su nombre, los apellidos y direcci&#243;n, as&#237; como los datos de la persona agresora, si los conoce, explicar los hechos ocurridos  e indicar un lugar para recibir notificaciones.</p>

                        <ul class="info-text-bullets">
                            <li><span>¿Qué derechos tengo tras hacer una denuncia por violencia doméstica?</span> <br> Ser atendida por personal idóneo y calificado; con respeto y empatía.</li>
                            <li>A declarar en un lugar privado y seguro.</li>
                            <li>Que se respete la confidencialidad de la informaci&#243;n que brinde.</li>
                            <li>A recibir toda la informaci&#243;n en un lenguaje claro, sencillo y comprensible.</li>
                            <li>Si tiene alguna discapacidad, a recibir los servicios de apoyo y ayuda t&#233;cnica necesarios para participar en los procesos judiciales.</li>
                        </ul>

                        <p class="info-text-block">Recuerde que las medidas deben serle entregadas el mismo d&#237;a y tienen la extensi&#243;n de 1 a&#241;o con posibilidad de prorroga. Las mujeres adultas mayores, ind&#237;genas, migrantes, solicitantes de refugio, menores de edad, con discapacidad, deben recibir una atenci&#243;n acorde a sus necesidades y caracter&#237;sticas particulares sin discriminaci&#243;n de clase, etnia, orientaci&#243;n sexual o nacionalidad.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="btn-up">
            <a href="#headerID"><img src="../imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->

        
@endsection