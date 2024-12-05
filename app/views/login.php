<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BagelBankClub</title>
    <link rel="stylesheet" href="http://localhost/BagelBankClub/public/css/login.css"> <!-- Aquí agregas el archivo CSS -->
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="http://localhost/BagelBankClub/views/procesar_login.php" method="POST">
            <!-- Nombre de usuario -->
            <div class="form-group">
                <label for="username">Nombre de Usuario</label>
                <input type="text" id="username" name="username" placeholder="Escribe tu nombre de usuario" required>
            </div>

            <!-- Contraseña -->
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Escribe tu contraseña" required>
            </div>

            <!-- Checkbox para mantener la sesión iniciada -->
            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember" id="remember"> Mantenerme iniciado sesión
                </label>
            </div>

            <!-- Botón de Iniciar Sesión -->
            <div class="form-group">
                <button type="submit">Iniciar Sesión</button>
            </div>

            <!-- Enlace para recuperar contraseña -->
            <div class="form-group">
                <a href="http://localhost/BagelBankClub/views/recuperar_contrasena.php">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
</body>
</html>
