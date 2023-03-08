let seconds = 250;
let redirect = "../../templates/views/error.php";

document.getElementById("txtSeconds").innerHTML = seconds

// Actualizar el contador cada segundo
let show = setInterval(function () {
    // Mostrar el tiempo restante en la página
    document.getElementById("txtSeconds").innerHTML = seconds;

    // Disminuir el tiempo restante
    seconds--;

    // Si el contador llega a cero, detener el temporizador y redirigir a otra página
    if (seconds < 0) {
        clearInterval(show);
        window.location.href = redirect;
    }
}, 1000);