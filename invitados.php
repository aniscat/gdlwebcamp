<!-- Incluye el el archivo del header global -->
<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Calendario de eventos</h2>

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
        /*Para hacer join de tablas deben tener el mismo nombre de la tabla original y no de la que se incluye en la otra tabla. Join es para juntar columnas de diferentes tablas*/
        $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
        //con .= se concatenan las sentencias
        $sql .= " FROM eventos ";
        //un join une distintas tablas, como se une la tabla eventos con catagoria _eventos
        $sql .= " INNER JOIN categoria_evento ";
        /* Para saber que atributos deben ser iguales de dos tablas distintas*/
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        // 
        $sql .= "INNER JOIN invitados ";
        //esta es la relacion con la tabla de referencia a la tabla que se iguala
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
       
        $sql .= " ORDER BY evento_id ";


    //haciendo la consulta a la base
        $resultado = $conn->query($sql);
        //query() es una funcion de php para hacer la consulta
    } catch (Exception $e) {
        echo $e->getMessage;
    }
    ?>
    <div class="calendario">
        <?php
        $calendario = array();
        //fetch_assoc es una funcion que retorna un arreglo asociativo con las key como nombre de las columnas 
        // (::) operador de resolucion de ambito sirve para llamar funciones o metodos de una clase
        // while ($eventos = mysqli_result::fetch_assoc($resultado)) {
        while ($eventos = $resultado->fetch_assoc()) {
            //Obtiene la fecha del evento
            $fecha = $eventos['fecha_evento'];

            //obtiene la categoria del evento
            // $categoria = $eventos['cat_evento'];

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

            //En dado caso agrupa los eventos que sean de la misma categoria, como llave tiene la categoria
            //$calendario[$categoria][] = $evento;

        } // while  de fetch_assoc()
        ?>
        <?php
        //Imprime todos los eventos
        /* Iterando a través de la matriz CALENDARIO y asignando la clave a DIA y el valor a LISTA EVENTOS
        ``. */
        foreach ($calendario as $dia => $lista_eventos) { ?>
            <h3>
                <li class="fa-solid fa-calendar"></li>
                <!-- Para formatear la fecha -->
                <?php
                //para unix
                // setlocale(LC_TIME, 'es_MX.UTF-8' );
                //PARA WINDOWS
                // setlocale(LC_TIME, 'spanish');
                //hay un probrema con los acentos
                setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish');

           // sttrtotime conviente un string a fecha
                echo strftime("%A %e de %B del %Y", strtotime($dia)); ?>

            </h3>
            <?php
            // imprimir los elementos de cada evento por dia
            /* Iterando a través de la matriz `` y asignando el valor a ``. */
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
    <?php //cerrando la conexion  -->

        $conn->close(); ?>
</section> <!--Seccion-->

<!-- Incluye el el archivo del footer global -->
<?php include_once 'includes/templates/footer.php'; ?>