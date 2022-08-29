<!-- Incluye el el archivo del header global -->
<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Calendario de eventos</h2>

    <?php
    try {
        // abrir la conexion
        require_once('includes/funciones/bd_conexion.php');
        /*Para hacer join de tablas deben tener el mismo nombre de la tabla original y no de la que se incluye en la otra tabla */
        $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        /* Para saber que atributos deben ser iguales de dos tablas distintas*/
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= "INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
        $sql .= " ORDER BY evento_id ";
        $resultado = $conn->query($sql);
    } catch (Exception $e) {
        echo $e->getMessage;
    }
    ?>
    <div class="calendario">
        <?php
        $calendario = array();
        while ($eventos = $resultado->fetch_assoc()) {
            //Obtiene la fecha del evento
            $fecha = $eventos['fecha_evento'];
            $categoria = $eventos['cat_evento'];
            $evento = array(
                'titulo' => $eventos['nombre_evento'],
                'fecha' => $eventos['fecha_evento'],
                'hora' => $eventos['hora_evento'],
                'categoria' => $eventos['cat_evento'],
                'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado'],
                'icono' => $eventos['icono']
            );
            //Agrupa los eventos que sean de la misma fecha, como llave tiene la fecha
            $calendario[$fecha][] = $evento;
            //Agrupa los eventos que sean de la misma categoria, como llave tiene la categoria
            //$calendario[$fecha][] = $evento;
        } // while  de fetch_assoc()
        ?>
        <?php
        //Imprime todos los eventos
        foreach ($calendario as $dia => $lista_eventos) { ?>
            <h3>
                <li class="fa-solid fa-calendar"></li>
                <!-- Para formatear la fecha -->
                <?php
                setlocale(LC_TIME, 'spanish');

                echo strftime("%A %e de %B del %Y", strtotime($dia)); ?>

            </h3>
            <?php
            // imprimir los elementos de cada evento por dia
            foreach ($lista_eventos as $evento) { ?>
                <div class="dia">
                    <!-- Titulo del evento -->
                    <p class="titulo"> <i class="<?php echo $evento['icono'] ?>" aria-hidden="true"></i> <?php echo $evento['titulo']; ?></p>
                    <!-- Hora  y fecha del evento -->
                    <p class="hora"><i class="fa-regular fa-clock" aria-hidden="true"></i>
                        <?php echo $evento['fecha'] . " " . $evento['hora']; ?> </p>
                    <!-- Nombre del invitado -->
                    <p> <i class="fa-regular fa-user" aria-hidden="true"></i><?php echo " " . $evento['invitado']; ?></p>
                </div>
            <?php } ?>
            <!-- Fin foreach de eventos-->
        <?php } ?>
        <!-- Fin foreach de dias -->
    </div> <!-- Fin div.calendario -->
    <?php $conn->close(); ?>
</section> <!--Seccion-->

<!-- Incluye el el archivo del footer global -->
<?php include_once 'includes/templates/footer.php'; ?>