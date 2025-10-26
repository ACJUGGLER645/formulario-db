<?php
// interconexion.php
include("conexion.php");

// Forzar mostrar errores en local si no están activos (útil para debugging)
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Filtrar / sanitizar entrada básica
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
    $celular = isset($_POST['celular']) ? trim($_POST['celular']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    // Validaciones simples
    if (empty($nombre) || empty($apellido) || empty($email)) {
        die("Faltan datos obligatorios.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Correo inválido.");
    }

    // Prepared statement para insertar
    $stmt = $conn->prepare("INSERT INTO contactos (nombre, apellido, celular, email) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error en prepare(): " . $conn->error);
    }

    $stmt->bind_param("ssss", $nombre, $apellido, $celular, $email);

    if ($stmt->execute()) {
        // Redirigimos al formulario con indicador de éxito
        header("Location: index.php?exito=true");
        exit();
    } else {
        // Mostrar error para depuración en local
        echo "Error al guardar los datos: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Método no permitido.";
}

$conn->close();
?>
