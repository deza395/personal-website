<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
<meta name="viewport" content="width=device-width,user-scalable=no">
    <title>debora-zarate</title>
  </head>
  <body>
    <a id="whatsapp" href="#"> <img src="img/whatsapp.png" alt="">  </a>
    <!-- INICIO DEL HEADER -->
<header>
  <div class="menu">

    <nav>
      <ul class="">
        <li><a href="#">inicio</a></li>
        <li><a href="#perfil">mi perfil</a></li>
        <li><a href="#portfolio">portfolio</a></li>
        <li><a href="#habilidades">habilidades</a></li>
        <li><a href="#contacto">contacto</a></li>
      </ul>
  </nav>
  </div>

<div id="titulo">
  <div class="contendor-titulo">
  <h1>Debora zarate</h1>
  <h2>Front-end Developer</h2>
  <p>Mi nombre es Debora, soy desarrolladora web full stack,especializada en front-end  </p>
</div>
</header>
<!-- principal -->
<main>
  <section id="perfil">
    <div class="profile">
      <h3>perfil profesional</h3>
      <div class="">
          <p>Desarrolladora web, experiendia en el desarrollo de paginas web para pequeñas y medianas empresas .</strong>
            Mi participación en proyectos y desarrollo de más de 100 sitios
          </p>
          <p>  web, me permitieron fortalecer de manera íntegra y responsable mi capacidad como Docente,
           transmitiendo mis conocimientos basados en la participación real y permanente
           en proyectos del ámbito web. Actualmente invierto la mayoría de mi tiempo
           en la Docencia de tecnologías web en institutos de educación intermedia y avanzada.
         </p>
      </div>
    </div>

    <div class="image">
        <img src="img/images.jpg" alt="debora" >
    </div>
  </section>

<!-- habilidades -->
  <section id="habilidades">
    <div class="contenedor">
      <h3>servicios</h3>
      <div class="contenedor-servicios">
        <div class="servicio verde">
          <h4>diseño web</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
          <img class="icono" src="img/monitor.png" alt="icono">
          <img class="ondas" src="img/waves.png" alt="">
        </div>
        <div class="servicio negro">
          <h4>diseño web</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
          <img class="icono" src="img/monitor.png" alt="icono">
          <img class="ondas" src="img/waves.png" alt="">
        </div>
        <div class="servicio verde">
          <h4>diseño web</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in .</p>
          <img class="icono" src="img/monitor.png" alt="icono">
          <img class="ondas" src="img/waves.png" alt="">
        </div>
        <div class="servicio  negro">
          <h4>diseño web</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in v.</p>
          <img class="icono" src="img/monitor.png" alt="icono">
          <img class="ondas" src="img/waves.png" alt="">
        </div>
        <div class="servicio verde">
          <h4>diseño web</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
          <img class="icono" src="img/monitor.png" alt="icono">
          <img class="ondas" src="img/waves.png" alt="">
        </div>
        <div class="servicio negro">
          <h4>diseño web</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </p>
          <img class="icono" src="img/monitor.png" alt="icono">
          <img class="ondas" src="img/waves.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <section id="portfolio">
    <div class="contenedor">
        <h3>portfolio</h3>
      <div class="owl-carousel owl-theme">
          <div class="item"> <img class="trabajo" src="img/alimentar.jpg"></div>
          <div class="item"> <img class="trabajo" src="img/chaia.jpg"></div>
          <div class="item"> <img class="trabajo" src="img/isip.jpg"></div>
          <div class="item"> <img class="trabajo" src="img/alimentar.jpg"></div>
          <div class="item"> <img class="trabajo" src="img/chaia.jpg"></div>
          <div class="item"> <img class="trabajo" src="img/isip.jpg"></div>
      </div>
    </div>
  </section>
  <section id="contacto">
  <?php
      if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>

      <h3>La consulta se envio correctamente. Nos contactaremos a la brevedad.</h3>

      <?php
      } else{
      ?>
  <div class="contenedor">
    <h3>Contacto</h3>
    <form action="envio-formulario.php" method="post" enctype="multipart/form-data">
      <input type="text" placeholder="Nombre" name="nombre" required>
      <input type="email" placeholder="Email" name="email" required>
      <textarea placeholder="Mensaje" name="mensaje" required></textarea>
      <input type="submit" value="ENVIAR MENSAJE">
    </form>
          <?php } ?>

    <div class="contacto-info">
      <div class="mail"><img src="img/mail-icon.png" alt="">debora.ed.zarate@gmail.com</div>
      <div class="whatsapp"><img src="img/whatsapp-icon.png" alt="">1121624122</div>
    </div>
  </div>
</section>
</main>
<footer>
  <div class="contenedor">
    <div class="redes">
      <a href="#"><img src="img/facebook.png" alt="imagen de facebook"></a>
      <a href="#"><img src="img/facebook.png" alt="imagen de facebook"></a>
    </div>
    <div class="parrafo">
      <p>sarasaaaa</p>
    </div>

  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="owl/owl.carousel.min.js"></script>
<script>
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:4
      }
  }
})
</script>
<script>

$(document).ready(function(){

$(window).scroll(function(){
  scroll = $(window).scrollTop();

    $('.menu').css({"position":"fixed"});
    $('.menu').css({"width":"100%"});
    $('.menu').css({"top":"0"});
    $('.menu').css({"background":"#fff"});
    $('.menu').css({"box-shadow":"rgba(0, 0, 0, 0.22) 6px 1px 1px"});
    $('.menu').css({"z-index":"100"});

})

})


</script>

  </body>
</html>
