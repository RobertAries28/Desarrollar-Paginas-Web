var name = document.getElementById('nombres');
var apell = document.getElementById('apellidos');
var tele = document.getElementById('telefono');
var mens = document.getElementById('mensaje');
var correo = document.getElementById('correo');
var error = document.getElementById('error');
error.style.color = 'red';
error.style.fontWeight = 'bold';
var form = document.getElementById('formulario');

form.addEventListener('submit', function(evt) {
    evt.preventDefault();

    console.log("Mensaje enviado");


    var mensajesError = [];

    if (nombres.value === null || nombres.value === '') {
        mensajesError.push('Ingresa tu nombre');
    }

    if (apellidos.value === null || apellidos.value === '') {
        mensajesError.push('Ingresa tus apellidos');
    }

    if (telefono.value === null || telefono.value === '') {
        mensajesError.push('Ingresa su telefono');
    }

    if (correo.value === null || correo.value === '') {
        mensajesError.push('Ingresa su correo');
    }

    if (mensaje.value === null || mensaje.value === '') {
        mensajesError.push('Ingresa tu mensaje');
    }

    error.innerHTML = mensajesError.join(',');


    return false;
});