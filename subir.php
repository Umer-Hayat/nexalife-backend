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
<?php include("include/db.php") ?>
<?php
// echo  $_SESSION['soloname'];
// echo  $_SESSION['soloage'];
// echo  $_SESSION['do_practise'];
// echo  $_SESSION['do_exercise'];

if (isset($_POST['submit'])) {

  if (isset($_SESSION['insurance_for']) and $_SESSION['insurance_for'] == "me_and_f") {
    
    if (isset($_SESSION['mfname'])) {
      $mfname1 = $_SESSION['mfname'];
      $mfage1 = $_SESSION['mfage'];
    }else{
      $mfname1 = "_";
      $mfage1 = "_";
    }
    if (isset($_SESSION['mmname'])) {
      $mmname1 = $_SESSION['mmname'];
      $mmage1 = $_SESSION['mmage'];
    }else{
      $mmname1 = "_";
      $mmage1 = "_";
    }
    if (isset($_SESSION['mbname'])) {
      $mbname1 = $_SESSION['mbname'];
      $mbage1 = $_SESSION['mbage'];
    }else{
      $mbname1 = "_";
      $mbage1 = "_";
    }
    if (isset($_SESSION['mgname'])) {
      $mgname1 = $_SESSION['mgname'];
      $mgage1 = $_SESSION['mgage'];
    }else{
      $mgname1 = "_";
      $mgage1 = "_";
    }
    if (isset($_SESSION['moname'])) {
      $moname1 = $_SESSION['moname'];
      $moage1 = $_SESSION['moage'];
    }else{
      $moname1 = "_";
      $moage1 = "_";
    }
  }else{

      $mfname1 = "_";
      $mfage1 = "_";
      $mmname1 = "_";
      $mmage1 = "_";
      $mbname1 = "_";
      $mbage1 = "_";
      $mgname1 = "_";
      $mgage1 = "_";
      $moname1 = "_";
      $moage1 = "_";

  }

  if (isset($_SESSION['insurance_for']) and $_SESSION['insurance_for'] == "only_me") {

      $soloname1 = $_SESSION['soloname'];
      $soloage1 = $_SESSION['soloage'];

    }else{
        $soloname1 = "_";
        $soloage1 = "_";
    }
    
    // $_SESSION['insurance_for'] = "only_me";

 if (isset($_SESSION['insurance_for']) and $_SESSION['insurance_for'] == "only_me") {

    if (isset($_SESSION['sfname'])) {
      $sfname1 = $_SESSION['sfname'];
      $sfage1 = $_SESSION['sfage'];
    }else{
      $sfname1 = "_";
      $sfage1 = "_";
    }
    if (isset($_SESSION['smname'])) {
      $smname1 = $_SESSION['smname'];
      $smage1 = $_SESSION['smage'];
    }else{
      $smname1 = "_";
      $smage1 = "_";
    }
    if (isset($_SESSION['sbname'])) {
      $sbname1 = $_SESSION['sbname'];
      $sbage1 = $_SESSION['sbage'];
    }else{
      $sbname1 = "_";
      $sbage1 = "_";
    }
    if (isset($_SESSION['sgname'])) {
      $sgname1 = $_SESSION['sgname'];
      $sgage1 = $_SESSION['sgage'];
    }else{
      $sgname1 = "_";
      $sgage1 = "_";
    }
    if (isset($_SESSION['soname'])) {
      $soname1 = $_SESSION['soname'];
      $soage1 = $_SESSION['soage'];
    }else{
      $soname1 = "_";
      $soage1 = "_";
    }
  }else{

      $sfname1 = "_";
      $sfage1 = "_";
      $smname1 = "_";
      $smage1 = "_";
      $sbname1 = "_";
      $sbage1 = "_";
      $sgname1 = "_";
      $sgage1 = "_";
      $soname1 = "_";
      $soage1 = "_";
  }
$_SESSION['mail'] = "abc";

  extract($_SESSION);
  // $query =  "INSERT INTO `user_detail`(`exp_name`, `exp_gender`, `exp_year`, `exp_postal_code`, `mfname`, `mfage`, `mmname`, `mmage`, `mbname`, `mbage`, `mgname`, `mgage`, `moname`, `moage`, `solfname`, `solfage`, `solmname`, `solmage`, `solgname`, `solgage`, `soloname`, `soloage`, `sfname`, `sfage`, `smname`, `smage`, `sbname`, `sbage`, `sgname`, `sgage`, `soname`, `soage`, `sendusing`, `lifeto_name`, `lifeto_gender`, `lifeto_date`, `lifeto_postal_code`, `is_smoker`, `do_exercise`, `do_practice`, `insurance-title`, `inurance_type`, `insuraance_price`, `cont_name`, `cont_last_name`, `m_last_name`, `mail`, `cellular`, `rfc_nationality`, `sex`, `profession`, `streetno_ext`, `interior`, `suburb`, `postal`, `state`, `country`) VALUES ([$exp_name],[$exp_gender],[$exp_year],[$exp_postal_code],[$mfname1],[$mfage1],[$mmname1],[$mmage1],[$mbname1],[$mbage1],[$mgname1],[$mgage1],[$moname1],[$moage1],[$solfname],[$solfage],[$solmname],[$solmage],[$solgname],[$solgage],[$soloname1],[$soloage1],[$sfname1],[$smname1],[$smage1],[$sbname1],[$sbage1],[$sgname1],[$sgage1],[$soname],[$soage],[$sendusing],[$life2_name],[$life2_gender],[$life2_date],[$life2_postal_code],[$is_smoker],[$do_exercise],[$do_practice],[$insurance],[$type],[$price],[$cont_name],[$cont_last_name],[$m_last_name],[$mail],[$celular],[$rfc],[$sex],[$profession],[$street],[$interior],[$suburb],[$postal],[$state],[$country])";

  $query = "INSERT INTO `user_detail`(`exp_name`, `exp_gender`, `exp_year`, `exp_postal_code`, `mfname`, `mfage`, `mmname`, `mmage`, `mbname`, `mbage`, `mgname`, `mgage`, `moname`, `moage`, `soloname`, `soloage`, `sfname`, `sfage`, `smname`, `smage`, `sbname`, `sbage`, `sgname`, `sgage`, `soname`, `soage`, `sendusing`, `life2_name`, `life2_gender`, `life2_date`, `life2_postal_code`, `is_smoker`, `do_exercise`, `do_practice`, `insurance-title`, `inurance_type`, `insuraance_price`, `cont_name`, `cont_last_name`, `m_last_name`, `mail`, `celular`, `rfc`, `nationality`, `sex`, `profession`, `street`, `no_ext`, `interior`, `suburb`, `postal`, `state`, `country`) VALUES ('$exp_name','$exp_gender','$exp_year','$exp_postal_code','$mfname1','$mfage1','$mmname1','$mmage1','$mbname1','$mbage1','$mgname1','$mgage1','$moname1','$moage1','$soloname1','$soloage1','$sfname1','$sfage1','$smname1','$smage1','$sbname1','$sbage1','$sgname1','$sgage1','$soname1','$soage1','$sendusing','$life2_name','$life2_gender','$life2_date','$life2_postal_code','$is_smoker','$do_exercise','$do_practise','$insurace','$type','$price','$cont_name','$cont_last_name','$m_last_name','$mail','$celular','$rfc','$nationality','$sex','$profession','$street','$no_ext','$interior','$suburb','$postal','$state','$country')";
// die'('$query);
    // $result = $con->query($query);

    // if ($result) {
    //   echo "<script>alert('data inserted successfully')</script>";
    //   session_destroy();
    // }else{
    //   echo "<script>alert('data Not inserted successfully')</script>";
    // }

  if ($con->query($query) === TRUE) {
  echo "New record created successfully";

} else {
  echo "Error: " . $query . "<br>" . $con->error;
}

$con->close();

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
            <button type="submit" onclick="alert('Your data will be stored in database')" name="submit">Continuar</button>
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
