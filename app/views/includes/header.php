<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Solo inicia la sesión si no está activa
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BB</title>
    <link rel="stylesheet" href="http://localhost/BagelBankClub/public/css/header.css">
</head>
<body>
    <!-- Encabezado -->
    <header class="header">
        <div class="menu-container">
            <!-- Logotipo Izquierdo -->
            <div class="logo-left">
            <a href="dashboard.php"><img src="http://localhost/BagelBankClub/public/images/bagels.png" alt="BB Logo"></a>
            </div>
            
            <!-- Menú -->
            <ul class="menu">

            <li>
                    <a href="marcadores.php">Marcadores</a>
                    <ul class="submenu">
                        <li><a href="enVivo.php">En Vivo</a></li>
                        <li><a href="rolDeJuegos.php">Roles de Juego</a></li>
                    </ul>
                </li>


                <li><a href="#">Feed</a></li>
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Estadísticas</a></li>
                
                <li>
                    <a href="#">Rankings</a>
                    <ul class="submenu">
                        <li><a href="#">Individual</a></li>
                        <li><a href="#">Dobles</a></li>
                    </ul>
                </li>

                <li><a href="#">H2H</a></li>

                <li><a href="#">Jugadores</a></li>


                <li>
                    <a href="#">Torneos</a>
                    <ul class="submenu">
                        <li><a href="#">Calendario</a></li>
                        <li><a href="#">Bagel Bank Leagues</a></li>
                        <li><a href="#">Bagel Bank Cups</a></li>
                        <li><a href="#">CdB Nitto Ladder</a></li>
                        <li><a href="#">Team Tennis Britania</a></li>
                    </ul>
                </li>
             

                <li>
                    <a href="#">Otros</a>
                    <ul class="submenu">
                        <li><a href="#">Tienda</a></li>
                        <li><a href="#">Patrocinadores</a></li>
                        <li><a href="#">X</a></li>
                        <li><a href="#">IG</a></li>
                        <li><a href="#">FaceBook</a></li>
                    </ul>
                </li>

            </ul>

        <!-- Botón para mostrar la barra de búsqueda -->
        <div class="search-icon">
                <img src="http://localhost/BagelBankClub/public/images/lupalogo.png" alt="Buscar" id="toggleSearch">
            </div>

            <!-- Barra de búsqueda -->
            <div class="search-bar hidden" id="searchBar">
                <input type="text" placeholder="Buscar..." />
                <button type="submit">🔍</button>
            </div>

            <!-- Logotipo Derecho -->
            <div class="logo-right">
                <a href="#"><img src="http://localhost/BagelBankClub/public/images/paneologo.png" alt="Logo Derecho"></a>
            </div>
        </div>
    </header>

    <script src="http://localhost/BagelBankClub/public/js/barraBusqueda.js"></script>
</body>
</html>
