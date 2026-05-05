<?php
$conexion = mysqli_connect("localhost", "root", "", "blst_db");

mysqli_set_charset($conexion, "utf8");

$n = $_POST['nombre'];
$e = $_POST['email'];
$m = $_POST['mensaje'];

$sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES ('$n', '$e', '$m')";

if(mysqli_query($conexion, $sql)) {
    echo "Mensaje guardado correctamente.";
    echo "<br><a href='contacto.html'>Volver</a>";
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>