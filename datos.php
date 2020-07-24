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
    <link rel="stylesheet" href="custom/datos.css" />
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

  $_SESSION['cont_name'] = $_POST['cont_name'];
  $_SESSION['cont_last_name'] = $_POST['cont_last_name'];
  $_SESSION['m_last_name'] = $_POST['m_last_name'];
  $_SESSION['mail'] = $_POST['mail'];
  $_SESSION['celular'] = $_POST['celular'];
  $_SESSION['rfc'] = $_POST['rfc'];
  $_SESSION['nationality'] = $_POST['nationality'];
  $_SESSION['sex'] = $_POST['sex'];
  $_SESSION['profession'] = $_POST['profession'];

  echo '<script>window.location.replace("direccion.php")</script>';
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
      <div class="col-md-4">
          <input class="sb" type="text" value="<?php if(isset($_SESSION['cont_name'])){ echo $_SESSION['cont_name']; } ?>" name="cont_name" required placeholder="Nombre (s)">
      </div>
      <div class="col-md-4">
          <input class="sb" type="text" value="<?php if(isset($_SESSION['cont_last_name'])){ echo $_SESSION['cont_last_name']; } ?>" name="cont_last_name" required placeholder="Apellido Paterno">
      </div>
      <div class="col-md-4">
          <input class="sb" type="text" value="<?php if(isset($_SESSION['m_last_name'])){ echo $_SESSION['m_last_name']; } ?>" name="m_last_name" required placeholder="Apellido Materno">
      </div>
  </div>
  <div class="row text-center">
      <div class="col-md-4">
          <input class="sb" name="mail" value="<?php if(isset($_SESSION['mail'])){ echo $_SESSION['mail']; } ?>" type="text" required placeholder="Correo">
      </div>
      <div class="col-md-4">
          <input class="sb" name="celular" type="text" value="<?php if(isset($_SESSION['celular'])){ echo $_SESSION['celular']; } ?>" required placeholder="Celular">
      </div>
      <div class="col-md-4">
          <input class="sb" type="text" value="<?php if(isset($_SESSION['rfc'])){ echo $_SESSION['rfc']; } ?>" name="rfc" required placeholder="RFC con homoclave">
      </div>
  </div>
  <div class="row text-center">
      <div class="col-md-4">
          <input class="sb" type="text" value="<?php if(isset($_SESSION['nationality'])){ echo $_SESSION['nationality']; } ?>" name="nationality" required placeholder="Nacionalidad">
      </div>
      <div class="col-md-4">
          <input class="sb" style="width: 80% !important;" value="<?php if(isset($_SESSION['sex'])){ echo $_SESSION['sex']; } ?>" name="sex" type="text" required placeholder="Sexo">
      </div>
      <div class="col-md-4">
          <input class="sb" type="text" value="<?php if(isset($_SESSION['profession'])){ echo $_SESSION['profession']; } ?>" name="profession" required placeholder="Profesión">
      </div>
  </div>
  <div class="row text-center">
      <div class="col-md-4"></div>
      <div class="col-md-2">

          <span class="reg"><i class="fa fa-angle-left"></i><a style="text-decoration: none; color: silver;" href="estas.php"> Regresar</a></span>
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
