let menuAbierto = false;
let screen = window.innerWidth;
//let selected = document.body.getElementsByClassName("select-box")[0];
let selectedP = document.getElementById("p-select-box");
let selected = document.getElementById("txt-select-box");
let optionContainer = document.body.getElementsByClassName("options-container")[0];
let menu = document.getElementsByClassName("nav-list")[0];
let menuHam = document.getElementsByClassName("menu-ham")[0];

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
    if(screen <= 576){
        if(!menuAbierto){
            menu.style.left = -90 + "vw";
            menuHam.style.color = "#6A3381";
            menuAbierto = true;
        }else{
            menu.style.left = -200 + "vw";
            menuHam.style.color = "#FCF9FF";
            menuAbierto = false;
        }
        //console.log("phone");
    }else{
        if(!menuAbierto){
            menu.style.left = -96 + "vw";
            menuHam.style.color = "#6A3381";
            menuAbierto = true;
        }else{
            menu.style.left = -200 + "vw";
            menuHam.style.color = "#FCF9FF";
            menuAbierto = false;
        }
        //console.log("tablet");
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

    window.addEventListener("resize", function(event){
        screen = window.innerWidth;
        //console.log("width: " + screen);
        if(screen <= 992){
            if(menuAbierto){
                menu.style.left = -200 + "vw";
                menuHam.style.color = "#FCF9FF";
                menuAbierto = false;
            }
        }
    });
    
})