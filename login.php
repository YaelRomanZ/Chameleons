<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el campo 'correoElectronico' está definido
    if (isset($_POST['correoElectronico'])) {
        $correoElectronico = $_POST['correoElectronico']; // Cambiar 'email' a 'correoElectronico'
    } else {
        echo "El campo de correo electrónico no está definido.";
        exit();
    }

    $contrasena = $_POST['contrasena'];

    // Usar consultas preparadas
    $stmt = $conex->prepare("SELECT * FROM datos WHERE correoElectronico = ?"); // Cambiar 'email' a 'correoElectronico'
    $stmt->bind_param("s", $correoElectronico);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña (asegúrate de usar hash en producción)
        if ($row['contrasena'] == $contrasena) {
            // Iniciar sesión
            session_start();
            $_SESSION['usuario'] = $correoElectronico; // Cambiar 'usuario' a 'correoElectronico' si deseas almacenar el correo
            header("Location: index.html"); // Redirigir a la página principal
            exit(); // Asegurarse de que no se ejecute más código
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>
