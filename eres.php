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
    <link rel="stylesheet" href="custom/eres.css" />
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
  <div class="heading">

    <h4>¿Eres fumador?</h4>
  </div>
  
  <div class="row text-center">
      <div class="col-md-4"></div>
      <form method="post">
        <div class="col-md-2">
            <div class="images">
                <!-- <img src="img/sigarate.svg" class="img-fluid" alt=""> -->
                <input type="radio" class="smoke" id="sig" name="smoke">
                <label for="sig">
                    <img src="img/sigarate.svg" class="img-fluid" alt="">
                </label>
                <p>Si</p>
                <button>Regresar</button>
            </div>
        </div>
        <div class="col-md-2">
          <div class="images">
              <!-- <img src="img/not.svg" class="img-fluid" alt=""> -->
              <input type="radio" class="smoke" id="not" name="smoke">
              <label for="not">
                  <img src="img/not.svg" class="img-fluid" alt="">
              </label>
              <p>No</p>
              <button type="submit" name="submit">Continuar</button>
            </div>
        </div>
    </form>
      <div class="col-md-4"></div>
  </div>
</section>


<!-- ============================ -->
  <!-- Footer Area -->
<!-- ============================ -->

<?php include("include/footer.php") ?>
  </body>
</html>
