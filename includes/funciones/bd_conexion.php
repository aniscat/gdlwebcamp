<?php
//utilizando la conexion en la versin mysqli (improve)
    $conn = new mysqli ('localhost', 'root','root', 'gdlwebcamp');
//Si ocurre un error mandamos un mensaje
    if($sonn->connect_error){
        echo $error -> $conn->connect_error;
    }
 /* cambiar el juego de caracteres a utf8mb4 */
if (!mysqli_set_charset($conn, "utf8mb4")) {
    printf("Error loading character set utf8mb4: %s\n", mysqli_error($conn));
    exit();
}
?>