<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos = "ejemplo";

$enlace = mysqli_connect($servidor, $usuario, $clave, $basededatos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Contáctanos</title>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Georgia", serif;
        background-color: #f5f5d6;  
        color: #000000ff;
    }

    .container {
        display: flex;
        justify-content: space-between;
        padding: 40px;
    }

    .left-title {
        font-size: 40px;
        font-weight: bold;
        width: 40%;
        line-height: 1;
    }

    .right-content {
        width: 55%;
        font-size: 20px;
    }

    .right-content p {
        margin-bottom: 60px;
    }

    input, textarea {
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        margin-bottom: 25px;
        border: none;
        border-bottom: 2px solid #3a3a0a;
        background: none;
        font-size: 16px;
        outline: none;
    }

    textarea {
        height: 120px;
        resize: none;
    }

    button {
        background-color: #3a3a0a;
        color: white;
        padding: 12px 35px;
        border: none;
        border-radius: 25px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.85;
    }
    h1{
        text-align: center;
        font-size: 36px;
    }

</style>
</head>
<body>

<h1>Contáctanos</h1>
<hr style="height: 3px; background-color: black; border: none;">

<div class="container">

    <div class="left-title">
        Permanezcamos en<br>contacto
    </div>

    <div class="right-content">
        <p>
            ¿Tienes ganas de mostrarnos tu proyecto con sensores? <br>Conversemos.
            Nuestro equipo estará encantado de analizar tu proyecto y ofrecerte 
            la mejor ruta hacia el éxito.
        </p>


        <form action="#" method="post">

            <label>Nombre</label>
            <input type="text" name="nombre" required>

            <label>Apellido</label>
            <input type="text" name="apellido" required>

            <label>Correo electrónico</label>
            <input type="email" name="correo" required>

            <label>Asunto</label>
            <input type="text" name="asunto" maxlength="50" required>

            <label>Mensaje</label>
            <textarea name="mensaje" required></textarea>

            <button type="submit" name="registro">Enviar</button>
        </form>
    </div>
</div>

</body>
</html>

<?php
if(isset($_POST['registro'])){

    $nombre    = $_POST['nombre'];
    $apellido  = $_POST['apellido'];
    $correo    = $_POST['correo'];
    $asunto    = $_POST['asunto'];
    $mensaje   = $_POST['mensaje'];

    $insertarDatos = "INSERT INTO datos VALUES('$nombre', '$apellido', '$correo', '$asunto', '$mensaje', '')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if($ejecutarInsertar){
        echo "<script>alert('Registro enviado exitosamente');</script>";
    } else {
        echo "<script>alert('Error al enviar');</script>";
    }
}
?>
