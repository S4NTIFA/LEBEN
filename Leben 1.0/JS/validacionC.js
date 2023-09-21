document.addEventListener("DOMContentLoaded", function () {
    const nombre = document.getElementById("name")
    const email = document.getElementById("email")
    const tel = document.getElementById("phone")
    const mensaje = document.getElementById("message")
    const form = document.getElementById("form")
    const parrafo = document.getElementById("warnings")
    
    form.addEventListener("submit", e=>{
        e.preventDefault()
        let warnings = ""
        let entrar = false
        let regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
        let regexTel = /^3\d{9}$/
        parrafo.innerHTML = ""
        if(nombre.value.length <6){
            warnings += "El nombre no es valido <br>"
            entrar = true
        } 
        if(!regexEmail.test(email.value)){
            warnings += "El email no es valido <br>"
            entrar = true
        }
        if(!regexTel.test(tel.value)){
            warnings += "El numero de telefono no es valido <br>"
            entrar = true
        }
        if(mensaje.value.length <30){
            warnings+= "El Mensaje es muy corto"
            entrar = true
        }
        if(entrar){
            parrafo.innerHTML = warnings
        }
        else{
            alert("El mensaje se envio correctamente")
            form.reset();
        }
    });
    });