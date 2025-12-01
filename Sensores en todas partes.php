<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Página</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif; 
            background-color: #f5f5d6;  /* Color crema */
           
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        /* Barra de navegación */
        .navbar {
            background-color: #222;
            overflow: hidden;
        }

        /* Links del menú */
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-decoration: none;
            padding: 14px 20px;
        }

        /* Hover */
        .navbar a:hover {
            background-color: #63a9d8ff;
        }

        h1 {
            text-align: center;
            font-size: 36px; /* tamaño del título */
        }
   
    </style>
</head>
<body>

    <!-- Barra de navegación -->
    <div class="navbar">
        <a href="novedades.php">Novedades</a>
        <a href="historia.php">Nuestra Historia</a>
        <a href="acerca.php">Acerca de</a>
        <a href="redes.php">Redes Sociales</a>
        <a href="contactanos.php">Contactanos</a>
    </div>

    <h1 style="color: black;">Bienvenido a mi página</h1>

</body>
</html>
