// Asignando variables por ID del formulario 

const nombres_va = document. getElementById('nombres');
const apellidos_va = document. getElementById('apellidos');
const correo_va = document. getElementById('correo');
const contraseña_va = document. getElementById('password');

// Asignacion Expreciones regulares 

const nombresRegex = /^[a-zA-Z]|\s{3,20}$/;
const apellidosRegex = /^[a-zA-Z]|\s{3,20}$/;
const correoRegex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
const contraseñaRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;

// Condicional de validacion y estiloc

nombres_va.addEventListener('input', function() {
    if (!validaNombres(nombres_va.value)){
        nombres_va.style.border = '3px solid red';
    } else {
        nombres_va.style.border = '3px solid green';
    }
});
apellidos_va.addEventListener('input', function() {
    if (!validaApellidos(apellidos_va.value)){
        apellidos_va.style.border = '3px solid red';
    } else {
        apellidos_va.style.border = '3px solid green';
    }
});
correo_va.addEventListener('input', function() {
    if (!validaCorreo(correo_va.value)){
        correo_va.style.border = '3px solid red';
    } else {
        correo_va.style.border = '3px solid green';
    }
});
contraseña_va.addEventListener('input', function() {
    if (!validaContra(contraseña_va.value)){
        contraseña_va.style.border = '3px solid red';
    } else {
        contraseña_va.style.border = '3px solid green';
    }
});

// Crea variable de validacion 

function validaNombres(nombres) {
    return nombresRegex.test(nombres);
}
function validaApellidos(apellidos) {
    return apellidosRegex.test(apellidos);
}
function validaCorreo(correo) {
    return correoRegex.test(correo);
}
function validaContra(password) {
    return contraseñaRegex.test(password);
}
