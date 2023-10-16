

document.getElementById('guia-ancla').addEventListener('click', function() {
    var elementoAncla = document.getElementById('fondo-guia');
    
    
    if (elementoAncla) {
        elementoAncla.scrollIntoView({ behavior: 'smooth' });
    }
});


document.getElementById('guia-ancla2').addEventListener('click', function() {
    var elementoAnclaGuia2 = document.getElementById('fondo-guia');
    
    
    if (elementoAnclaGuia2) {
        elementoAnclaGuia2.scrollIntoView({ behavior: 'smooth' });
    }
});


document.getElementById('mapa-ancla').addEventListener('click', function() {
    var elementoAncla = document.getElementById('fondo-mapa');

    // Verifica si el elemento ancla existe
    if (elementoAncla) {
    elementoAncla.scrollIntoView({ behavior: 'smooth' });
    }
});

document.getElementById('mapa-ancla2').addEventListener('click', function() {
    var elementoAnclaMapa2 = document.getElementById('fondo-mapa');
    
    
    if (elementoAnclaMapa2) {
        elementoAnclaMapa2.scrollIntoView({ behavior: 'smooth' });
    }
});

//Funciones para abrir y cerrar el menu responsive

function abrirMenu(){
    document.getElementById("left-menu").style.width = "330px"
}

function cerrarMenu(){
    document.getElementById("left-menu").style.width = "0"
}

function abrirMenuPhp(){
    document.getElementById("left-menu-php").style.width = "330px"
}

function cerrarMenuPhp(){
    document.getElementById("left-menu-php").style.width = "0"
}


