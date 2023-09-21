function validarFormulario() {
    var tipoInsumos = document.getElementsByName("tipoInsumos")[0];
    var fechaEntrada = document.getElementsByName("fechaEntrada")[0];
  
    // Validar que se haya ingresado el tipo de insumo
    if (tipoInsumos.value.trim() === "") {
      alert("Por favor, ingrese el tipo de insumo.");
      return false;
    }
  
    // Validar que se haya seleccionado una fecha de entrada
    if (fechaEntrada.value === "") {
      alert("Por favor, seleccione una fecha de entrada.");
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
  