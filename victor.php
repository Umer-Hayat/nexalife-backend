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
    <link rel="stylesheet" href="custom/victor.css" />
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
    <div class="container text-center">
        <p class="head-text">¡Víctor, tu cotización está lista!</p>
        <div class="tabs-div">

       
        <ul id="tabs" class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Protección Básica</a>
            </li>
            <li class="nav-item">
                <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Protección media</a>
            </li>
            <li class="nav-item">
                <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">Protección Completa</a>
            </li>
        </ul>
    </div>
    
        <div id="content" class="tab-content" role="tablist">
            <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                <div class="card-header" role="tab" id="heading-A">
                    <h5 class="mb-0">
                        <!-- Note: `data-parent` removed from here -->
                        <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                            Protección Básica
                        </a>
                    </h5>
                </div>
    
                <!-- Note: New place of `data-parent` -->
                <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                    <div class="card-body">
                        <div class="pro-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-1"></div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="range-div">
                                        <span class="float-left">$200,000</span>
                                        <span class="cen">$ <span id="textInput1">2500,000</span></span>
                                        <div class="right">
                                          <span>$30,000,000</span>
                                          <div class="i-mark">
                                            <a data-target="con">
                                              <img src="img/i.svg" class="img-fluid" alt="">
                                            </a>
                                            <div class="main-box">
                                              <div id="con" class="con-box">
                                                <p>En esta sección podrás personalizar la suma asegurada que 
                                                  recibirán tus seres queridos. Te recomendamos  dar clic en 
                                                  el botón “Detalles de cobertura” para que nuestro CEO te explique a detalla las coberturas que incluye cada paquete</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <input type="range" min="200000" name="rangeInput" value="2500000" max="30000000"  onchange="updateTextInput(this.value, 'textInput1');" class="slider">
                                        <button class="anu-btn">Anual</button>
                                        <button class="men-btn">Mensual</button>
                                    </div>
                                    <div class="met-row">
                                    <div class="row met-row text-center">
                                        <div class="col-md-6">
                                            <div class="box">
                                                <img src="img/metlife.png" class="img-fluid" alt="">
                                                <p>Anual (Pago único)</p>
                                                <p class="price">$2,000.00</p>
                                                <p>Coberturas</p>
                                                <p class="bp">Protección por fallecimiento</p>
                                                
                                            </div>
                                            <p>Detalles de coberturas</p>
                                                <button>Continuar</button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="box">
                                                <img src="img/seguros.png" class="img-fluid" alt="">
                                                <p>Anual (Pago único)</p>
                                                <p class="price">$2,540.00</p>
                                                <p>Coberturas</p>
                                                <p class="bp">Protección por fallecimiento</p>
                                                
                                            </div>
                                            <p>Detalles de coberturas</p>
                                              <button>Continuar</button>
                                      </div>
                                    </div>
                                    <div class="text-center">
                                    <button class="phone-btn"><i class="fa fa-phone"></i> Hablar con un asesor</button>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-3 col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                <div class="card-header" role="tab" id="heading-B">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                            Protección media
                        </a>
                    </h5>
                </div>
                <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                    <div class="card-body">
                        <div class="solo-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-1"></div>
                                <div class="col-lg-6 col-md-10">
                                    <div class="range-div">
                                        <span class="float-left">$200,000</span>
                                        <span class="cen">$<span  id="textInput2">2500,000</span></span>
                                        <div class="right">
                                          <span>$30,000,000</span>
                                          <div class="i-mark">
                                            <a data-target="con">
                                              <img src="img/i.svg" class="img-fluid" alt="">
                                            </a>
                                            <div class="main-box">
                                              <div id="con" class="con-box">
                                                <p>En esta sección podrás personalizar la suma asegurada que 
                                                  recibirán tus seres queridos. Te recomendamos  dar clic en 
                                                  el botón “Detalles de cobertura” para que nuestro CEO te explique a detalla las coberturas que incluye cada paquete</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <!-- <input type="range"  min="0" max="100"> -->
                                        <input type="range" min="200000" name="rangeInput" value="2500000" max="30000000"  onchange="updateTextInput(this.value, 'textInput2');" class="slider">
                                        <button class="anu-btn">Anual</button>
                                        <button class="men-btn">Mensual</button>
                                    </div>
                                    
                                    <div class="met-row">
                                    <div class="row met-row text-center">
                                        <div class="col-md-6">
                                            <div class="box">
                                                <img src="img/metlife.png" class="img-fluid" alt="">
                                                <p>Anual (Pago único)</p>
                                                <p class="price">$2,000.00</p>
                                                <p>Coberturas</p>
                                                <p class="bp">Protección por fallecimiento</p>
                                                <p class="bp">Muerte Accidental</p>
                                            </div>
                                            <p>Detalles de coberturas</p>
                                                <button>Continuar</button>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="box">
                                                <img src="img/seguros.png" class="img-fluid" alt="">
                                                <p>Anual (Pago único)</p>
                                                <p class="price">$2,540.00</p>
                                                <p>Coberturas</p>
                                                <p class="bp">Protección por fallecimiento</p>
                                                <p class="bp">Muerte Accidental</p>
                                            </div>
                                            <p>Detalles de coberturas</p>
                                              <button>Continuar</button>
                                      </div>
                                    </div>
                                    <div class="text-center">
                                    <button class="phone-btn"><i class="fa fa-phone"></i> Hablar con un asesor</button>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-3 col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                <div class="card-header" role="tab" id="heading-C">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
                            Protección Completa
                        </a>
                    </h5>
                </div>
                <div id="collapse-C" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C">
                    <div class="card-body">
                        <div class="com-tab">
                            <div class="row">
                                <div class="col-lg-2 col-md-1"></div>
                                <div class="col-lg-8 col-md-10">
                                    <div class="range-div">
                                        <span class="float-left">$200,000</span>
                                        <span class="cen">$<span  id="textInput3">2500,000</span></span>
                                        <div class="right">
                                          <span>$30,000,000</span>
                                          <div class="i-mark">
                                            <a data-target="con">
                                              <img src="img/i.svg" class="img-fluid" alt="">
                                            </a>
                                            <div class="main-box">
                                              <div id="con" class="con-box">
                                                <p>En esta sección podrás personalizar la suma asegurada que 
                                                  recibirán tus seres queridos. Te recomendamos  dar clic en 
                                                  el botón “Detalles de cobertura” para que nuestro CEO te explique a detalla las coberturas que incluye cada paquete</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <input type="range" min="200000" name="rangeInput" value="2500000" max="30000000"  onchange="updateTextInput(this.value, 'textInput3');" class="slider">

                                        <button class="anu-btn">Anual</button>
                                        <button class="men-btn">Mensual</button>
                                    </div>
                                    <div class="met-row">
                                    <div class="row met-row text-center">
                                        <div class="col-md-4">
                                            <div class="box">
                                                <img src="img/metlife.png" class="img-fluid" alt="">
                                                <p>Anual (Pago único)</p>
                                                <p class="price">$2,000.00</p>
                                                <p>Coberturas</p>
                                                <p class="bp">Protección por fallecimiento</p>
                                                <p class="bp">Muerte Accidental</p>
                                                <p class="bp">Protección por Invalidez</p>

                                            </div>
                                            <p>Detalles de coberturas</p>
                                                <button>Continuar</button>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="box">
                                                <img src="img/seguros.png" class="img-fluid" alt="">
                                                <p>Anual (Pago único)</p>
                                                <p class="price">$2,540.00</p>
                                                <p>Coberturas</p>
                                                <p class="bp">Protección por fallecimiento</p>
                                                <p class="bp">Muerte Accidental</p>
                                                <p class="bp">Protección por Invalidez</p>
                                            </div>
                                            <p>Detalles de coberturas</p>
                                              <button>Continuar</button>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="box">
                                            <img src="img/aya.png" class="img-fluid aya-img" alt="">
                                            <p>Anual (Pago único)</p>
                                            <p class="price">$2,540.00</p>
                                            <p>Coberturas</p>
                                            <p class="bp">Protección por fallecimiento</p>
                                            <p class="bp">Muerte Accidental</p>
                                            <p class="bp">Protección por Invalidez</p>
                                        </div>
                                        <p>Detalles de coberturas</p>
                                          <button>Continuar</button>
                                  </div>
                                    </div>
                                    <div class="text-center">
                                    <button class="phone-btn"><i class="fa fa-phone"></i> Hablar con un asesor</button>
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

    </div>
</section>
<div class="whatsapp">
    <img src="img/whatsapp.png" class="img-fluid whatsapp-img" alt="">
</div>


<!-- ============================ -->
  <!-- Footer Area -->
<!-- ============================ -->

<?php include("include/footer.php") ?>

    <script type="text/javascript">
        function updateTextInput(val , id) {
          document.getElementById(id).innerHTML=val; 
        }
    </script>
  </body>
</html>
