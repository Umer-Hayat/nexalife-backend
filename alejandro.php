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
    <link rel="stylesheet" href="custom/alejendro.css" />
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
    

    
    $mf = $_POST['mf'];
    $ml = $_POST['ml'];
    $mb = $_POST['mb'];
    $mg = $_POST['mg'];
    $mo = $_POST['mo'];
    $sf = $_POST['sf'];
    $sl = $_POST['sl'];
    $sb = $_POST['sb'];
    $sg = $_POST['sg'];
    $so = $_POST['so'];

}
    // if ($mf >= 1) {
    //     // $_SESSION['']
    // }

 ?>
<!-- ============================ -->
  <!-- body Area -->
<!-- ============================ -->

<section class="body-area">
    <div class="container text-center">
        <p class="head-text">Alejandro, ¿A quienes aseguraremos?</p>
        <div class="tabs-div">

       
        <ul id="tabs" class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a id="tab-A" href="#pane-A" class="nav-link" data-toggle="tab" role="tab">Mis seres queridos y yo</a>
            </li>
            <li class="nav-item">
                <a id="tab-B" href="#pane-B" class="nav-link active" data-toggle="tab" role="tab">Solo yo</a>
            </li>
            <li class="nav-item">
                <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">Solo mis seres queridos</a>
            </li>
        </ul>
    </div>
    
        <div id="content" class="tab-content" role="tablist">
            <div id="pane-A" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-A">
                <div class="card-header" role="tab" id="heading-A">
                    <h5 class="mb-0">
                        <!-- Note: `data-parent` removed from here -->
                        <a data-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
                            Mis seres queridos y yo
                        </a>
                    </h5>
                </div>
            <!-- <form method="post"> -->
                <!-- Note: New place of `data-parent` -->
                <div id="collapse-A" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                    <div class="card-body">
                        <div class="mis-tab">
                            <p class="tab-heading">Escenario <span>Mis seres queridos y yo</span></p>
                            <div class="row">
                                <div class="col-lg-2 col-md-1"></div>
                                <div class="col-lg-8 col-md-10">
                                    <div class="f-img">
                                    <div class="row">
                                        <div class="col">
                                            <div class="f">
                                                <img src="img/female1.jpg" class="img-fluid mfe-img" alt="">
                                                <span class="q fq mfq">?</span>
                                                <div class="bt">
                                                    <button onclick="increment('mfhiddenVal','mftheCount', 'mfe-img','mfq','mfl')" class="button">+</button>
                                                    <input type="hidden" name="mf" id="mfhiddenVal" value="0"/>
                                                    <span id="mftheCount">0</span>
                                                    <button onclick="decrement('mfhiddenVal','mftheCount', 'mfe-img','mfq','mfl')" class="button">-</button>
                                                    <ul id="mfl">
                                                        <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-xs-12 m">
                                            <img src="img/man1.jpg" class="img-fluid mm-img" alt="">
                                            <span class="q mq mmq">?</span>
                                                <div class="bt">

                                                    <button onclick="increment('mmhiddenVal','mmtheCount', 'mm-img','mmq','ml')" class="button">+</button>
                                                    <input type="hidden" name="ml" id="mmhiddenVal" value="0"/>
                                                <span id="mmtheCount">0</span>
                                                <button onclick="decrement('mmhiddenVal','mmtheCount', 'mm-img','mmq','ml')" class="button">-</button>
                                                    <ul id="ml">
                                                        <li>
                                                            <input type="text" name="name" value="Alejandro" placeholder="Nombre"><br>
                                                            <input type="text" value="22 años" name="age" placeholder="Edad">
                                                        </li>
                                                    </ul>
                                                </div>
                                        </div>
                                        <div class="col col-xs-12 b">
                                            <img src="img/boy.jpg" class="img-fluid mb-img" alt="">
                                            <span class="q bq mbq">?</span>
                                                <div class="bt">
                                                    <button onclick="increment('mbhiddenVal','mbtheCount', 'mb-img','mbq','mbl')" class="button">+</button>
                                                    <input type="hidden" name="mb" id="mbhiddenVal" value="0"/>
                                                    <span id="mbtheCount">0</span>
                                                    <button onclick="decrement('mbhiddenVal','mbtheCount', 'mb-img','mbq','mbl')" class="button">-</button>
                                                    <ul id="mbl">
                                                        <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                    </ul>
                                                </div>
                                        </div>
                                        <div class="col col-xs-12 g">
                                            <img src="img/girl.jpg" class="img-fluid mg-img" alt="">
                                            <span class="q gq mgq">?</span>
                                                <div class="bt">
                                                    <button onclick="increment('mghiddenVal','mgtheCount', 'mg-img','mgq','mgl')" class="button">+</button>
                                                    <input type="hidden" name="mg" id="mghiddenVal" value="0"/>
                                                    <span id="mgtheCount">0</span>
                                                    <button onclick="decrement('mghiddenVal','mgtheCount', 'mg-img','mgq','mgl')" class="button">-</button>
                                                    <ul id="mgl">
                                                        <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                    </ul>
                                                </div>
                                            
                                        </div>
                                        <div class="col col-xs-12 o">
                                            <img src="img/old-man.jpg" class="img-fluid mo-img" alt="">
                                            <span class="q oq moq">?</span>
                                                <div class="bt">
                                                    <button onclick="increment('mohiddenVal','motheCount', 'mo-img','moq','mol')" class="button">+</button>
                                                    <input type="hidden" name="mo" id="mohiddenVal" value="0"/>
                                                    <span id="motheCount">0</span>
                                                    <button onclick="decrement('mohiddenVal','motheCount', 'mo-img','moq','mol')" class="button">-</button>
                                                    <ul id="mol">
                                                        <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                    </ul>
                                                </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="pane-B" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-B">
                <div class="card-header" role="tab" id="heading-B">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="true" aria-controls="collapse-B">
                            Solo yo
                        </a>
                    </h5>
                </div>
                <div id="collapse-B" class="collapse  show" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                    <div class="card-body">
                        <div class="solo-tab">
                            <p class="tab-heading">Escenario <span>Solo yo</span></p>
                            <div class="row">
                                <div class="col-lg-2 col-md-1"></div>
                                <div class="col-lg-8 col-md-10">
                                    <div class="f-img">
                                    <div class="row">
                                        <div class="col">
                                            <div class="f">
                                                
                                                <?php
                                                if (isset($_SESSION['exp_gender']) and $_SESSION['exp_gender'] == 'female') {
                                                ?>
                                                <input type="radio" checked class="gender" id="female" value="female" name="solo">

                                                <?php } else{ ?>

                                                <input type="radio" class="gender" id="female" value="female" name="solo">
                                                <?php } ?>


                                                <label for="female">
                                                    <img src="img/female1.jpg" class="img-fluid" alt="">
                                                </label>
                                                <div class="bt">
                                                    <ul>
                                                        <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col col-xs-12 m">
                                            
                                            <?php
                                                if (isset($_SESSION['exp_gender']) and $_SESSION['exp_gender'] == 'male') {
                                                ?>
                                                <input type="radio" checked class="gender" id="male" value="male" name="solo">

                                                <?php } else{ ?>

                                                <input type="radio" class="gender" id="male" value="male" name="solo">

                                                <?php } ?>

                                                    <label for="male">
                                                    <img src="img/man1.jpg" class="img-fluid" alt="">
                                                </label>
                                                <div class="bt">
                                                    <ul>
                                                        <li>Alejandro<br>22 años</li>
                                                    </ul>
                                                </div>
                                            
                                        </div>
                                        <div class="col col-xs-12 b">
                                            <input type="radio" value="boy" class="gender" id="boy" name="solo">
                                                <label for="boy">
                                                    <img src="img/boy.jpg" class="img-fluid" alt="">
                                                </label>
                                            <div class="bt">
                                                <ul>
                                                    <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col col-xs-12 g">
                                            <input type="radio" value="girl" class="gender" id="girl" name="solo">
                                            <label for="girl">
                                                <img src="img/girl.jpg" class="img-fluid" alt="">
                                            </label>
                                            <div class="bt">
                                                <ul>
                                                    <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col col-xs-12 o">
                                            <input type="radio" value="old-man" class="gender" id="old" name="solo">
                                                <label for="old">
                                                    <img src="img/old-man.jpg" class="img-fluid" alt="">
                                                </label>
                                            <div class="bt">
                                                <ul>
                                                    <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                <div class="card-header" role="tab" id="heading-C">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
                            Solo mis seres queridos
                        </a>
                    </h5>
                </div>
                <div id="collapse-C" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C">
                    <div class="card-body">
                        <div class="quer-tab">
                            <p class="tab-heading">Escenario <span>Solo mis seres queridos</span></p>
                            <div class="row">
                                <div class="col-lg-2 col-md-1"></div>
                                <div class="col-lg-8 col-md-10">
                                    <div class="f-img">
                                    <div class="row">
                                        <div class="col">
                                            <div class="f">
                                                <img src="img/female1.jpg" class="img-fluid sfe-img" alt="">
                                                <span class="q fq sfq">?</span>
                                                <div class="bt">
                                                    <button onclick="increment('sfhiddenVal','sftheCount', 'sfe-img','sfq','sfl')" class="button">+</button>
                                                    <input type="hidden" name="sf" id="sfhiddenVal" value="0"/>
                                                    <span id="sftheCount">0</span>
                                                    <button onclick="decrement('sfhiddenVal','sftheCount', 'sfe-img','sfq','sfl')" class="button">-</button>
                                                    <ul id="sfl">
                                                        <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-xs-12 m">
                                            <img src="img/man1.jpg" class="img-fluid sm-img" alt="">
                                            <span class="q mq smq">?</span>
                                                <div class="bt">

                                                    <button onclick="increment('smhiddenVal','smtheCount', 'sm-img','smq','sl')" class="button">+</button>
                                                    <input type="hidden" name="sm" id="smhiddenVal" value="0"/>
                                                <span id="smtheCount">0</span>
                                                <button onclick="decrement('smhiddenVal','smtheCount', 'sm-img','smq','sl')" class="button">-</button>
                                                    <ul id="sl">
                                                        <li>Alejandro<br>22 años</li>
                                                    </ul>
                                                </div>
                                        </div>
                                        <div class="col col-xs-12 b">
                                            <img src="img/boy.jpg" class="img-fluid sb-img" alt="">
                                            <span class="q bq sbq">?</span>
                                                <div class="bt">
                                                    <button onclick="increment('sbhiddenVal','sbtheCount', 'sb-img','sbq','sbl')" class="button">+</button>
                                                    <input type="hidden" name="sb" id="sbhiddenVal" value="0"/>
                                                    <span id="sbtheCount">0</span>
                                                    <button onclick="decrement('sbhiddenVal','sbtheCount', 'sb-img','sbq','sbl')" class="button">-</button>
                                                    <ul id="sbl">
                                                        <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                    </ul>
                                                </div>
                                        </div>
                                        <div class="col col-xs-12 g">
                                            <img src="img/girl.jpg" class="img-fluid sg-img" alt="">
                                            <span class="q gq sgq">?</span>
                                                <div class="bt">
                                                    <button onclick="increment('sghiddenVal','sgtheCount', 'sg-img','sgq','sgl')" class="button">+</button>
                                                    <input type="hidden" name="sg" id="sghiddenVal" value="0"/>
                                                    <span id="sgtheCount">0</span>
                                                    <button onclick="decrement('sghiddenVal','sgtheCount', 'sg-img','sgq','sgl')" class="button">-</button>
                                                    <ul id="sgl">
                                                        <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                    </ul>
                                                </div>
                                            
                                        </div>
                                        <div class="col col-xs-12 o">
                                            <img src="img/old-man.jpg" class="img-fluid so-img" alt="">
                                            <span class="q oq soq">?</span>
                                                <div class="bt">
                                                    <button onclick="increment('sohiddenVal','sotheCount', 'so-img','soq','sol')" class="button">+</button>
                                                    <input type="hidden" name="so" id="sohiddenVal" value="0"/>
                                                    <span id="sotheCount">0</span>
                                                    <button onclick="decrement('sohiddenVal','sotheCount', 'so-img','soq','sol')" class="button">-</button>
                                                    <ul id="sol">
                                                        <li>
                                                            <input type="text" name="name" placeholder="Nombre"><br>
                                                            <input type="text" name="age" placeholder="Edad">
                                                        </li>
                                                    </ul>
                                                </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-right">
            <button type="submit" name="submit" class="con-btn">Continuar</button>
    
        </div>
        <!-- </form> -->
    </div>
</section>

<!-- ============================ -->
  <!-- Footer Area -->
<!-- ============================ -->

<?php include("include/footer.php") ?>


    <script type="text/javascript">

        var gender = "<?php echo $_SESSION['exp_gender']; ?>";

        if (gender == 'male') {
            increment('mmhiddenVal','mmtheCount', 'mm-img','mmq','ml');
            increment('smhiddenVal','smtheCount', 'sm-img','smq','sl');
        }
        if (gender == 'female') {
            increment('mfhiddenVal','mftheCount', 'mfe-img','mfq','mfl');
            increment('sfhiddenVal','sftheCount', 'sfe-img','sfq','sfl');
        }

        function increment(hidenval,theCount,img,q,l){
            var counter = parseInt($(`#${hidenval}`).val());
            counter++;
            $(`#${hidenval}`).val(counter);
            $(`#${theCount}`).text(counter);
            if(counter > 0){
            //$('.fa-img').css('opacity', '1');
            $(`.${img}`).css("opacity", "1");
            $(`.${q}`).css({"display":"block"});
            $(`#${l}`).css({"display":"block"});
            }
        }
        function decrement(hidenval,theCount,img,q,l){
            var counter = parseInt($(`#${hidenval}`).val());
                counter--;
                if(counter >= 0){
                    $(`#${hidenval}`).val(counter);
                    $(`#${theCount}`).text(counter);
                    if(counter == 0){
                        $(`.${img}`).css('opacity', '0.4');
                        $(`.${q}`).css({"display":"none"});
                        $(`#${l}`).css({"display":"none"});
                        }
                }
        }
    </script>
  </body>
</html>
