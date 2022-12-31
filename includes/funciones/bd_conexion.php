<?php
//utilizando la conexion en la versin mysqli (improve)
    $conn = new mysqli ('localhost', 'root','root', 'gdlwebcamp');
//Si ocurre un error mandamos un mensaje
    if($sonn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>