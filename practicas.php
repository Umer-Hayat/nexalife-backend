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
    <link rel="stylesheet" href="custom/practicas.css" />
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
  <div class="heading">

    <h4>¿Practicas algún deporte de riesgo?</h4>
  </div>
  <div class="row text-center">
  <div class="col-md-2"></div>
    <div class="col-md-1">
      <img src="img/i.svg" class="img-fluid" alt="">
    </div>
      <div class="col-md-7">
        <div class="content text-left">
          <p>Se entiende por deportes de riesgo los siguientes: escalada deportiva, alpinismo, paracaidismo,
               vuelo sin motor, parapente y salto base, carrera de coches o motos, deportes sub acuáticos, 
               surf, puénting, entre otros deportes a consideración de la aseguradora.</p>
        </div>
    </div>
  <div class="col-md-2"></div>

  </div>
  <form method="post">
  
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="si text-center">
        <input type="radio" id="si" name="sino">
        <label for="si"><p>Si</p></label><br>
        <input type="radio" id="no" name="sino">
        <label for="no"><p>No</p></label>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>
  
  <div class="row text-center">
    <div class="col-md-4"></div>
    <div class="col-md-2">
            <button>Regresar</button>
    </div>
    <div class="col-md-2">
          <button type="submit" name="submit">Continuar</button>
    </div>
      <div class="col-md-4"></div>
  </div>
  
  </form>
</section>

<!-- ============================ -->
  <!-- Footer Area -->
<!-- ============================ -->

<?php include("include/footer.php") ?>
  </body>
</html>