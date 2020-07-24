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
<?php


if (isset($_POST['submit'])) {
  session_start();

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$date = strval($day) . '-' . strval($month) . '-' . strval($year);
  $_SESSION['life2_name'] = $_POST['name'];
  $_SESSION['life2_gender'] = $_POST['gender'];
  $_SESSION['life2_date'] = $date;
  $_SESSION['life2_postal_code'] = $_POST['postal_code'];


  echo '<script>window.location.replace("eres.php")</script>';
}
 ?>

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
        <form method="post">
          <span>Primero, ¿Cual es tu nombre?</span><br>
          <input class="empty" name="name" type="text" required>
          <div class="soy">
            <span>Soy</span>

            <input type="radio" class="gender" value="male" id="male" name="gender" autofocus required>
            <label for="male">
              <img src="img/man.jpg" class="img-fluid" alt="">
            </label>
            <input type="radio" class="gender" value="female" id="female" name="gender" autofocus required>
            <label for="female">
              <img src="img/female.jpg" class="img-fluid" alt="">
            </label>
          </div>
          <div class="naci">
            <span>Nací el</span>
            <input type="text" name="day" placeholder="Día" required>
            <input type="text" name="month" placeholder="Mes" required>
            <input type="text" name="year" placeholder="Año" required>
          </div>
          <div class="mi">
            <span>Mi código postal es</span>
            <input type="text" name="postal_code" required>
          </div>
          <button type="submit" name="submit">Continuar</button>
        </form>


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
