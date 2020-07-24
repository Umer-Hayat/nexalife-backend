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
    <link rel="stylesheet" href="custom/ejerces.css" />
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
  $_SESSION['do_exercise'] = $_POST['sino'];


   echo '<script>window.location.replace("practicas.php")</script>';
}

 ?>

<!-- ============================ -->
  <!-- body Area -->
<!-- ============================ -->

<section class="body-area">
  <div class="heading">

    <h4>¿Ejerces una profesión<br>de riesgo?</h4>
  </div>
  <div class="row text-center">
  <div class="col-md-2"></div>
    <div class="col-md-1">
      <img src="img/i.svg" class="img-fluid" alt="">
    </div>
      <div class="col-md-7">
        <div class="content text-left">
          <p>Se entiende por profesión de riesgo aquella en la que el riesgo asumido es mayor, tal como 
            bomberos, personal de emergencia, policías, mineros, petroleros, mecánicos, 
            acróbatas, pilotos, boxeadores, motociclismo, entre otros a consideración de la aseguradora.</p>
        </div>
    </div>
  <div class="col-md-2"></div>

  </div>
  <form method="post">
  <div class="row">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <div class="si text-center">
        <?php if(isset($_SESSION['do_exercise']) and $_SESSION['do_exercise'] == 'yes'){ ?>
              <input type="radio" id="si" checked value="yes" name="sino" autofocus required>
            <?php }else{ ?>
        <input type="radio" id="si" value="yes" name="sino" autofocus required>
      <?php } ?>
        <label for="si"><p>Si</p></label><br>

        <?php if(isset($_SESSION['do_exercise']) and $_SESSION['do_exercise'] == 'no'){ ?>
              <input type="radio" id="no" value="no" checked name="sino" autofocus required>
            <?php }else{ ?>
        <input type="radio" id="no" value="no" name="sino" autofocus required>
      <?php } ?>
        <label for="no"><p>No</p></label>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>
  
  <div class="row text-center">
    <div class="col-md-4"></div>
    <div class="col-md-2">
            <button type="button"> <a style="text-decoration: none; color: white;" href="eres.php">Regresar</a></button>
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
