//Funciones para nav responsive

function abrirMenuForo(){
    document.getElementById("left-menu-foro").style.width = "330px"
}

function cerrarMenuForo(){
    document.getElementById("left-menu-foro").style.width = "0"
}

function abrirMenuForoPhp(){
    document.getElementById("left-menu-php-foro").style.width = "330px"
}

function cerrarMenuForoPhp(){
    document.getElementById("left-menu-php-foro").style.width = "0"
}

document.getElementById('send').addEventListener('click', function() {
    alert('Debes iniciar sesión para interactuar con el foro.');
});

document.getElementById('comments').addEventListener('click', function() {
    alert('Debes iniciar sesión para interactuar con el foro.');
});