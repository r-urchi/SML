<?php
    $destinatario = 'ramonurchipia@gmail.com';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $consulta = $_POST['consulta'];

    $header = "Enviado desde el formulario de contacto";
    $mensajeCompleto = $consulta . "\nAtentamente: " . $nombre;

    mail($destinatario, $mensajeCompleto, $header);
?>