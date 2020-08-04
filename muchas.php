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
<?php
if (isset($_POST['submit'])) {
  
  $_SESSION['sendusing'] = $_POST['select'];

    echo '<script>window.location.replace("segoru.php")</script>';

}

 ?>

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
      <form method="post">
        <?php if(isset($_SESSION['sendusing']) and $_SESSION['sendusing'] == 'whatsapp'){ ?>
              <input type="radio" name="select" checked value="whatsapp" id="1" autofocus required>
            <?php }else{ ?>
        <input type="radio" name="select" value="whatsapp" id="1" autofocus required>
      <?php } ?>
        <label for="1">
        <input type='text' placeholder='Whats app' name='whatapp'>
        </label><br>
        <?php if(isset($_SESSION['sendusing']) and $_SESSION['sendusing'] == 'email'){ ?>
              <input type="radio" name="select" id="2" value="email" autofocus required>
            <?php }else{ ?>
        <input type="radio" name="select" id="2" value="email" autofocus required>
      <?php } ?>
        <label for="2">Correo electrónico</label><br>
        
        <button type="submit" name="submit">Continuar</button>
      </form>
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
