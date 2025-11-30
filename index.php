<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos = "ejemplo";

$enlace = mysqli_connect($servidor, $usuario, $clave, $basededatos);
?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <tittle>Contactanos</tittle>
</head>
<boody>

<form action="#" name ="ejemplo" method="post">

<input type ="text" name="nombre" placeholder="nombre">
<input type ="text" name="apellido" placeholder="apellido">
<input type ="email" name="correo" placeholder="correo">
<input type ="text" name="asunto" placeholder="asunto">
<input type ="text" name="mensaje" placeholder="mensaje">

<input type="submit"name="registro">
<input type="reset">

</form>
</boody>

<?php
if(isset($_POST['registro'])){

    $nombre= $_POST ['nombre'];
    $apellido= $_POST ['apellido'];
    $correo= $_POST ['correo'];
    $asunto= $_POST ['asunto'];
    $mensaje= $_POST ['mensaje'];
    
    $insertarDatos="INSERT INTO datos VALUES('$nombre','$apellido','$correo','$asunto','$mensaje','')";

    $ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);
}
?>