let menuAbierto = false;
//let selected = document.body.getElementsByClassName("select-box")[0];
let selectedP = document.getElementById("p-select-box");
let selected = document.getElementById("txt-select-box");
let optionContainer = document.body.getElementsByClassName("options-container")[0];

function verificarDerecho(derecho){
    let btnSubmitAgregarDerecho = document.getElementById("btnSubmitAgregarDerecho");
    let form = document.getElementById("formId");
    let padre = document.createElement('p');
    padre.setAttribute("id", "mensaje");
    padre.className = "mensaje-error";
    let mensaje = document.getElementById("mensaje");
    let archivo = derecho.files[0];
    if ((/.(pdf)$/i).test(archivo.name)) {
        console.log("pdf");
        btnSubmitAgregarDerecho.disabled = false;
        mensaje.remove();
    }else{
        btnSubmitAgregarDerecho.disabled = true;        
        padre.innerHTML = "ERROR: El archivo debe tener extensión PDF";
        form.insertBefore(padre, btnSubmitAgregarDerecho);
    }
}

function verificarDerechoModificar(derecho){
    let archivo = derecho.files[0];
    if(archivo != null){
        verificarDerecho(derecho);
    }
}

function mostrarMenu(){
    let menu = document.getElementsByClassName("nav-list")[0];
    let menuHam = document.getElementsByClassName("menu-ham")[0];
    let menuBg = document.getElementsByClassName("nav-list-bg")[0];

    if(!menuAbierto){
        menu.style.left = -90 + "vw";
        menuBg.style.left = -18 + "em";
        menuBg.style.opacity = 1;
        //menuBg.style.display = "block";
        menuHam.style.color = "#6A3381";
        menuAbierto = true;
    }else{
        menu.style.left = -200 + "vw";
        menuBg.style.left = -60 + "em";
        menuBg.style.opacity = 0;
        //menuBg.style.display = "none";
        menuHam.style.color = "#FCF9FF";
        menuAbierto = false;
    }
}

function changeSelected(id){
    selectedP.innerHTML = document.getElementById(id).innerHTML;
    optionContainer.classList.remove("active");
}

document.addEventListener("DOMContentLoaded", (event)=>{
    //console.log("DOM Loaded");

    var pathname = window.location.pathname;
    let navbar = document.getElementsByClassName('nav')[0];
    if(pathname == "/"){
        navbar.style.background = "rgba(195, 149, 232, 0.3)";
        //console.log("Home");
    }else{
        navbar.style.background = "rgba(106, 51, 129, 0.8)";
        //console.log("Other");
    }

    if(pathname != "/" && pathname != "/temas_interes" && pathname != "/nosotras" && pathname != "/redes_comunitarias"){
        selected.addEventListener("click", () => {
            optionContainer.classList.toggle("active");
            //console.log("Click");
        });
    }
})