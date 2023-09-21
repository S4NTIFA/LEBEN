function validarFormulario() {
    var categoria = document.getElementById("categoria").value;
    var talla = document.getElementById("talla").value;
    var fechaEntrada = document.getElementById("fechaEntrada").value;

    if (categoria === "" || talla === "") {
        alert("Por favor, seleccione una categoría y una talla.");
        return false;
    }

    if (fechaEntrada === "") {
        alert("Por favor, seleccione una fecha de entrada.");
        return false;
    }

    // Si todo está bien, el formulario se envía
    return true;
}
function validarCantidad(input) {
    if (input.value < 1) {
        input.setCustomValidity("La cantidad debe ser un número positivo mayor o igual a 1.");
    } else {
        input.setCustomValidity("");
    }
}