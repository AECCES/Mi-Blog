<?php
// Verificamos si los datos se enviaron por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Limpiamos y guardamos los datos en variables para mayor seguridad
    $nombre = htmlspecialchars($_POST['nombre']);
    $tipo = htmlspecialchars($_POST['tipo']);
    $email = htmlspecialchars($_POST['email']);
    $desc = htmlspecialchars($_POST['desc']);

    // Mostramos una página de respuesta bonita al usuario
    echo "<h1>¡Gracias por responder, " . $nombre . "!</h1>";
    echo "<p>Tu opinión sobre la aberración artística: <strong>" . $tipo . "</strong></p>";
    echo "<p>Guardaremos tu correo (" . $email . ") para futuras investigaciones sobre dónde vives. 😉</p>";
    echo "<p>Tu comentario: <em>" . $desc . "</em></p>";

} else {
    // Si intentan entrar a procesar.php directamente por la URL
    echo "Acceso no autorizado.";
}
?>