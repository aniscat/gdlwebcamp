<!-- Incluye el el archivo del header global -->
<?php include_once'includes/templates/header.php';?>

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
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa-solid fa-code"></i>Talleres</a>
            <a href="#conferencias"><i class="fa-solid fa-comments"></i>Conferencias</a>
            <a href="#seminarios"><i class="fa-solid fa-building-columns"></i>Seminarios</a>
          </nav>
          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 Y Javascript</h3>
              <p><i class="fa-regular fa-clock"></i> 16:00hrs</p>
              <p><i class="fa-regular fa-calendar"></i> 10 de Dic</p>
              <p><i class="fa-solid fa-user-large"></i> Juan Pablo de la Torre Valdez</p>
            </div>
            <div class="detalle-evento">
              <h3>Responsive Web Design</h3>
              <p><i class="fa-regular fa-clock"></i> 20:00hrs</p>
              <p><i class="fa-regular fa-calendar"></i> 10 de Dic</p>
              <p><i class="fa-solid fa-user-large"></i> Juan Pablo de la Torre Valdez</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div>
          <!-- #talleres-->
          <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Como ser freelancer</h3>
              <p><i class="fa-regular fa-clock"></i> 10:00hrs</p>
              <p><i class="fa-regular fa-calendar"></i> 10 de Dic</p>
              <p><i class="fa-solid fa-user-large"></i> Gregorio Sánchez</p>
            </div>
            <div class="detalle-evento">
              <h3>Tecnologías del futuro</h3>
              <p><i class="fa-regular fa-clock"></i> 17:00hrs</p>
              <p><i class="fa-regular fa-calendar"></i> 10 de Dic</p>
              <p><i class="fa-solid fa-user-large"></i> Susan Sánchez</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div> <!-- #conferencias-->
          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Diseño UI/UX para móviles</h3>
              <p><i class="fa-regular fa-clock"></i> 17:00hrs</p>
              <p><i class="fa-regular fa-calendar"></i> 11 de Dic</p>
              <p><i class="fa-solid fa-user-large"></i> Harold García</p>
            </div>
            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="fa-regular fa-clock"></i> 10:00hrs</p>
              <p><i class="fa-regular fa-calendar"></i> 11 de Dic</p>
              <p><i class="fa-solid fa-user-large"></i> Susana Rivera</p>
            </div>
            <a href="#" class="button float-right">Ver todos</a>
          </div><!-- #seminarios-->
        </div>
        <!--.programa-evento-->
      </div>
      <!--.contenedor-->
    </div>
    <!--.contenido-programa-->
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
    <div class="testimoniales contenedor clearfix" >

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
        <li><p class="numero" id="dias"></p>días</li>
        <li><p class="numero" id="horas"></p>horas</li>
        <li><p class="numero" id="minutos"></p>minutos</li>
        <li><p class="numero" id="segundos"></p>segundos</li>
      </ul>
    </div> <!-- .cuenta-regresiva-->
  </section>
<!-- Incluye el el archivo del footer global -->
  <?php include_once'includes/templates/footer.php';?>