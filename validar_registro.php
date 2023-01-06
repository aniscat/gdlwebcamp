<?php if (isset($_POST['submit'])) :
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $regalo = $_POST['regalo'];
    $total = $_POST['total_pedido'];
    //TENER EN CUENTA EL FORMATEO DE LA FECHA PARA LA BD, DEBE SER UNO ESPECIFICO SI NO OCURREN COSAS RARAS
    $fecha = date('Y-m-d H:i:s');
    //pedidos
    $boletos = $_POST['boletos'];
    $camisas = $_POST['pedido_camisas'];
    $etiquetas = $_POST['pedido_etiquetas'];
    include_once 'includes/funciones/funciones.php';
    $pedido = productos_json($boletos, $camisas, $etiquetas);
    //EVENTOS
    $eventos = $_POST['registro'];
    $registro = eventos_json($eventos);
    //Insertando a la base de datos
    try {
        // abrir la conexion al incluirla
        require_once('includes/funciones/bd_conexion.php');
        //  para la insercion de datos, utilizams prepared statement, util para combatir injecciones SQL, obliga a escribir el sql y los datos por separado
        $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
        //las S son para textos y i para numeros enteros
        // ? es una marcado de posicion que toma el lugar temporalmente de los datos 
        //se hace la consulta con los marcadores (compila los marcadores de posicion)
        $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
        //con bind_param se sustituyen los marcadores con los datos 
        $stmt->execute();
        $stmt->close();
        $conn->close();
        //nos redirecciona a otra pagina para evitar que al recargar se vuelvan a mandar los datos de la insercion
        // /header envia encabezados 
        header('Location: validar_registro.php?exitoso=1');
        /* Asegurándonos de que el código interior no será ejecutado cuando se realiza la redirección. */
    } catch (Exception $e) {
        echo $e->$getMessage;
    }
endif; ?>
<!-- Incluye el el archivo del header global -->
<?php include_once 'includes/templates/header.php'; ?>
<section class="seccion contenedor">
    <!-- <h2>Resumen de registro</h2> -->
    <?php if(isset($_GET['exitoso'])){
        if($_GET['exitoso']==1){
            echo '<h2>¡Registro exitoso!</h2>';
        }
}
        ?>
</section>

<!-- Incluye el el archivo del footer global -->
<?php include_once 'includes/templates/footer.php'; ?>