<?php
    $nombre=$_POST['nombre'];
    $edad=$_POST['edad'];
    $direccion=$_POST['direccion'];

    include_once("./src/scripts/php/db.php");
    $link = Connect();
    $query = "INSERT INTO users (nombre,edad,direccion) VALUES ('".$nombre."','.$edad.','".$direccion."')";
    $execute = mysqli_query($link,$query);
    mysqli_close($link);
    $answer = array('Respuesta'=>true);
    echo json_encode($answer);
?>