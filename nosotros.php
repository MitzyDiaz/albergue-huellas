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

<h1>Nosotros</h1>

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Misión
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      Somos una comunidad que trabaja en pro de los derechos de los animales, fomentando la responsabilidad y trato positivo a través de adopciones mediante la difusión en redes sociales y participación en eventos dedicados al cuidado de las mascotas.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Visión
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      Ser una comunidad que fomente la conciencia e inspirar una cultura de cuidado animal y así nuestras mascotas encuentren un hogar adecuado de adopción con una familia con valores y responsabilidades bien definidas donde puedan ser cuidadas por el resto de sus vidas.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Objetivos
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">

      <ul>
        <li>Conseguir gestionar de manera correcta un albergue local destinado a la recogida y mantenimiento de los animales abandonados.</li>
        <li>Tener un control higiénico-sanitario correcto en nuestras instalaciones.</li>
        <li>Impulsar las adopciones de todos los animales albergados, tanto perros como gatos a través de nuestras campañas y redes sociales.</li>
        <li>Tener un buen control de seguimiento de los animales adoptados para garantizar la seguridad su seguridad y bienestar.</li>
      </ul>
        </div>
    </div>
  </div>
</div>




<br>
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

