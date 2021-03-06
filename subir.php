<?php  
require_once 'vendor/autoload.php';
?>
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
if (isset($_POST['submit'])) {
 extract($_SESSION);

 $body = '
<table>
  <tr>
    <td class="label">Name:</td>
    <td>'. $life2_name .'</td>
  </tr>
  <tr>
    <td class="label">Gender:</td>
    <td>' . $life2_gender . '</td>
  </tr>
  <tr>
    <td class="label">Date Of Birth:</td>
    <td>' . $life2_date . '</td>
  </tr>
  <tr>
    <td class="label">Postal Code:</td>
    <td>' . $life2_postal_code . '</td>
  </tr>
  <tr>
    <td class="label">Are You Smoker:</td>
    <td>' . $is_smoker . '</td>
  </tr>
  <tr>
    <td class="label">Do Exercise:</td>
    <td>' . $do_exercise . '</td>
  </tr>
  <tr>
    <td class="label">Do Practise:</td>
    <td>' . $do_practise . '</td>
  </tr>
  <tr>
    <td class="label">Insurace:</td>
    <td>' . $insurace . '</td>
  </tr>
  <tr>
    <td class="label">Insurance Type:</td>
    <td>' . $type . '</td>
  </tr>
  <tr>
    <td class="label">Insurance Price:</td>
    <td>' . $price . '</td>
  </tr>
  <tr>
    <td class="label">Contractor Name:</td>
    <td>' . $cont_name . '</td>
  </tr>
  <tr>
    <td class="label">Contractor Last Name:</td>
    <td>' . $cont_last_name . '</td>
  </tr>
  <tr>
    <td class="label">Contractor Mother Name:</td>
    <td>' . $m_last_name . '</td>
  </tr>
  <tr>
    <td class="label">Contractor Email:</td>
    <td>' . $mail . '</td>
  </tr>
  <tr>
    <td class="label">Contractor Celluler:</td>
    <td>' . $celular . '</td>
  </tr>
  <tr>
    <td class="label">Contractor RFC No:</td>
    <td>' . $rfc . '</td>
  </tr>
  <tr>
    <td class="label">Contractor nationallity:</td>
    <td>' . $nationality . '</td>
  </tr>
  <tr>
    <td class="label">Contractor Sex:</td>
    <td>' . $sex . '</td>
  </tr>
  <tr>
    <td class="label">Contractor Profession:</td>
    <td>' . $profession . '</td>
  </tr>
  <tr>
    <td class="label">Contractor Street No:</td>
    <td>' . $street . '</td>
  </tr>
  <tr>
    <td class="label">Contractor No_Ext:</td>
    <td>' . $no_ext . '</td>
  </tr>
  <tr>
    <td class="label">Contractor Interior:</td>
    <td>' . $interior . '</td>
  </tr>
  <tr>
    <td class="label">Contractor Suburb:</td>
    <td>' . $suburb . '</td>
  </tr>
  <tr>
    <td class="label">Contractor Postal Code:</td>
    <td>' . $postal . '</td>
  </tr>
  <tr>
    <td class="label">Contractor state:</td>
    <td>' . $state . '</td>
  </tr>
  <tr>
    <td class="label">Contractor country:</td>
    <td>' . $country . '</td>
  </tr>
</table>';




  $target_dir = "uploads/";
  $name1 = $_FILES['foto1']['name'];
  $foto1 = $target_dir . basename($_FILES["foto1"]["name"]);
  $name2 = $_FILES['foto2']['name'];
  $foto2 = $target_dir . basename($_FILES["foto2"]["name"]);
  $name3 = $_FILES['foto3']['name'];
  $foto3 = $target_dir . basename($_FILES["foto3"]["name"]);

  move_uploaded_file($_FILES['foto1']['tmp_name'],$target_dir.$name1);
  move_uploaded_file($_FILES['foto2']['tmp_name'],$target_dir.$name2);
  move_uploaded_file($_FILES['foto3']['tmp_name'],$target_dir.$name3);

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

 

  $query = "INSERT INTO `user_detail`(`exp_name`, `exp_gender`, `exp_year`, `exp_postal_code`, `mfname`, `mfage`, `mmname`, `mmage`, `mbname`, `mbage`, `mgname`, `mgage`, `moname`, `moage`, `soloname`, `soloage`, `sfname`, `sfage`, `smname`, `smage`, `sbname`, `sbage`, `sgname`, `sgage`, `soname`, `soage`, `sendusing`, `life2_name`, `life2_gender`, `life2_date`, `life2_postal_code`, `is_smoker`, `do_exercise`, `do_practice`, `insurance-title`, `inurance_type`, `insuraance_price`, `cont_name`, `cont_last_name`, `m_last_name`, `mail`, `celular`, `rfc`, `nationality`, `sex`, `profession`, `street`, `no_ext`, `interior`, `suburb`, `postal`, `state`, `country`, `official_pic1`, `official_pic2`, `address_pic`) VALUES ('$exp_name','$exp_gender','$exp_year','$exp_postal_code','$mfname1','$mfage1','$mmname1','$mmage1','$mbname1','$mbage1','$mgname1','$mgage1','$moname1','$moage1','$soloname1','$soloage1','$sfname1','$sfage1','$smname1','$smage1','$sbname1','$sbage1','$sgname1','$sgage1','$soname1','$soage1','$sendusing','$life2_name','$life2_gender','$life2_date','$life2_postal_code','$is_smoker','$do_exercise','$do_practise','$insurace','$type','$price','$cont_name','$cont_last_name','$m_last_name','$mail','$celular','$rfc','$nationality','$sex','$profession','$street','$no_ext','$interior','$suburb','$postal','$state','$country','$foto1','$foto2','$foto2')";

  if ($con->query($query) === TRUE) {
       echo "<script>alert('Data save successfully')</script>";
          session_destroy();
          echo '<script>window.location.replace("te.php")</script>';
    //    try{
    // $transprt = (new Swift_SmtpTransport('smtp.gmail.com',465,'ssl'))->setUsername('student.information.school@gmail.com')->setPassword('phpprojectA7');
    // $transprt->setStreamOptions([
    //     'ssl' => ['allow_self_signed' => true, 'verify_peer' => false, 'verify_peer_name' => false]
    //       ]);
    //     $mailer = new Swift_Mailer($transprt);
       
    //     $message = (new Swift_Message("Student Information System-Password Reset"))->setFrom('student.information.school@gmail.com')->setTo('umerhayat520@gmail.com')->setBody($body,'text/html');
    //     $result = $mailer->send($message);
    //     if ($result) {
    //       echo "<script>alert('Email sent successfully')</script>";
    //       session_destroy();
    //       echo '<script>window.location.replace("te.php")</script>';
    //     }
    //     else
    //     {
    //       echo "Email is not sent";
    //     }
    // }catch(Exception $e){
    //   echo $e;
    // }
  // echo "New record created successfully";

    
} else {
  echo "Error: " . $query . "<br>" . $con->error;
}


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
    <form method="post" enctype="multipart/form-data">
    <div class="row text-center">
        <div class="col-md-2"></div>

        <div class="col-md-4">
            <p>Identificación Oficial</p>
            <div class="row">
                <div class="col-md-6">
                    <img src="img/id1.png" id="viewimage1" width="170" height="120" alt="">
                    <input style="display: none;" type="file" id="foto1" name="foto1">
                    <label for="foto1"><p class="subir">Subir foto</p></label>
                    
                </div>
                <div class="col-md-6">
                    <img src="img/id2.png" id="viewimage2" width="170" height="120" alt="">
                    <input style="display: none;" type="file" id="foto2" name="foto2">
                    <label for="foto2"><p class="subir">Subir foto</p></label>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <p>Comprobante de domicilio</p>
            <img src="img/id3.jpg" id="viewimage3" width="170" height="120" alt=""><br>
            <input style="display: none;" type="file" id="foto3" name="foto3">
                    <label for="foto3"><p class="subir">Subir foto</p></label>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row text-center">
        <div class="col-md-4"></div>
        <div class="col-md-2">

            <span class="reg"><i class="fa fa-angle-left"></i> <a style="text-decoration: none; color: silver;" href="direccion.php">Regresar</a></span>
        </div>
        <div class="col-md-2">
            <button type="button" data-toggle="modal" data-target="#exampleModal">Continuar</button>
            <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>They will contact you to schedule the appointment</p>
                </div>
                <div class="modal-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Understood</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
    </div>
  </form>
</section>

<!-- ============================ -->
  <!-- Footer Area -->
<!-- ============================ -->

<?php include("include/footer.php") ?>

<script type="text/javascript">
  
   function readURL(input, id) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $(`#${id}`).attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#foto1").change(function() {
  readURL(this ,"viewimage1");
});
$("#foto2").change(function() {
  readURL(this ,"viewimage2");
});
$("#foto3").change(function() {
  readURL(this ,"viewimage3");
});

</script>

  </body>
</html>
