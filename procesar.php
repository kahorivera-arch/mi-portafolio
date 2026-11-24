<?php
// Reemplaza con los datos exactos de InfinityFree
$servidor = "TU_MYSQL_HOSTNAME";
$usuario = "TU_MYSQL_USERNAME";
$contrasena = "TU_MYSQL_PASSWORD";
$basedatos = "TU_MYSQL_DATABASE_NAME";

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $correo = $conexion->real_escape_string($_POST['correo']);
    $mensaje = $conexion->real_escape_string($_POST['mensaje']);

    $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>
                alert('¡Mensaje enviado con éxito!');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "Error al guardar: " . $conexion->error;
    }
}

$conexion->close();
?>