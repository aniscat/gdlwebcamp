<!-- Incluye el el archivo del header global -->
<?php include_once'includes/templates/header.php';?>

  <section class="seccion contenedor">
   <h2>Calendario de eventos</h2>

    <?php
    try{
        // abrir la conexion
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM eventos";
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