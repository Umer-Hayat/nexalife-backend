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
    <link rel="stylesheet" href="custom/estas.css" />
    <link rel="icon" href="img/icon.png" type="image/gif" sizes="16x16" />
    <title>NEXALIFE</title>
  </head>
  <body>

<!-- ============================ -->
  <!-- Header Area -->
<!-- ============================ -->

<?php include("include/header.php") ?>

<!-- ============================ -->
  <!-- body Area -->
<!-- ============================ -->

<section class="body-area">
<div class="text-center">
  <h4>¡Estás a sólo un paso de adquirir tu seguro!</h4>
  <span class="reg"><i class="fa fa-angle-left"></i><a style="text-decoration: none; color: silver;" href="victor.php">Regresar</a></span>
  <h4 class="res">Resumen de tu seguro de vida</h4>
  <div class="row ">
    <div class="col-md-4"></div>
    <div class="col-md-4 text-center">
      <div class="box">
        
      <img src="img/metlife.png" class="img-fluid" alt="">
        <p> <?php if (isset($_SESSION['type'])) {
          echo $_SESSION['type'];
        }else{ ?> Anual <?php } ?> (Pago único)</p>
        <p class="price">$<?php if (isset($_SESSION['price'])) {
          echo $_SESSION['price'];
        }else{ ?> 2,540.00 <?php } ?></p>
        <p>Coberturas</p>
        <p class="bp">Protección por fallecimiento</p>
        <p class="bp">Muerte Accidental</p>
        <p class="bp">Protección por Invalidez</p>
    </div>
    </div>
    <div class="col-md-4"></div>
    
  </div>
<button><a style="text-decoration: none; color: white;" href="datos.php">Continuar</a></button>
</div>
</section>

<!-- ============================ -->
  <!-- Footer Area -->
<!-- ============================ -->

<?php include("include/footer.php") ?>

  </body>
</html>
