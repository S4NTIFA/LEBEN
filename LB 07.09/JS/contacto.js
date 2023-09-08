// Asignando variables por ID del formulario 
const name_va = document. getElementById('name');
const phone_va = document. getElementById('phone');
const email_va = document. getElementById('email');
const menssage_va = document. getElementById('menssage');

// Asignacion Expreciones regulares 

const nameRegex = /^[a-zA-Z]|\s{3,20}$/;
const phoneRegex = /^\d{7,10}$/;
const emailRegex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
const menssage = /^[a-zA-Z0-9\s]{10,50}$/;

// Condicional de validacion y estiloc

name_va.addEventListener('input', function() {
    if (!validaName(name_va.value)){
        name_va.style.border = '3px solid red';
    } else {
        name_va.style.border = '3px solid green';
    }
});
phone_va.addEventListener('input', function() {
    if (!validaPhone(phone_va.value)){
        phone_va.style.border = '3px solid red';
    } else {
        phone_va.style.border = '3px solid green';
    }
});
email_va.addEventListener('input', function() {
    if (!validaEmail(email_va.value)){
        email_va.style.border = '3px solid red';
    } else {
        email_va.style.border = '3px solid green';
    }
});
menssage_va.addEventListener('input', function() {
    if (!validaMessage(menssage_va.value)){
        menssage_va.style.border = '3px solid red';
    } else {
        menssage_va.style.border = '3px solid green';
    }
});

// Crea variable de validacion 

function validaName(name) {
    return nameRegex.test(name);
}

function validaPhone (phone) {
    return phoneRegex.test(phone)
}

function validaEmail (email) {
    return emailRegex.test(email)
}

function validaMessage (menssage) {
    return menssageRegex.test(menssage)
}

// Condicional de validacion y estilo

