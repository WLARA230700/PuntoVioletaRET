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
                            <div class="col option"><a href="/requisitos-medidas-de-proteccion" class="btn-repo small-btn-repo">Requisitos para solicitud de Medidas de Protecci&#243;n</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Denuncias Penales</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Oficina de atenci&#243;n y protecci&#243;n a la v&#237;ctima</a></div>
                            <div class="col option"><a href="/violencia-sexual" class="btn-repo small-btn-repo sm-btn-repo-selected">Violencia Sexual</a></div>
                            <div class="col option"><a href="/pension-alimentaria" class="btn-repo small-btn-repo">Pensi&#243;n Alimentaria</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">

                        <h2>Violencia sexual</h2>
                        
                        <p class="info-text-block">La violencia sexual es aquella acción que obliga a una persona a mantener contacto de carácter sexual, físico o verbal, o a participar en otras interacciones sexuales sin su voluntad.<br>Ocurre si la persona es obligada a realizar tales actos mediante el uso de fuerza, intimidación, coerción, chantaje, soborno, manipulación, amenaza o cualquier otro mecanismo que anule o limite la voluntad personal. También hay violencia sexual en los casos en los cuales la persona agredida es obligada a realizar actos sexuales con terceras personas.<br>La violencia sexual también puede darse dentro de las relaciones de pareja, sean éstas de noviazgo, unión libre o matrimonio. Si usted es, o ha sido víctima de violencia sexual, no se sienta sola, existen instituciones y personas que la pueden ayudar.</p>

                        <h3 class="subtitulo_bloque">&#191;A d&#243;nde acudir?</h3>

                        <p class="info-text-block">Lo m&#225;s importante es que puedas acudir a un centro m&#233;dico de inmediato para que puedan brindarte la atenci&#243;n m&#233;dica requerida.<br>El personal m&#233;dico aplicar&#225; el protocolo denominado: “Protocolo de las 72 hrs”.</p>

                        <h3 class="subtitulo_bloque">&#191;De qu&#233; trata?</h3>

                    </div>
                </div>
            </div>
        </section>
        <div class="btn-up">
            <a href="#headerID"><img src="../imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->

        
@endsection