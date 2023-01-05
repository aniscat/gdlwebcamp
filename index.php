<!-- Incluye el el archivo del header global -->
<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
  <h2>La mejor conferencia de diseño web en español</h2>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit dolores qui dignissimos molestias mollitia odio,
    molestiae inventore quo quaerat ipsam officia quae, vero temporibus aspernatur dolor consectetur nobis harum?
    Molestias ullam recusandae non dolores voluptate praesentium quod officia, perferendis laboriosam natus modi alias
    mollitia est ea expedita delectus culpa magnam.</p>
</section>
<!--Seccion-->
<section class="programa">
  <div class="contenedor-video">
    <video autoplay loop poster="img/bg-talleres.jpg">
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.webm" type="video/webm">
      <source src="video/video.ogv" type="video/ogv">
    </video>
  </div>
  <!--.contenedor-video-->
  <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <?php 
            try{
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT * FROM `categoria_evento`";
                $resultado = $conn->query($sql);
            }catch(\Exception $e){
                echo $e->getMessage();
            }

          ?>

          <nav class="menu-programa">
          <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)){ ?>
            <?php $categoria = $cat['cat_evento']; ?>
            <a href="#<?php echo strtolower($categoria) ?>">
              <i class="fas <?php echo $cat['icono']; ?>"></i> <?php echo $categoria ?>
            </a>
          <?php } ?>
          </nav>
          
          <?php 
            try{
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= " FROM eventos ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_inv = invitados.invitado_id";
                $sql .= " AND eventos.id_cat_evento = 1 ";
                $sql .= " ORDER BY `evento_id` LIMIT 2;";
                $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= " FROM eventos ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_inv = invitados.invitado_id";
                $sql .= " AND eventos.id_cat_evento = 2 ";
                $sql .= " ORDER BY `evento_id` LIMIT 2;";
                $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= " FROM eventos ";
                $sql .= " INNER JOIN categoria_evento ";
                $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria";
                $sql .= " INNER JOIN invitados ";
                $sql .= " ON eventos.id_inv = invitados.invitado_id";
                $sql .= " AND eventos.id_cat_evento = 3 ";
                $sql .= " ORDER BY `evento_id` LIMIT 2;";
            }catch(\Exception $e){
                echo $e->getMessage();
            }
          ?>


          <?php $conn->multi_query($sql); ?>
          <?php $i = 0;
          
          setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish'); ?>
          <?php do {
            $resultado = $conn->store_result();
            ?>
            <?php while($row = $resultado->fetch_assoc()) { ?>
              <?php if($i % 2 ==0): ?>
                <div id="<?php echo strtolower($row['cat_evento']); ?>" class="info-curso ocultar clearfix">
              <?php endif; ?>
                <div class="detalle-evento">
                  <h3><?php echo $row['nombre_evento']; ?></h3>
                  <p><i class="far fa-clock"> </i > <?php 
                  $hora = str_replace(":00.000000","",$row['hora_evento']);
                  echo  $hora; ?> hrs</p>
                  <p><i class="far fa-calendar-alt"> </i> <?php echo  strftime("%e de %B", strtotime($row['fecha_evento'])); ?></p>
                  <p><i class="fas fa-user"> </i> <?php echo $row['nombre_invitado'] . " " . $row['apellido_invitado']; ?></p>
              </div>
              <?php if($i % 2 == 1 ): ?>
                <a href="calendario.php" class="button float-right">Ver todos</a>
                </div><!--Talleres-->
              <?php endif; ?>
              <?php $i++; ?>
            <?php } ?>
            <?php $resultado->free(); ?>

          <?php } while ($conn->more_results() && $conn->next_result()); ?>


        </div><!--Programa evento-->
      </div><!--contenedor-->
    </div><!--contenido-programa-->
</section><!-- .programa-->

<!-- Informacion sobre los invitados del evento -->
<?php include_once 'includes/templates/invitados.php'; ?>


<div class="contador parallax ">
  <div class="contenedor">
    <ul class="resumen-evento clearfix">
      <li>
        <p class="numero">0</p> Invitados
      </li>
      <li>
        <p class="numero">0</p> Talleres
      </li>
      <li>
        <p class="numero">0</p> Dias
      </li>
      <li>
        <p class="numero">0</p> Conferencias
      </li>
    </ul>
  </div>
</div> <!-- .contador-->

<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>
        <div class="tabla-precio">
          <h3>Pase por día</h3>
          <p class="numero">$30</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las Conferencias</li>
            <li>Todos los Talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>

      <li>
        <div class="tabla-precio">
          <h3>Todos los días</h3>
          <p class="numero">$50</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las Conferencias</li>
            <li>Todos los Talleres</li>
          </ul>
          <a href="#" class="button">Comprar</a>
        </div>
      </li>

      <li>
        <div class="tabla-precio">
          <h3>Pase por dos días</h3>
          <p class="numero">$45</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las Conferencias</li>
            <li>Todos los Talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
    </ul><!-- .contenedor-->
</section><!-- .precios-->

<div class="mapa" id="mapa">

</div><!-- .mapa-->

<section class="seccion">
  <h2>Testimoniales</h2>
  <div class="testimoniales contenedor clearfix">

    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aliquam sequi, molestias vel voluptatum
          explicabo assumenda quibusdam nulla, illo debitis quasi, dolores consectetur nihil ea tempora eum inventore
          beatae quaerat!</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div><!-- .testimonial-->
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aliquam sequi, molestias vel voluptatum
          explicabo assumenda quibusdam nulla, illo debitis quasi, dolores consectetur nihil ea tempora eum inventore
          beatae quaerat!</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial">
          <cite>Oswaldp Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div><!-- .testimonial-->
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aliquam sequi, molestias vel voluptatum
          explicabo assumenda quibusdam nulla, illo debitis quasi, dolores consectetur nihil ea tempora eum inventore
          beatae quaerat!</p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial">
          <cite>Oswaldp Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div><!-- .testimonial-->
  </div><!-- .testimoniales-->
</section><!-- .seccion-->

<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p>Registrate al newsletter</p>
    <h3>gdlwebcamp</h3>
    <a href="#" class="button transparent">registro</a>
  </div><!-- .contenido-->
</div> <!--newsletter-->

<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
      <li>
        <p class="numero" id="dias"></p>días
      </li>
      <li>
        <p class="numero" id="horas"></p>horas
      </li>
      <li>
        <p class="numero" id="minutos"></p>minutos
      </li>
      <li>
        <p class="numero" id="segundos"></p>segundos
      </li>
    </ul>
  </div> <!-- .cuenta-regresiva-->
</section>
<?php $conn->close(); ?>
<!-- Incluye el el archivo del footer global -->
<?php include_once 'includes/templates/footer.php'; ?>