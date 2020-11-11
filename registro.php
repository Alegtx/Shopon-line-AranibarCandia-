<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <?php include './incluir/link.php'; ?>
    <link rel="stylesheet" href="css/gsdk-bootstrap-wizard.css"/>
   
</head>
<body id="container-page-registration">
    <?php include './incluir/navbar.php'; ?>
    <section id="form-registration">
        <div class="container">
            <div class="row">
                <div class="page-header">
                  <h1>Registro de usuarios <small class="tittles-pages-logo">Shopon-line</small></h1>
                </div>
                <div class="col-xs-12 col-sm-6 text-center">
                   <br><br><br>
                    <p><i class="fa fa-users fa-5x"></i></p>
                    <p class="lead">
                        Al registrarse recibira notificaciones de nuestros productos y ofertas más recientes en nuestra tienda.
                    </p>
                    <br>
                    <img src="assets/img/img-registro.png" alt="compras" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-6">
                   <br><br>
                    <div id="container-form">
                       <p style="color:#fff;" class="text-center lead">Debera de llenar todos los campos para registrarse</p>
                        <!-- ==================== Wizard =============== -->
                        <div class="wizard-container">
                          <div class="card wizard-card" data-color="orange" id="wizardProfile">
                            <form class="form-horizontal FormCatElec" action="procesos/registrarCliente.php" role="form" method="post" data-form="save">
                              <div class="wizard-header">
                                <h3>
                                <small>Esta informacion nos ayuda a concocerte.</small>
                                </h3>
                              </div>
                              <div class="wizard-navigation">
                                <ul>
                                  <li><a href="#credenciales" data-toggle="tab">Credenciales de tu cuenta</a></li>
                                  <li><a href="#datos" data-toggle="tab">Datos personales</a></li>
                                  <li><a href="#contacto" data-toggle="tab">Direccion y contacto</a></li>
                                  <li><a href="#captcha" data-toggle="tab">Termina tu registro</a></li>
                                </ul>
                              </div>
                              <div class="tab-content">
                                <!-- ==================== Credenciales =============== -->
                                <div class="tab-pane" id="credenciales">
                                  <div class="row">
                                    <h4 class="info-text"> Vamos a empezar con informacion basica.</h4>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                          <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su nombre de usuario" required name="clien-usuario" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras)." pattern="[a-zA-Z]{1,9}" maxlength="9">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                          <input class="form-control all-elements-tooltip" id="password" type="password" placeholder="Introduzca una contraseña" required name="clien-pass" data-toggle="tooltip" data-placement="top" title="Defina una contraseña para iniciar sesión">
                                          <div class="input-group-addon">
                                            <span id="mostrar-ocultar" style="cursor:pointer;" class="fa fa-eye"></span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- ==================== Fin credenciales =============== -->

                                <!-- ==================== Datos personales =============== -->
                                <div class="tab-pane" id="datos">
                                  <div class="row">
                                    <h4 class="info-text"> Ahora vamos con tus datos personales</h4>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                          <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su número de NIT o CI" required name="clien-nit" data-toggle="tooltip" data-placement="top" title="Ingrese su número de NIT. Solamente números y guiones(-)." maxlength="30" pattern="[0-9-]{7,30}">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                          <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese sus nombres" required name="clien-nombre" data-toggle="tooltip" data-placement="top" title="Ingrese sus nombres. (solamente letras)." pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                          <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese sus apellidos" required name="clien-apellidos" data-toggle="tooltip" data-placement="top" title="Ingrese sus apellidos. (solamente letras). " pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- ==================== Fin datos personales =============== -->

                                <!-- ==================== Contacto =============== -->
                                <div class="tab-pane" id="contacto">
                                  <div class="row">
                                    <h4 class="info-text"> Como te encontramos y a donde te contactamos?</h4>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                          <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su dirección" required name="clien-dir" data-toggle="tooltip" data-placement="top" title="Ingrese la direción en la reside actualmente" maxlength="100">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                                          <input class="form-control all-elements-tooltip" type="tel" placeholder="Ingrese su número telefónico" required name="clien-phone" maxlength="11" pattern="[0-9]{8,11}" data-toggle="tooltip" data-placement="top" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 11.">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-at"></i></div>
                                          <input class="form-control all-elements-tooltip" type="email" placeholder="Ingrese su Email" required name="clien-email" data-toggle="tooltip" data-placement="top" title="Ingrese la dirección de su Email." maxlength="50">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- ==================== Fin contacto =============== -->

                                <!-- ==================== Contacto =============== -->
                                <div class="tab-pane" id="captcha">
                                  <div class="row">
                                    <h4 class="info-text"> Como te encontramos y a donde te contactamos?</h4>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><img src="./captcha/Captcha.php"></div>
                                          <input class="form-control all-elements-tooltip" type="testo_captcha" placeholder="Ingrese el captcha" required name="clien-captcha" data-toggle="tooltip" data-placement="top" title="Ingrese el captcha." maxlength="50"> 
                                        </div>
                                      </div>
                                      <br>
                                      <p><button type="submit" class="btn btn-success btn-block"><i class="fa fa-pencil"></i>&nbsp; Registrarse</button></p>
                                      <div class="ResForm" style="width: 100%; color: black; text-align: center; margin: 0;"></div>
                                    </div>
                                  </div>
                                </div>
                                <!-- ==================== Fin contacto =============== -->
                              </div>
                              <!-- ==================== Wizard Footer =============== --> 
                              <div class="wizard-footer height-wizard">
                                <div class="pull-right">
                                  <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Siguiente'/>
                                </div>
                                <div class="pull-left">
                                  <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Anterior'/>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                              <!-- ==================== Fin wizard footer =============== --> 
                            </form>
                          </div>
                        </div>
                        <!-- ==================== Fin Wizard =============== -->
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <?php include './incluir/footer.php'; ?>
</body>
</html>