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
    <link rel="stylesheet" href="custom/subir.css" />
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
    <div class="row text-center">
        <div class="col-md-2"></div>

        <div class="col-md-4">
            <p>Identificación Oficial</p>
            <div class="row">
                <div class="col-md-6">
                    <img src="img/id1.png" class="img-fluid" alt="">
                    <input style="display: none;" type="file" id="foto1" value="Subir foto" name="foto1">
                    <label for="foto1"><p class="subir">Subir foto</p></label>
                    
                </div>
                <div class="col-md-6">
                    <img src="img/id2.png" class="img-fluid" alt="">
                    <input style="display: none;" type="file" id="foto2" value="Subir foto" name="foto2">
                    <label for="foto2"><p class="subir">Subir foto</p></label>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <p>Comprobante de domicilio</p>
            <img src="img/id3.jpg" class="img-fluid" alt=""><br>
            <input style="display: none;" type="file" id="foto3" value="Subir foto" name="foto3">
                    <label for="foto3"><p class="subir">Subir foto</p></label>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row text-center">
        <div class="col-md-4"></div>
        <div class="col-md-2">

            <span class="reg"><i class="fa fa-angle-left"></i> Regresar</span>
        </div>
        <div class="col-md-2">
            <button>Continuar</button>
        </div>
        <div class="col-md-4"></div>
    </div>
</section>

<!-- ============================ -->
  <!-- Footer Area -->
<!-- ============================ -->

<?php include("include/footer.php") ?>
  </body>
</html>
