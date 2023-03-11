function typeUser(txtNum) {
	// Obtiene los números generados automáticamente
  	var numbers = txtNum.value;

	// Llena el campo de texto con los números generados
  	document.getElementById("txtNum-card").value = numbers;
}