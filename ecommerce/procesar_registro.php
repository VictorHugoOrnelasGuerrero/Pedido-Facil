<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
    $ubicacion = isset($_POST["ubicacion"]) ? $_POST["ubicacion"] : "";
    $nombre_tienda = isset($_POST["nombre-tienda"]) ? $_POST["nombre-tienda"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $contrasena = isset($_POST["contrasena"]) ? $_POST["contrasena"] : ""; // Guardar la contraseña de manera segura

    $query = "INSERT INTO usuarios (tipo, nombre, telefono, ubicacion, nombre_tienda, email, contrasena) VALUES ('$tipo', '$nombre', '$telefono', '$ubicacion', '$nombre_tienda', '$email', '$contrasena')";

    if ($conexion->query($query) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $query . "<br>" . $conexion->error;
    }

    $conexion->close();
}
?>
