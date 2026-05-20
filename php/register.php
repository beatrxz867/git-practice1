<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = password_hash($_POST['passwords'], PASSWORD_DEFAULT); // coincide con el name del formulario

    $sql = "INSERT INTO usuarios (nombre, correo, password, rol) VALUES (?, ?, ?, 'usuario')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $correo, $password);

    if ($stmt->execute()) {
        echo "Usuario registrado correctamente";
    } else {
        echo "Error al registrar: " . $conn->error;
    }
}
?>
