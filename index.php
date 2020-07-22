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
    <link rel="stylesheet" href="custom/style.css" />
    <link rel="icon" href="img/icon.png" type="image/gif" sizes="16x16" />
    <title>NEXALIFE</title>
  </head>
  <body>

<!-- ============================ -->
  <!-- Header Area -->
<!-- ============================ -->

<?php include("include/header.php") ?>

<?php

if (isset($_POST['submit'])) {
  session_start();

  $_SESSION['exp_name'] = $_POST['name'];
  $_SESSION['exp_gender'] = $_POST['gender'];
  $_SESSION['exp_year'] = $_POST['year'];
  $_SESSION['exp_postal_code'] = $_POST['postal_code'];

  // echo $_SESSION['name'];
  echo $_SESSION['exp_gender'];
  // echo $_SESSION['date'];
  // echo $_SESSION['postal_code'];

}

 ?>


<!-- ============================ -->
  <!-- body Area -->
<!-- ============================ -->

<section class="body-area">
  <div class="heading">

    <h4>Gastos Médicos Mayores.</h4>
    <p>Cuéntanos sobre ti, queremos conocer algunos detalles 
      para brindarte la mejor propuesta.</p>
  </div>
  <div class="row img-row">
    <div class="col-lg-6">
    <img src="img/Pagina.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-6">
      <div class="content">
        <form method="post">
          <span>Primero, ¿Cual es tu nombre?</span><br>
          <input class="empty" name="name" type="text">
          <div class="soy">
            <span>Soy,</span>
            <input type="radio" class="hombre" name="gender" value="male" id="man">
            <label for="man">Hombre</label>
            <input type="radio" class="mujer" name="gender" value="female" id="female">
            <label for="female">Mujer</label><br>
          </div>
          <div class="tengo">
            <span>Tengo</span>
            <input type="text" name="year">
            <span>años.</span>
          </div>
          <div class="mi">
            <span>Mi código postal es</span>
            <input type="text" name="postal_code">
          </div>
          <button type="submit" name="submit">Continuar</button>
        </form>

      </div>
    </div>
  </div>
</section>


<!-- ============================ -->
  <!-- footer Area -->
<!-- ============================ -->

<?php include("include/footer.php") ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
