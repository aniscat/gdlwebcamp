<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <!-- <meta charset="iso-8859-1" > -->
  <title>GDLWebCamp</title>
  <meta name="description" content="Página sobre la empresa P.G y CIA Contadores Públicos">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Oswald:wght@200;300;400;500;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <!-- como hacer que los archivos se cargue en distintas páginas -->
  <?php 
  // me pueden hakear el sitio con este $_SERVER['PHP_SELF']
   $archivo = basename($_SERVER['PHP_SELF']);//rETORNA EL NOMBRE DEL ARCHIVO ACTUAL
   $pagina = str_replace(".php","",$archivo);//como primer parametro de la funcion que se quiere hacer, por quee, y la fuente de los datos
if ($pagina =='invitados'||$pagina =='index') {
  echo' <link rel="stylesheet" href="css/colorbox.css">';
}else if ($pagina == 'conferencia'){
  echo'<link rel="stylesheet" href="css/lightbox.css">';
}
  ?>
  

  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
  <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/b4051cec3fb24075ab47f3409/ff28b874712dbd3c2c9038932.js");</script>
</head>


<body class="<?php echo $pagina ?>">

  <!-- Add your site or application content here -->

  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </nav>
        <div class="informacion-evento">
          <div class="clearfix">
            <p class="fecha"><i class="fa-solid fa-calendar-week"></i> 10-12 Dic</p>
            <p class="ciudad"><i class="fa-solid fa-location-dot"></i> Guadalajara, MX</p>
          </div>
          <h1 class="nombre-sitio">GDLWebCamp</h1>
          <p class="slogan">La mejor conferencia de <span>diseño Web</span></p>
        </div>
        <!--información evento-->
      </div>
    </div>
    <!--hero-->
  </header>

  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="index.php">
          <img src="img/logo.svg" alt="Logo GDLWebCamp">
        </a>
      </div>

      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="navegacion-principal">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        <a href="registro.php">Reservaciones</a>
      </nav>
    </div>
    <!--CONTENEDOR-->
  </div>
  <!--BARRA-->