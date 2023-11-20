<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo_electronico"];
    $nombre = $_POST["nombre"];
    $motivo = $_POST["motivo"];
    $mensaje = $_POST["mensaje"];

    // Configurar el correo electrónico
    $para = "dchamacah@gmail.com"; // Cambiar al correo al que quieres enviar
    $asunto = "Nuevo mensaje de $nombre - $motivo";
    $cuerpo = "De: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";

    // Enviar el correo
    if (mail($para, $asunto, $cuerpo)) {
        echo "Correo enviado correctamente";
    } else {
        echo "Error al enviar el correo";
    }
}
?>
