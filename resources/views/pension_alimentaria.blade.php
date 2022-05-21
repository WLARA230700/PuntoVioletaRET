@extends('layout')

@section('content')

        <!-- HEADER -->
        <section class="min-height cards" id="headerID">
            <h1>Te acompañamos a denunciar</h1>
            <div class="row container-cards">
                <div class="col-sm-3">
                    <div class="row select-box">
                        <div id="txt-select-box">

                            <p>Pensi&#243;n alimentaria</p><img src="../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                        
                        </div>
                        <div class="options-container">
                            <div class="col option"><a href="/denunciar" class="btn-repo small-btn-repo">Violencia dom&#233;stica</a></div>
                            <div class="col option"><a href="/medidas-de-proteccion" class="btn-repo small-btn-repo">Medidas de protecci&#243;n</a></div>
                            <div class="col option"><a href="/solicitud-medidas-de-proteccion" class="btn-repo small-btn-repo">Solicitud Medidas de Protecci&#243;n</a></div>
                            <div class="col option"><a href="/requisitos-medidas-de-proteccion" class="btn-repo small-btn-repo">Requisitos para solicitud de Medidas de Protecci&#243;n</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Denuncias Penales</a></div>
                            <div class="col option"><a href="/derechos/Documentación" class="btn-repo small-btn-repo">Oficina de atenci&#243;n y protecci&#243;n a la v&#237;ctima</a></div>
                            <div class="col option"><a href="/violencia-sexual" class="btn-repo small-btn-repo">Violencia Sexual</a></div>
                            <div class="col option"><a href="/pension-alimentaria" class="btn-repo small-btn-repo sm-btn-repo-selected">Pensi&#243;n Alimentaria</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">

                        <h2>Pensi&#243;n alimentaria</h2>
                        
                        <p class="info-text-block">Es un derecho reconocido por la ley mediante el cual una persona recibe dinero de otra como resultado de una orden judicial.<br>La persona que lo da y la que lo recibe est&#225;n unidas, o lo estuvieron, por parentesco, filiaci&#243;n sangu&#237;nea, legal o reconocimiento judicial.</p>

                        <ul class="info-text-bullets">
                            <li>Los gastos que contempla una pensi&#243;n alimentaria son: Comida, Habitaci&#243;n, Vestimenta, Educaci&#243;n, Atenci&#243;n M&#233;dica o medicamentos, Diversi&#243;n, Transporte, Otros gastos como pago de recibos de agua y luz. Gastos Extraordinarios (m&#233;dicos, de educaci&#243;n, sepelio, terapias o atenci&#243;n especializada).</li>
                        </ul>

                        <h3 class="subtitulo_bloque">&#191;Qui&#233;n est&#225; obligado a dar pensi&#243;n alimentaria?</h3>

                        <ul class="info-text-bullets">
                            <li>Los c&#243;nyuges entre s&#237;.</li>
                            <li>Los padres o las madres a sus hijos o hijas menores o mayores de edad que presenten una discapacidad que les impida valerse por sí mismos.</li>
                            <li>Los padres o las madres a sus hijos o hijas mayores de 18 a&#241;os pero menores de 25 a&#241;os, siempre y cuando demuestren que todav&#237;a est&#225;n estudiando, con una carga acad&#233;mica razonable y que obtienen buen rendimiento, para la obtenci&#243;n de una profesi&#243;n u oficio.</li>
                            <li>Los hijos o hijas a su padre o madre.</li>
                        </ul>

                        <h3 class="subtitulo_bloque">&#191;C&#243;mo solicitar una pensi&#243;n alimentaria?</h3>

                        <p class="info-text-block">Pres&#233;ntese en el juzgado contravencional o de pensiones alimentarias m&#225;s cercano. Busque la oficina m&#225;s cercana a usted. Indique sus datos personales e informaci&#243;n general de la persona que va a demandar. Si tiene pruebas de gastos ap&#243;rtelas. Indique el monto de pensi&#243;n alimentaria que requiere y explique las necesidades de las personas beneficiarias y las posibilidades econ&#243;micas de la persona demandada si las conoce.</p>

                        <h3 class="subtitulo_bloque">&#191;Cu&#225;les son los pasos del proceso?</h3>

                        <p class="info-text-block"><span>Presentaci&#243;n de la demanda verbal o por escrito. &#201;sta debe contener:</span></p>

                        <ul class="info-text-bullets">
                            <li>Nombre, apellidos y calidades del o la gestionante y del presunto obligado o la presunta obligada.</li>
                            <li>Nombre y apellidos de los o las personas beneficiadas.</li>
                            <li>Monto solicitado</li>
                            <li>Menci&#243;n de las posibilidad econ&#243;micas de la persona demandada y las necesidades del de quien demanda.</li>
                            <li>Menci&#243;n y/o aporte de pruebas: documentos, nombres y datos de los testigos o testigas.</li>
                            <li>Direcci&#243;n y medio para notificaciones de ambas partes.</li>
                        </ul>

                        <p class="info-text-block"><span>Evaluaci&#243;n inicial: </span><br>En esta etapa el juez o la jueza decide si le da curso a la demanda y en el mismo documento, si procede,  fija una pensi&#243;n provisional que el demandado o la demandada debe pagar dentro de los tres d&#237;as h&#225;biles despu&#233;s de la notificaci&#243;n, a&#250;n cuando no est&#233; de acuerdo. Aunque se oponga, la persona demandada debe pagar, de lo contrario puede ser detenido o detenida.</p>

                        <p class="info-text-block"><span>Notificaci&#243;n y recursos: </span><br>La resoluci&#243;n inicial del juez o de la jueza se notifica a la persona demandada personalmente o en su casa de habitaci&#243;n.  La fecha del mes en que se efect&#250;e esta notificaci&#243;n ser&#225; la fecha en que ella deber&#225; depositar en adelante el monto de pensi&#243;n alimentaria  Notificadas todas las partes, incluyendo al Patronato Nacional de la Infancia, si hubiere menores de edad,  ellas tienen tres d&#237;as para oponerse –mediante una solicitud de revocatoria o apelaci&#243;n–  pedir la revocatoria, la apelaci&#243;n o ambas, en caso de que alguna de las partes no est&#233; de acuerdo con el monto provisional fijado en el proceso.</p>

                        <p class="info-text-block"><span>Contestación de la demanda: </span><br>Si el juez o la jueza le da curso a la demanda, le da un plazo de 8 días a la persona demandada para que conteste y ofrezca pruebas (puede ser hasta 30 días si vive fuera del país) y presente todos los recursos de ley.</p>

                        <p class="info-text-block"><span>Audiencia de conciliación: </span><br>Esta reuni&#243;n busca que las partes libremente lleguen a un acuerdo en cuanto al monto. Si no hay acuerdo, en la misma audiencia se evacuar&#225;n las pruebas.</p>

                        <p class="info-text-block"><span>Dictado de la sentencia: </span><br>El juez o la jueza define el monto o declara sin lugar la demanda.</p>

                        <p class="info-text-block"><span>Plazo para apelar: </span><br>Si alguna de las partes no est&#225; de acuerdo con la sentencia, tiene tres d&#237;as h&#225;biles, despu&#233;s de la notificaci&#243;n de la misma, para apelar.</p>

                        <h3 class="subtitulo_bloque">&#191;Cu&#225;l es la informaci&#243;n o documentaci&#243;n que se debe presentar?</h3>

                        <p class="info-text-block"><span>La cantidad, tipo y cantidad de pruebas depende de cada caso en particular.</span> Los casos m&#225;s sencillos son aquellos en los cuales la persona demandada tiene el salario reportado ante la Caja Costarricense de Seguro Social (CCSS). Cuando la persona tiene pocos ingresos, se fija un monto con base en el salario m&#237;nimo. Pero, cuando hay mayores ingresos, el monto se fija seg&#250;n el nivel de vida y al que estaba acostumbrada la persona menor de edad. Usualmente se requiere lo siguiente:</p>

                        <ul class="info-text-bullets">
                            <li>Certificaciones del Registro Civil de matrimonio, nacimiento.</li>
                            <li>Certificaci&#243;n de la sentencia de divorcio, extendida por el Juzgado de Familia, cuando en dicho divorcio se haya establecido el derecho alimentario.</li>
                            <li>Sentencia declaratoria de uni&#243;n de hecho, dictada por el juzgado de Familia en caso de que hubiese existido convivencia de hecho.</li>
                            <li>Recibo de pago de la casa de habitaci&#243;n (pr&#233;stamo o alquiler).</li>
                            <li>Cualquier otro que refleje gastos de los beneficiarios (as).</li>
                            <li>Orden patronal de la persona demandada.</li>
                            <li>Constancia de salario de la persona demandada.</li>
                            <li>Recibos y facturas de gastos.</li>
                            <li>Nombre y n&#250;mero de c&#233;dula de las personas a quienes el o la demandante ofrece como testigos o testigas para que declaren sobre las necesidades de los beneficiarios o las beneficiarias de la pensi&#243;n, y sobre la ocupaci&#243;n y/o el ingreso del demandado o la demandada.</li>
                        </ul>

                        <h3 class="subtitulo_bloque">&#191;Qu&#233; es la restricci&#243;n migratoria en materia de pensiones?</h3>

                        <p class="info-text-block">Es el impedimento de salida del pa&#237;s que tiene la persona obligada a pagar una pensi&#243;n alimentaria si no tiene la autorizaci&#243;n expresa para hacerlo de quien lo demand&#243; o su representante legal, o si no ha garantizado el pago de,  por lo menos, doce mensualidades de cuota alimentaria m&#225;s el aguinaldo.</p>

                        <h3 class="subtitulo_bloque">&#191;Qu&#233; es la restricci&#243;n migratoria en materia de pensiones?</h3>

                        <p class="info-text-block">El pago debe depositarse mensualmente a nombre del beneficiario o la beneficiaria en una cuenta  bancaria designada por el juzgado.<br>El Poder Judicial mediante una alianza con el Banco de Costa Rica, trabaja en un sistema que le permite a los y las usuarias realizar dep&#243;sitos o retiros de dinero en todas las oficinas del BCR a trav&#233;s de un &#250;nico n&#250;mero de expediente. A julio de 2015 los Circuitos Judiciales automatizados en esta materia son:</p>

                        <ul class="info-text-bullets">
                            <li>Primer y Segundo Circuitos Judiciales de San Jos&#233;.</li>
                            <li>Circuitos Judiciales de Cartago, Heredia, Puntarenas, P&#233;rez Zeled&#243;n y Liberia.</li>
                            <li>Juzgado Civil y Menor Cuant&#237;a de Desamparados.</li>
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