<!-- Incluye el el archivo del header global -->
<?php include_once'includes/templates/header.php';?>

  <section class="seccion contenedor">
   <h2>Calendario de eventos</h2>

    <?php
    try{
        // abrir la conexion
        require_once('includes/funciones/bd_conexion.php');
        /*Para hacer join de tablas deben tener el mismo nombre de la tabla original y no de la que se incluye en la otra tabla */
        $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        /* Para saber que atributos deben ser iguales de dos tablas distintas*/
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= "INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
        $sql .= " ORDER BY evento_id ";
        $resultado = $conn->query($sql);

    }catch(Exception $e){
        echo $e->getMessage;
    }
    ?>
    <div class="calendario">
        <?php
            while ($eventos =$resultado->fetch_assoc()){
                echo $eventos['nombre_evento'];
                echo "<br>";
        ?>
        
        <pre>
            <?php   var_dump($eventos);  ?>
        
        </pre>
        <?php }?>

        
    </div>
    
   <?php
    $conn->close();
   ?>
  </section> <!--Seccion-->

<!-- Incluye el el archivo del footer global -->
  <?php include_once'includes/templates/footer.php';?>