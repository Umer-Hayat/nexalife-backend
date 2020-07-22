<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="custom/muchas.css" />
    <link rel="icon" href="img/icon.png" type="image/gif" sizes="16x16" />
    <title>NEXALIFE</title>
  </head>
  <body>

<!-- ============================ -->
  <!-- header Area -->
<!-- ============================ -->

<?php include("include/header.php") ?>


<!-- ============================ -->
  <!-- body Area -->
<!-- ============================ -->

<section class="body-area">
  <div class="container body-con">
  <div class="heading">
    <img src="img/hand.jpg" class="img-fluid" alt="">
    <h4>¡Muchas gracias!</h4>
    <p>Nos pondremos en contacto para diseñar la mejor propuesta</p>
  <p>¿Cómo gustas que te hagamos llegar tu cotización?</p>  
  </div>
  <form method="post">
    <div class="radio">

        <input type="radio" name="select" id="1">
        <label for="1">Whats app</label><br>
        
        <input type="radio" name="select" id="2" value="">
        <label for="2">Correo electrónico</label><br>
        
        <button type="submit" name="submit">Continuar</button>
    </div>
  </form>
  </div>
</section>

<!-- ============================ -->
  <!-- Footer Area -->
<!-- ============================ -->

<?php include("include/footer.php") ?>

  </body>
</html>