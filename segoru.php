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
    <link rel="stylesheet" href="custom/segoru.css" />
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

    <h4>Seguro de Vida</h4>
    <p>Cuéntanos sobre ti, queremos conocer algunos detalles para brindarte la mejor propuesta.</p>
  </div>
  <div class="row img-row ">
    <div class="col-lg-6">
    <img src="img/Nexalife.jpg" class="img-fluid nex-img" alt="">
    </div>
    <div class="col-lg-6">
      <div class="content">
        <span>Primero, ¿Cual es tu nombre?</span><br>
        <input class="empty" type="text">
        <div class="soy">
          <span>Soy</span>

          <input type="radio" class="gender" id="male" name="gender">
          <label for="male">
            <img src="img/man.jpg" class="img-fluid" alt="">
          </label>
          <input type="radio" class="gender" id="female" name="gender">
          <label for="female">
            <img src="img/female.jpg" class="img-fluid" alt="">
          </label>
        </div>
        <div class="naci">
          <span>Nací el</span>
          <input type="text" placeholder="Día">
          <input type="text" placeholder="Mes">
          <input type="text" placeholder="Año">
        </div>
        <div class="mi">
          <span>Mi código postal es</span>
          <input type="text">
        </div>
        <button>Continuar</button>


      </div>
    </div>
  </div>
</section>

<!-- ============================ -->
  <!-- Footer Area -->
<!-- ============================ -->

<?php include("include/footer.php") ?>
  </body>
</html>
