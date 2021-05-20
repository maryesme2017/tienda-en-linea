<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php include './inc/link.php'; ?> 
</head>
<body id="container-page-index">
     <?php include './inc/navbar.php'; ?> 
    <div class="jumbotron" id="jumbotron-index">
      <h1><span class="tittles-pages-logo"></span> <small style="color: #fff;"></small></h1>
    
    </div>
    <section id="new-prod-index">
         <div class="container">
         <h1>
         <small style="color: #000;">Bienvenido a nuestra Estética en linea, aquí encontrara una gran variedad de cósmeticos y servicios
          "Aquí no vas sola, vas en equipo, vas impulsando y mi meta es llegar a más personas, invitarlas, 
          dar a conocer el sistema de OMNILIFE y la oportunidad que nos da."</small>
</h1>
            <div class="page-header">
                <h1>Novedades <small>productos</small></h1>
            </div>
            <div class="row">
              <head>
                  <body>
                    <?php 
                    include 'library/configServer.php';
                    include 'library/consulSQL.php';
                    $consulta= ejecutarSQL::consultar("select * from producto where Stock > 0 limit 6");
                    $totalproductos = mysqli_num_rows($consulta);
                    if($totalproductos>0){
                        while($fila=mysqli_fetch_array($consulta)){
                            echo '
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="assets/img-products/'.$fila['Imagen'].'">
                                    <div class="caption">
                                        <h3>'.$fila['Marca'].'</h3>
                                        <p>'.$fila['NombreProd'].'</p>
                                        <p>$'.$fila['Precio'].'</p>
                                        <p class="text-center">
                                            <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                            <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                        </p>

                                    </div>
                                </div>
                            </div>     
                            ';
                        }   
                    }else{
                        echo '<h2>No hay productos registrados en la tienda</h2>';
                    } 
                    ?>
                    </body>
                </head>  
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
                        <p>Registrese y hagase cliente de <span class="tittles-pages-logo">Estética Unisex</span> para recibir las mejores ofertas y descuentos especiales de nuestros productos.</p>
                        <p><a href="registration.php" class="btn btn-info btn-block">Registrarse</a></p>   
                   </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="assets/img/Smart-TV-RegInfo.png" alt="Smart-TV" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    <section id="distribuidores-index">
        <div class="container">
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12">
                <div class="page-header">
                  <h1>Nuestra <small style="color: #333;">Marca</small></h1>
                </div>
                <br><br>
                <img src="assets/img/logos-marcas.png" alt="logos-marcas" class="img-responsive">
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>