<?php
// Datos de conexión a la base de datos (ajusta según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bagelbankclub";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Verificar si el correo existe en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // El correo está registrado, generar un token para el restablecimiento
        $row = $result->fetch_assoc();
        $token = bin2hex(random_bytes(50)); // Generar un token aleatorio
        
        // Guardar el token en la base de datos
        $sql = "UPDATE usuarios SET reset_token = '$token' WHERE email = '$email'";
        if ($conn->query($sql) === TRUE) {
            // Enviar el enlace para restablecer la contraseña
            $reset_link = "http://localhost/BagelBankClub/restablecer_contrasena.php?token=$token";
            $subject = "Restablecer tu contraseña";
            $message = "Haz clic en el siguiente enlace para restablecer tu contraseña: $reset_link";
            $headers = "From: no-reply@bagelbankclub.com";

            if (mail($email, $subject, $message, $headers)) {
                echo "Se ha enviado un enlace para restablecer tu contraseña a tu correo electrónico.";
            } else {
                echo "Hubo un problema al enviar el correo. Intenta nuevamente.";
            }
        } else {
            echo "Error al actualizar el token en la base de datos.";
        }
    } else {
        echo "El correo electrónico no está registrado. <a href='login.php'>Intenta de nuevo</a>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/BagelBankClub/public/css/recuperarcontra.css">
    <title>Recuperar Contraseña</title>
</head>
<body>
    <h1>Recuperar Contraseña</h1>
    <form action="recuperar_contrasena.php" method="POST">
        <label for="email">Correo Electrónico</label>
        <input type="email" name="email" id="email" placeholder="Escribe tu correo electrónico" required>
        <button type="submit">Recuperar Contraseña</button>
    </form>
</body>
</html>
