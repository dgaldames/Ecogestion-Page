

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

