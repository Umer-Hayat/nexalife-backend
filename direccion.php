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
    <link rel="stylesheet" href="custom/direccion.css" />
    <link rel="icon" href="img/icon.png" type="image/gif" sizes="16x16" />
    <title>NEXALIFE</title>
  </head>
  <body>


<!-- ============================ -->
  <!-- header Area -->
<!-- ============================ -->

<?php include("include/header.php") ?>

<?php
if (isset($_POST['submit'])) {

  $_SESSION['street'] = $_POST['street'];
  $_SESSION['no-ext'] = $_POST['no-ext'];
  $_SESSION['interior'] = $_POST['interior'];
  $_SESSION['suburb'] = $_POST['suburb'];
  $_SESSION['postal'] = $_POST['postal'];
  $_SESSION['state'] = $_POST['state'];
  $_SESSION['country'] = $_POST['country'];
}
 ?>
 
<!-- ============================ -->
  <!-- body Area -->
<!-- ============================ -->

<section class="body-area">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="img/user.png" class="img-fluid" alt="">
            <h4>Datos del contratante:</h4>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4 box-row text-center">
          <div>
            <span class="round-o o1"></span><br>
            <span class="tb">Datos personales</span>
          </div>
            <div>
              <span class="round-o o2"></span><br>
              <span class="tb">Dirección</span>
            </div>
            <div>
              <span class="round-o o3"></span><br>
              <span class="tb">Subir Documentos</span>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <form method="post">
    <div class="row text-center">
        <div class="col-md-6">
            <input class="sb" type="text" name="street" placeholder="Calle/Avenida/Blvd">
        </div>
        <div class="col-md-3">
            <input class="sb" type="text" name="no-ext" placeholder="No. Ext">
        </div>
        <div class="col-md-3">
            <input class="sb" type="text" name="interior" placeholder="No. Interior">
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-3">
            <input class="sb" type="text" name="suburb" placeholder="Colonia">
        </div>
        <div class="col-md-3">
            <input class="sb" type="text" name="postal" placeholder="Código Postal">
        </div>
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-3">
            <input class="sb" type="text" name="state" placeholder="Estado">
        </div>
        <div class="col-md-3">
            <input class="sb" type="text" name="country" placeholder="País">
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4"></div>
        <div class="col-md-2">

            <span class="reg"><i class="fa fa-angle-left"></i> Regresar</span>
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
