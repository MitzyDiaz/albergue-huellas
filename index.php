<?php
  session_start();
  if(isset($_SESSION['tipo_usuario'])){
    if($_SESSION['tipo_usuario'] == 1){
      header('Location: admin/aindex.php');

    } else if($_SESSION['tipo_usuario'] == 2){
      header('Location: usuario/uindex.php');
}

  
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome/css/solid.min.css">
    <title>Formulario de Adopción</title>
</head>

<header id="header">
        <nav class="menu">
            <div class="logo">
                <a href="index.php"> <img src="img/logo-min.png" alt=""></a>  
                <a href="#" class="btn-menu" id="btn-menu"><i class="icono fas fa-bars"></i></a>
            </div>
            <div class="enlaces" id="enlaces">
                <a href="index.php"><i class="fas fa-home"></i>Inicio</a>
                <a href="nosotros.php"><i class="fas fa-dog"></i>Nosotros</a>
                <a href="galeriaBase.php"><i class="fas fa-images"></i>Galeria</a>
                <a href="adopta.php"><i class="fas fa-bone"></i>Adopta una Huella</a>
                <a href="contacto.php"><i class="fas fa-envelope"></i>Contacto</a>
            </div>
        </nav>


</header>

<body>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/img1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/img2.png" class="d-block w-100" href="nosotros.php">
                <div class="carousel-caption d-none d-md-block">
                    <h5> <a href="nosotros.php">Nosotros</a></h5>
                   
                </div>
            </div>
            <div class="carousel-item">
            <img src="img/img3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Contacto</h5>
                <p><a href=contacto.php>Más información.</a></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>

        <br>
        <br>
        </div>

        <div class="media">
  <img style="width:200px; height:80px;" src="img/logo-texto.png" class="align-self-start mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0" class="wow shake">Albergue Huellas</h5>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div>


<div class="media">
  <div class="media-body">
    <h5 class="mt-1 ml-5">Responsabilidad Social</h5>
    <p class="ml-5">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p class="ml-5">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
  <img style="width:200px; height:200px;" src="img/logo.png" class="align-self-end ml-3" alt="...">
</div>



<br>
<br>
        




<div class="card-group">
  <div class="card" >
    <img src="img/cards1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Adopta una Huella</h5>
      <p class="card-text">Conoce nuestro sistema de adopción.</p>
      <button type="button" class="btn btn-primary btn-lg btn-block  botcol" onclick="window.location='login.php'">Más Info</button>
          </div>
  </div>
  <div class="card">
    <img src="img/cards2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Galeria</h5>
      <p class="card-text">Ve las fotos más recientes de perritos en adopción</p>
      <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location='galeria.php'">Más Info</button>
          </div>
  </div>
  <div class="card">
    <img src="img/cards3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Contacto</h5>
      <p class="card-text">Contactate con Nosotros vía Email.</p>
      <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location='contacto.php'">Más Info</button>
          </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/val.js"></script>
</body>

<footer class="footer">
          <p>Copyright © 2019 alberguehuellas.com Todos los derechos reservados.</p>
</footer>

</html>

