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
  $_SESSION['no_ext'] = $_POST['no-ext'];
  $_SESSION['interior'] = $_POST['interior'];
  $_SESSION['suburb'] = $_POST['suburb'];
  $_SESSION['postal'] = $_POST['postal'];
  $_SESSION['state'] = $_POST['state'];
  $_SESSION['country'] = $_POST['country'];

  echo '<script>window.location.replace("subir.php")</script>';
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
            <input class="sb" type="text" value="<?php if(isset($_SESSION['street'])){ echo $_SESSION['street']; } ?>" name="street" required placeholder="Calle/Avenida/Blvd">
        </div>
        <div class="col-md-3">
            <input class="sb" type="text" value="<?php if(isset($_SESSION['no_ext'])){ echo $_SESSION['no_ext']; } ?>" name="no-ext" required placeholder="No. Ext">
        </div>
        <div class="col-md-3">
            <input class="sb" type="text" value="<?php if(isset($_SESSION['interior'])){ echo $_SESSION['interior']; } ?>" name="interior" required placeholder="No. Interior">
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-3">
            <input class="sb" type="text" value="<?php if(isset($_SESSION['suburb'])){ echo $_SESSION['suburb']; } ?>" name="suburb" required placeholder="Colonia">
        </div>
        <div class="col-md-3">
            <input class="sb" type="text" value="<?php if(isset($_SESSION['postal'])){ echo $_SESSION['postal']; } ?>" name="postal" required placeholder="Código Postal">
        </div>
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-3">
            <input class="sb" type="text" value="<?php if(isset($_SESSION['state'])){ echo $_SESSION['state']; } ?>" name="state" required placeholder="Estado">
        </div>
        <div class="col-md-3">
            <input class="sb" type="text" value="<?php if(isset($_SESSION['country'])){ echo $_SESSION['country']; } ?>" name="country" required placeholder="País">
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4"></div>
        <div class="col-md-2">

            <span class="reg"><i class="fa fa-angle-left"></i><a style="text-decoration: none; color: silver;" href="datos.php"> Regresar</a></span>
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
