function validarFormulario() {
    var nombreProduccion = document.getElementById("nombreProduccion");
    var cantidadEntregada = document.getElementById("cantidadEntregada");
    var fechaEntrega = document.getElementById("fechaEntrega");
  
    // Validar que se haya seleccionado una opción en el desplegable
    if (nombreProduccion.value === "") {
      alert("Por favor, seleccione una producción.");
      return false;
    }
  
    // Validar que la cantidad entregada sea un número positivo
    var cantidadValue = parseInt(cantidadEntregada.value);
    if (isNaN(cantidadValue) || cantidadValue < 1) {
      alert("La cantidad entregada debe ser un número positivo mayor o igual a 1.");
      return false;
    }
  
    // Validar que se haya seleccionado una fecha
    if (fechaEntrega.value === "") {
      alert("Por favor, seleccione una fecha de entrega.");
      return false;
    }
  
    return true;
  }
  function validarCantidad(input) {
    if (input.value < 1) {
        input.setCustomValidity("La cantidad debe ser un número positivo mayor o igual a 1.");
    } else {
        input.setCustomValidity("");
    }
}