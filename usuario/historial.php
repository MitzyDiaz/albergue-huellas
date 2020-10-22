<?php

require 'usuariolog.php';
require 'conexion.php';




$sql1="SELECT estatus
            FROM form WHERE id_usuario = '" . $_SESSION["id_usuario"] . "' ";
        $result1=mysqli_query($con,$sql1);

 $sql2="SELECT banner.titulo, banner.url_image, form.estatus
      FROM banner
      INNER JOIN form ON banner.id = form.id 
      WHERE id_usuario = '" . $_SESSION["id_usuario"] . "'";
        $result2=mysqli_query($con,$sql2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">   
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <title>Adopta una Huella</title>
</head>

<header>
    <?php include("headerB.php");?>
</header>

<body>

<h1>Adopta una Huella</h1>

<p>Aquí podrás ver tus solicitudes y el historial de tus mascotas ya adoptadas.</p>

<br>
<br>

<table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">Nombre mascota</th>
      <th scope="col">Foto</th>
      <th scope="col">Comprobante</th>
      <th scope="col">Estatus</th>
    </tr>
  </thead>
  <tbody>
     <?php 

    
        while($ver2=mysqli_fetch_row($result2)){ 


      $datos2=$ver2[0]."||".
              $ver2[1]."||".
              $ver2[2];

       ?>
    <tr>
      
      <td><?php  echo $ver2[0] ?></td>
      <td><img srcset="img/banner/<?php  echo $ver2[1]; ?> 5800w"></i></td>
       <td> <?php  echo $ver2[2]; ?> </td>
      <td> <?php  echo $ver2[2]; ?> </td>
    <?php } ?>
 
    </tr>
  
  </tbody>

</table>
         



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
</body>


<footer>
  <?php include("footer.php")?>
</footer>

</html>

