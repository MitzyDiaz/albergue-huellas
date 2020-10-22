<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">   
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome/css/solid.min.css">
    <title>Adopta una Huella</title>
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

<h1>Contacto</h1>

<div class="media">
  <img  style="width:80px; height:80px;" src="img/logc.jpg" class="align-self-start mr-2" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Dirección</h5>
    <p>Calle gardenia 139, Las flores, Nezahualcóyotl, Estado de México.</p>
  </div>
</div>


<div class="media">
  <img  style="width:80px; height:80px;" src="img/logc.jpg" class="align-self-start mr-2" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Telefono de Contacto</h5>
    <p>55 6068 2013</p>
  </div>
</div>


<br>
<h1>Mapa de Ubicación</h1>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.8484704462176!2d-99.02593878561808!3d19.418952046150096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fcb77cd88cb7%3A0x37cf97b030ef44f9!2sCalle%20Gardenia%20139%2C%20Las%20Flores%2C%2057310%20Nezahualc%C3%B3yotl%2C%20M%C3%A9x.!5e0!3m2!1sen!2smx!4v1567316732769!5m2!1sen!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


<br>
        


<div class="card-group">
  <div class="card" >
    <img src="img/cards1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Adopta una Huella</h5>
      <p class="card-text">Conoce nuestro sistema de adopción.</p>
      <button type="button" class="btn btn-primary btn-lg btn-block" onclick="window.location='login.php'">Más Info</button>
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
        
</body>


<footer>
<?php include("footer.php")?>
</footer>
</html>