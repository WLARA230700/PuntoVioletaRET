let menuAbierto = false;
//let selected = document.body.getElementsByClassName("select-box")[0];
let selected = document.getElementById("txt-select-box");
let optionContainer = document.body.getElementsByClassName("options-container")[0];

function mostrarMenu(){
    let menu = document.getElementsByClassName("nav-list")[0];
    let menuHam = document.getElementsByClassName("menu-ham")[0];
    let menuBg = document.getElementsByClassName("nav-list-bg")[0];

    if(!menuAbierto){
        menu.style.left = -21 + "em";
        menuBg.style.display = "block";
        menuHam.style.color = "#6A3381";
        menuAbierto = true;
    }else{
        menu.style.left = -42 + "em";
        menuBg.style.display = "none";
        menuHam.style.color = "#FCF9FF";
        menuAbierto = false;
    }
}

function changeSelected(id){
    selected.innerHTML = document.getElementById(id).innerHTML;
    optionContainer.classList.remove("active");
}

document.addEventListener("DOMContentLoaded", (event)=>{
    console.log("DOM Loaded");

    selected.addEventListener("click", () => {
        optionContainer.classList.toggle("active");
        console.log("Click");
    });
})