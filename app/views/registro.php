<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>BagelBankClub</title>

      <!-- Enlace al archivo CSS -->
      <link rel="stylesheet" href="http://localhost/BagelBankClub/public/css/registro.css">

<!-- Enlace al archivo JS -->
<script src="http://localhost/BagelBankClub/public/js/registro.js" defer></script>
    
</head>
<body>
    <div class="form-container">
        <h2>Registro</h2>
        <form action="http://localhost/BagelBankClub/views/procesar_registro.php" method="post">
            <!-- Nombre Completo -->
            <div class="form-group">
                <label for="fullName">Nombre Completo</label>
                <input type="text" id="fullName" name="fullName" placeholder="Escribe tu nombre completo" required>
            </div>

            <!-- Nombre de Usuario -->
            <div class="form-group">
                <label for="username">Nombre de Usuario</label>
                <input type="text" id="username" name="username" placeholder="Escribe tu nombre de usuario" required>
            </div>

            <!-- Género -->
            <div class="form-group">
                <label>Género</label>
                <div class="checkbox-group">
                    <input type="radio" id="male" name="gender" value="Masculino" required>
                    <label for="male">Masculino</label>
                </div>
                <div class="checkbox-group">
                    <input type="radio" id="female" name="gender" value="Femenino">
                    <label for="female">Femenino</label>
                </div>
                <div class="checkbox-group">
                    <input type="radio" id="other" name="gender" value="Otro">
                    <label for="other">Otro</label>
                </div>
            </div>

            <!-- Ocupación -->
            <div class="form-group">
                <label for="occupation">Ocupación</label>
                <input type="text" id="occupation" name="occupation" placeholder="Escribe tu ocupación">
            </div>

            <!-- Cumpleaños -->
            <div class="form-group">
                <label for="birthday">Cumpleaños</label>
                <input type="date" id="birthday" name="birthday">
                <div class="checkbox-group">
                    <input type="checkbox" id="showBirthday" name="showBirthday">
                    <label for="showBirthday">Mostrar en mi perfil público</label>
                </div>
            </div>

            <!-- Correo Electrónico -->
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Escribe tu correo electrónico" required>
                <div class="checkbox-group">
                    <input type="checkbox" id="showEmail" name="showEmail">
                    <label for="showEmail">Mostrar en mi perfil público</label>
                </div>
            </div>

            <!-- Número Telefónico -->
            <div class="form-group">
                <label for="phone">Número Telefónico (con clave nacional)</label>
                <input type="tel" id="phone" name="phone" placeholder="+52 1234567890" required>
            </div>

            <!-- Dirección -->
            <div class="form-group">
                <label for="address">Dirección</label>
                <textarea id="address" name="address" rows="3" placeholder="Calle, número, colonia" required></textarea>
                <div style="display: flex; gap: 10px;">
                    <input type="text" name="zipcode" placeholder="Código Postal" required>
                    <input type="text" name="state" placeholder="Estado" required>
                    <input type="text" name="city" placeholder="Ciudad" required>
                </div>
            </div>

            <!-- Nivel de Jugador -->
            <div class="form-group">
                <label for="playerLevel">Nivel de Jugador</label>
                <select id="playerLevel" name="playerLevel" required>
                    <option value="Open">Open</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>

            <!-- Disponibilidad -->
            <div class="form-group">
                <label>Disponibilidad para jugar</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="morning" name="availability" value="Mañanas">
                    <label for="morning">Mañanas</label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="afternoon" name="availability" value="Tardes">
                    <label for="afternoon">Tardes</label>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="weekends" name="availability" value="Fines de Semana">
                    <label for="weekends">Fines de Semana</label>
                </div>
            </div>

            <!-- Contraseña -->
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Escribe tu contraseña" required>
                <input type="checkbox" id="showPassword" onclick="togglePassword()">
                <label for="showPassword">Mostrar contraseña</label>
            </div>

            <!-- Términos y Condiciones -->
            <div class="form-group">
                <div class="checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">He leido y aceptado los terminos</label><br>
                    <p><br>
                        En conjunto con mi participacion en BagelBankClub y sus actividades y eventos relacionados: <br>

                         Acepto renunciar a todos y cada uno de los derechos y reclamaciones por lesiones corporales o emocionales, daños
                          a mi reputación o cualquier otro daño o perjuicio que pueda sufrir, o cualquier otra reclamación de cualquier 
                          naturaleza que yo o mi representante legal podamos tener contra sus directivos, la GLTA y sus directivos. 
                          Entiendo que participaré bajo mi propio riesgo y que las organizaciones e individuos mencionados no serán responsables de ningún daño,
                           lesión o perjuicio que pueda sufrir.
                            También libero y renuncio a todos y cada uno de los derechos para reclamar daños o remuneración que puedan surgir como
                             resultado de referencias, fotografías, imágenes o semejanzas mías que puedan aparecer en cualquier publicación o cobertura mediática.
                              Entiendo que la Federación gobernará la disciplina de los jugadores y hará cumplir las reglas y regulaciones de la USTA/GLTA.
                </div>
            </div>

            <!-- Botón de Enviar -->
            <button type="submit">Registrarse</button>
        </form>
    </div>
    
</body>
</html>
