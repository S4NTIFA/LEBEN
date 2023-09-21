document.addEventListener("DOMContentLoaded", function () {
    const email = document.getElementById("email")
    const pass = document.getElementById("password")
    const form = document.getElementById("form")
    const parrafo = document.getElementById("warnings")
    
    form.addEventListener("submit", e=>{
        e.preventDefault()
        let warnings = ""
        let entrar = false
        let regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
        parrafo.innerHTML = ""
        if(!regexEmail.test(email.value)){
            warnings += "el email no es valido <br>"
            entrar = true
        }
        if(pass.value.length <8){
            warnings += "la contraseña no es valida <br>"
            entrar = true
        }
        if(entrar){
            parrafo.innerHTML = warnings
        }
        else{
            window.location.href = "../HTML/dashboard.html"
            form.reset();
        }
    });
    });