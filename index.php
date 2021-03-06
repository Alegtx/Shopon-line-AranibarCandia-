<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Inicio</title>
    <?php include './incluir/link.php'; ?>
  </head>
  <body id="container-page-index">
    <?php include './incluir/navbar.php'; ?>
    <div class="jumbotron" id="jumbotron-index">
      <h1><span class="tittles-pages-logo">Shopon-line</span> <small style="color: #fff;">Bolivia</small></h1>
      <p>
        Bienvenido a nuestra tienda en linea, aquí encontrara una gran variedad de artículos para el hogar.
      </p>
    </div>
    <section id="new-prod-index">
      <div class="container">
        <div class="page-header">
          <h1>Supermercados <small>afiliados</small></h1>
        </div>
        <div class="row">
          <?php
            include 'conexion/configServer.php';
            include 'conexion/consultaSQL.php';
            $consulta= ejecutarSQL::consultar("select * from administrador where Usuario != 'admin' order by Usuario");
            $admins = mysqli_num_rows($consulta);
            if($admins>0)
            {
              while($fila=mysqli_fetch_array($consulta))
              {
                echo '
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <h3><b><p class="text-center">'.$fila['Usuario'].'</p></b></h3> 
                      <img src="assets/img-supermercados/'.$fila['Imagen'].'">
                      <div class="caption">
                      </div>
                    </div>
                  </div>';
              }
            }
            else
            {
              echo '<h2>No hay productos supermecados registrados en la tienda.</h2>';
            }  
          ?>  
        </div>
      </div>
    </section>
    <section id="reg-info-index">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 text-center">
            <article style="margin-top:20%;">
              <p><i class="fa fa-users fa-4x"></i></p>
              <h3>Registrate</h3>
              <p>Registrese y hagase cliente de <span class="tittles-pages-logo">Shopon-line</span> para recibir las mejores ofertas y descuentos especiales de nuestros productos.</p>
              <p><a href="registro" class="btn btn-info btn-block">Registrarse</a></p>   
            </article>
          </div>
          <div class="col-xs-12 col-sm-4">
            <img src="assets/img/Bolsa-de-compras.png" alt="Bolsa-Compras" class="img-responsive">
          </div>
        </div>
      </div>
    </section>
    <?php include './incluir/footer.php'; ?>
  </body>
</html>