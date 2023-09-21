document.addEventListener("DOMContentLoaded", function () {
    const email = document.getElementById("email")
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
        if(entrar){
            parrafo.innerHTML = warnings
        }
        else{
            alert("Se ha enviado un correo de recuperacion")
            form.reset();
        }
});
    });