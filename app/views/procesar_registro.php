<?php
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
$fullName = $_POST['fullName'] ?? '';
$username = $_POST['username'] ?? '';
$gender = $_POST['gender'] ?? '';
$occupation = $_POST['occupation'] ?? '';
$birthday = $_POST['birthday'] ?? '';
$showBirthday = isset($_POST['showBirthday']) ? 1 : 0;
$email = $_POST['email'] ?? '';
$showEmail = isset($_POST['showEmail']) ? 1 : 0;
$phone = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';
$zipcode = $_POST['zipcode'] ?? '';
$state = $_POST['state'] ?? '';
$city = $_POST['city'] ?? '';
$playerLevel = $_POST['playerLevel'] ?? '';
$availability = implode(", ", $_POST['availability'] ?? []);  // Combina las opciones seleccionadas
$password = $_POST['password'] ?? '';

// Encriptar la contraseña
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Verificación de campos requeridos (solo ejemplo básico)
if (empty($fullName) || empty($username) || empty($email) || empty($password)) {
    $_SESSION['error'] = "Todos los campos obligatorios deben ser completados.";
    header("Location: registro.php");
    exit();
}

// Preparar la consulta SQL para insertar los datos del usuario
$sql = "INSERT INTO usuarios (full_name, username, gender, occupation, birthday, show_birthday, email, show_email, phone, address, zipcode, state, city, player_level, availability, password)
        VALUES ('$fullName', '$username', '$gender', '$occupation', '$birthday', '$showBirthday', '$email', '$showEmail', '$phone', '$address', '$zipcode', '$state', '$city', '$playerLevel', '$availability', '$hashedPassword')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    $_SESSION['success'] = "Registro exitoso. Ahora puedes iniciar sesión.";
    header("Location: login.php");  // Redirige al login después de un registro exitoso
} else {
    $_SESSION['error'] = "Error al registrar: " . $conn->error;
    header("Location: registro.php");
}

// Cerrar la conexión a la base de datos
$conn->close();
?>