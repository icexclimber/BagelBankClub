<?php
// Datos de conexión a la base de datos
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

// Obtener los datos del formulario
$user = $_POST['username'];
$pass = $_POST['password'];
$remember = isset($_POST['remember']) ? $_POST['remember'] : false;

// Comprobar si el usuario existe en la base de datos
$sql = "SELECT * FROM usuarios WHERE username = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Verificar la contraseña
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        // Contraseña correcta
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_id'] = $row['id'];
        
        // Si se marca el checkbox "recordarme", se guardan las cookies
        if ($remember) {
            setcookie('username', $user, time() + (60 * 60 * 24 * 7), "/");  // 7 días
            setcookie('user_id', $row['id'], time() + (60 * 60 * 24 * 7), "/");
        }
        
        header('Location: dashboard.php'); // Redirigir a la página principal
        exit();
    } else {
        // Contraseña incorrecta
        echo "Contraseña incorrecta.";
    }
} else {
    // Usuario no encontrado
    echo "Usuario no encontrado.";
}

$conn->close();
?>
