document.getElementById("btn-signup").addEventListener("click", signup);
document.getElementById("btn-login").addEventListener("click", login);
window.addEventListener("resize", widthPage);

var contenedor_login_signup = document.querySelector(".contenedor-login-signup");
var formulario_login = document.querySelector(".formulario-login");
var formulario_signup = document.querySelector(".formulario-signup");
var caja_trasera_login = document.querySelector(".caja-trasera-login");
var caja_trasera_signup = document.querySelector(".caja-trasera-signup");


function widthPage(){
    if (window.innerWidth > 850) {
        caja_trasera_login.style.display = "block";
        caja_trasera_signup.style.display = "block";
    }else{
        caja_trasera_signup.style.display = "block";
        caja_trasera_signup.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_signup.style.display = "none";
        contenedor_login_signup.style.left = "0px";
    }
}

widthPage();

function login(){

    if(window.innerWidth > 850){
        formulario_signup.style.display = "none";
        contenedor_login_signup.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_signup.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }else{
        formulario_signup.style.display = "none";
        contenedor_login_signup.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_signup.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}


function signup(){
    if(window.innerWidth > 850){
        formulario_signup.style.display = "block";
        contenedor_login_signup.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_signup.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }else{
        formulario_signup.style.display = "block";
        contenedor_login_signup.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_signup.style.display = "none";
        caja_trasera_login.style.opacity = "block";
        caja_trasera_login.style.opacity = "1"
    }
}

//Funciones para nav responsive

function abrirMenuLogin(){
    document.getElementById("left-menu-login").style.width = "330px"
}

function cerrarMenuLogin(){
    document.getElementById("left-menu-login").style.width = "0"
}

