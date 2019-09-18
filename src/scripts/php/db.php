<?php
    function Connect(){
        if(!($link = mysqli_connect("localhost","root",""))){
            echo "Error de conexión";
            exit();
        }
        if(!mysqli_select_db($link,"abc")){
            echo "Error al seleccionar la base de datos";
            exit();
        }
        return $link;
    }
    Connect();
?>