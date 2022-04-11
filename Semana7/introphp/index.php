<?php
//comentario deuna linea
/*
comentariodevariaslineas 
*/
$nombre = " Gabriela :) ";
echo " Bienvenida " . $nombre;
//evaluar

if(isset($_POST["enviar"])){
    $seleccion = $_POST["seleccion"];

    INCLUDE $seleccion . ".php";

}else{
    INCLUDE "es.php";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <select name="seleccion" id ="">
          <option value="en">English </option>
          <option value="es">Espanish </option>
        </select>
       <input type ="submit" name="enviar" value="seleccionar">

    </form>
    <h1><?php echo Tittle; ?></h1>
    <h2><?php echo Subtitle; ?></h2>
</body>
</html>




