<!-- Incluye el el archivo del header global -->
<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Invitados</h2>

    <?php
    try {
        // abrir la conexion al incluirla
        require_once('includes/funciones/bd_conexion.php');

        // include y require sirve para añadir ficheros externos al codigo php
        //con include si hay una falla (no exista el archivo) nos alertará y 
        //seguirá ejecutandose el script (por eso se utiliza en parte que no son 
        //tan importantes como cabeceras), mientras que con require
        // al ocurrir un error no ejecuuta el script (se utiliza para acciones vitales )


        //----con _once se incluye o requiere una sola vez

        // Empezando a escribir la consulta

        $sql = "SELECT  * FROM `invitados` ";


        //haciendo la consulta a la base
        $resultado = $conn->query($sql);
        //query() es una funcion de php para hacer la consulta
    } catch (Exception $e) {
        echo $e->getMessage;
    }
    ?>
    <section class="invitados contenedor seccion">
        <ul class="lista-invitados clearfix">
            <?php
            while ($invitados = $resultado->fetch_assoc()) { ?>

                <li>
                    <div class="invitado">
                        <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id']?>">
                            <img src="<?php echo "img/" . $invitados['url_imagen']; ?>" alt="imagen invitado">
                            <p><?php echo $invitados['nombre_invitado'] . " " .  $invitados['apellido_invitado']; ?></p>
                        </a>
                    </div>
                </li>
                <div style="display:none">
                    <div class= "invitado-info" id="invitado<?php echo $invitados['invitado_id']?>">
                    <h2>
                    <?php echo $invitados['nombre_invitado'] . " ". $invitados['apellido_invitado'] ?>
                    </h2>   
                    <img src="<?php echo "img/" . $invitados['url_imagen']; ?>" alt="imagen invitado">
                    <p> <?php echo $invitados['descripcion']?></p> 
                    </div>
                </div>
            <?php } ?>
        </ul>
    </section> <!-- .invitados-->

    <!-- cerrando la conexion   -->
    <?php $conn->close(); ?>
</section>
<!--Seccion-->

<!-- Incluye el el archivo del footer global -->
<?php include_once 'includes/templates/footer.php'; ?>