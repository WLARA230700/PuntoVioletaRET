@extends('layout')

@section('content')
        <!-- HEADER -->
        <section class="min-height cards" id="headerID">
            <h1>Derechos</h1>
            <div class="row container-cards">
                <div class="col-sm-3">
                    <div class="row select-box">
                        <div id="txt-select-box">
                            <p>Documentación</p><img src="../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                        </div>
                        <div class="options-container">
                            <div class="col option"><a href="#" class="btn-repo">Documentación</a></div>
                            <div class="col option"><a href="#" class="btn-repo">Salud</a></div>
                            <div class="col option"><a href="#" class="btn-repo">Educación</a></div>
                            <div class="col option"><a href="#" class="btn-repo">Vivienda</a></div>
                            <div class="col option"><a href="#" class="btn-repo">Laborales</a></div>
                            <div class="col option"><a href="#" class="btn-repo">Permisos Laborales</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <h2>Derecho a la Documentación</h2>
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus at augue ut semper.
                            Praesent mattis sed dui eget placerat. Nullam non erat rutrum magna pharetra luctus eget id
                            erat.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 card-derechos" data-bs-toggle="modal" data-bs-target="#modalDocumentos">
                            <img src="../imgs/svg/document_icon.svg" alt="Documento">
                            <p class="card-p">Título del documento</p>
                        </div>
                        <div class="col-sm-4 card-derechos">
                            <img src="../imgs/svg/document_icon.svg" alt="Documento">
                            <p class="card-p">Título del documento con una extensión larga </p>
                        </div>
                        <div class="col-sm-4 card-derechos">
                            <img src="../imgs/svg/document_icon.svg" alt="Documento">
                            <p class="card-p">Título del documento con una extensión exageradamente larga</p>
                        </div>
                        <div class="col-sm-4 card-derechos">
                            <img src="../imgs/svg/document_icon.svg" alt="Documento">
                            <p class="card-p">Título del documento</p>
                        </div>
                        <div class="col-sm-4 card-derechos">
                            <img src="../imgs/svg/document_icon.svg" alt="Documento">
                            <p class="card-p">Título del documento con una extensión larga </p>
                        </div>
                        <div class="col-sm-4 card-derechos">
                            <img src="../imgs/svg/document_icon.svg" alt="Documento">
                            <p class="card-p">Título del documento con una extensión exageradamente larga</p>
                        </div>
                        <div class="col-sm-4 card-derechos">
                            <img src="../imgs/svg/document_icon.svg" alt="Documento">
                            <p class="card-p">Título del documento</p>
                        </div>
                        <div class="col-sm-4 card-derechos">
                            <img src="../imgs/svg/document_icon.svg" alt="Documento">
                            <p class="card-p">Título del documento con una extensión larga </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="btn-up">
            <a href="#headerID"><img src="../imgs/svg/btn_up.svg" alt="btn_up"></a>
        </div>
        <!-- HEADER -->

        <!-- MODAL -->
        <div class="modal fade" id="modalDocumentos" tabindex="-1" role="dialog"
            aria-labelledby="derecho" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modales" role="document">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-sm-6 col-imagen-modal">
                            <span class="span-modal-left d-flex align-content-center flex-wrap"><img src="../imgs/svg/icon_document.svg" alt=""></span>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="modal-title" id="exampleModalLongTitle">Derecho 1</h5>
                            <div class="descripcion-modal">
                                <p>Descripción del documento
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            
                            <button type="button" class="btn-repo"><span><img src="../imgs/svg/icon_download.svg" alt="Descargar"></span>Descargar</button>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL -->
@endsection