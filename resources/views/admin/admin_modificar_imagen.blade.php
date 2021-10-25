<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Inicio - Punto Violeta</title>
</head>

<body>

    <section class="container-fluid min-height">

        <nav class="nav-logo-admin">
            <a class="logo-nav" href="./admin_login.html"><span>PUNTO VIOLETA</span></a>
        </nav>

        <!-- FORMULARIO -->
        <div class="row form-admin min-height">
            <div class="col-12">
                <h1>Modificar Imagen</h1>
            </div>

            <div class="col-12">
                <form action="#">
                    
                    <div class="row admin-select-box">
                        <div id="txt-select-box">
                            <p>Infografía</p><img src="../../imgs/svg/icon_dropdown.svg" alt="icon_dropdown">
                        </div>
                        <div class="options-container">
                            <div onclick="changeSelected(id)" class="col option"><span class="btn-repo">Infografía</span></div>
                            <div class="col option"><span class="btn-repo">Fotografía</span></div>
                        </div>
                    </div>

                    <input type="text" placeholder="Título *">
                    <textarea name="descripcion" id="descripcion-derecho" cols="30" rows="5" placeholder="Descripción *"></textarea>
                    <input type="file"></input>
                    <button type="submit">Modificar</button>
                </form>
            </div>
        </div>
        <!-- FORMULARIO -->

        <!-- FOTTER -->
        <footer class="row footer">
            <div class="col-sm left-text">
                <p>©2021</p>
                <p>Todos los derechos reservados</p>
            </div>
            <div class="col-sm icons-footer">
                <img src="../../imgs/svg/icon_punto-violeta.svg" alt="Logo Punto Violeta">
            </div>
            <div class="col-sm icons-footer">
                <img src="../../imgs/svg/icon_ret.svg" alt="Logo RET">
            </div> 
            <div class="col-sm right-text">
                <p>By Willy Lara Campos</p>
                <p>By Ronald Chaves González</p>
                <p>By Benjamín Álvarez Rodríguez</p>
            </div>
        </footer>
        <!-- FOTTER -->

    </section>

    <script src="../../js/main.js"></script>

</body>

</html>