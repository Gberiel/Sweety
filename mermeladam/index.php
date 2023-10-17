<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles4.css">
    <title>Formulario de Contacto</title>
</head>
<body>
    
    <header>
        <div class="container">
            <div class="logo">Manathan Sweety</div>
            <nav>
                <ul>
                    <li><a href="principal.php">Inicio</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="historia.php">Historia</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <h1>Formulario de Contacto</h1>
        <form action="procesar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required><br>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required><br>

            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea><br>

            <input type="submit" value="Enviar">
            <li><a href="pruebita2.php">enlace</a></li>
        </form>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section about">
                    <h2>Acerca de Nosotros</h2>
                    <p>Somos apasionados por crear mermeladas artesanales con los sabores más frescos y auténticos. Descubre la esencia de nuestras frutas en cada bocado.</p>
                    <div class="contact">
                        <span><i class="fas fa-phone"></i> (123) 456-7890</span>
                        <span><i class="fas fa-envelope"></i> info@manathansweety.com</span>
                    </div>
                    <div class="socials">
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-section links">
                    <h2>Enlaces Rápidos</h2>
                    <ul>
                        <li><a href="principal.php">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="historia.php">Historia</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Mermeladas Manathan Sweety. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
