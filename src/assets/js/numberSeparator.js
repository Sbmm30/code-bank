const input = document.getElementById('txtNum-card');

input.addEventListener('input', (event) => {
  // Eliminar cualquier espacio existente en el valor del campo de entrada
  const inputValue = event.target.value.replace(/\s/g, '');
  
  // Insertar un espacio después de cada cuarto carácter ingresado
  const newValue = inputValue.replace(/(.{4})/g, '$1 ');

  // Actualizar el valor del campo de entrada
  event.target.value = newValue.trim();

  // Limitar la longitud del valor del campo de entrada a 16 caracteres
  if (event.target.value.length > 19) {
    event.target.value = event.target.value.slice(0, 19);
  }
});
