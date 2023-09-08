// Asignando variables por ID del formulario 

const correo_va = document.getElementById('correo');
const contraseña_va = document.getElementById('contraseña');

// Asignacion Expreciones regulares 

const correoRegex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
const contraseñaRegex = /^(?=.*[a-zA-Z](?=.*[0-9])(?=.*[-+#@.]).{8,}$/;

// Condicional de validacion y estilo

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

function validaCorreo(correo) {
    return correoRegex.test(correo);
}

function validaContra (contraseña) {
    return contraseñaRegex.test(contraseña)
}