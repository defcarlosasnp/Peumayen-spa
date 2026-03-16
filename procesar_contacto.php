<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Aquí puedes agregar lógica para enviar email o guardar en base de datos
    // Por ahora, solo mostramos un mensaje de confirmación

    echo "<h2>Gracias por tu mensaje, $nombre</h2>";
    echo "<p>Hemos recibido tu consulta. Te contactaremos pronto.</p>";
    echo "<p><a href='index.php'>Volver al inicio</a></p>";
} else {
    // Redirigir si no es POST
    header("Location: index.php");
    exit();
}
?>