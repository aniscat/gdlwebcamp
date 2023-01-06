<footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre <span>nosotros</span></h3>
      </div>
      <div class="ultimos tweets">
        <h3>Últimos <span>tweets</span></h3>
        <ul>
          <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod velit consequuntur similique voluptatibus odio obcaecati.</li>
          <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod velit consequuntur similique voluptatibus odio obcaecati.</li>
          <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod velit consequuntur similique voluptatibus odio obcaecati.</li>
        </ul>
      </div>
      <div class="menu">
        <h3>Redes <span>sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </nav>
      </div>
    </div>
    <p class="copyright">Todos los derechos reservados GDLWEBCAMP 2016</p>
  </footer>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <!-- Modernizr nos ayuda a detectar la compatibilidad del html y css de los navegadores, y en caso de no ser compatible se implementa una variante  -->
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
  <script src="js/jquery.js"></script>

  <!-- En est parte obtenemos el nombre del archivo en el que se está y hacemos una comparacion para elegir si cargar un js u otro -->
  <?php 
   $archivo = basename($_SERVER['PHP_SELF']);//rETORNA EL NOMBRE DEL ARCHIVO ACTUAL
   $pagina = str_replace(".php","",$archivo);//como primer parametro de la funcion que se quiere hacer, por quee, y la fuente de los datos
      if ($pagina =='invitados'||$pagina =='index' ) {
         echo' <script src="js/jquery.colorbox-min.js"></script>';
      }else if ($pagina == 'conferencia'){
          echo'<script src="js/jquery.lightbox.js"></script>';
        }
  ?>

  
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
 
  
</body>

</html>