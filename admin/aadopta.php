<?php


require 'conexion.php';



//GENERAL
$sql1="SELECT *
            FROM form WHERE estatus = 'Proceso'";
        $result1=mysqli_query($con,$sql1);

 $sql2="SELECT form.id_form, banner.titulo, banner.url_image, form.nombre
      FROM banner
      INNER JOIN form ON banner.id = form.id
      WHERE estatus = 'Proceso'";
        $result2=mysqli_query($con,$sql2);

$sql3="SELECT usuarios.nombre, banner.url_image
      FROM banner
      INNER JOIN form ON banner.id = form.id
      WHERE estatus = 'Proceso'";
        $result3=mysqli_query($con,$sql3);


//ACEPTADA
$sql4="SELECT *
            FROM form WHERE estatus = 'Aceptado' ";
        $result4=mysqli_query($con,$sql4);

 $sql5="SELECT banner.titulo, banner.url_image, form.nombre, form.tel, form.dir
      FROM banner
      INNER JOIN form ON banner.id = form.id
      WHERE estatus = 'Aceptado'";
        $result5=mysqli_query($con,$sql5);

$sql6="SELECT usuarios.nombre, banner.url_image
      FROM banner
      INNER JOIN form ON banner.id = form.id
      WHERE estatus = 'Aceptado'";
        $result6=mysqli_query($con,$sql6);

//RECHAZADA
$sql7="SELECT *
            FROM form WHERE estatus = 'Rechazado' ";
        $result7=mysqli_query($con,$sql7);


 $sql8="SELECT banner.titulo, banner.url_image, form.nombre, form.tel, form.dir
      FROM banner
      INNER JOIN form ON banner.id = form.id
      WHERE estatus = 'Rechazado'";
        $result8=mysqli_query($con,$sql8);

$sql9="SELECT usuarios.nombre, banner.url_image
      FROM banner
      INNER JOIN form ON banner.id = form.id
      WHERE estatus = 'Rechazado'";
        $result9=mysqli_query($con,$sql9);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">   
    <link rel="stylesheet" href="css/style.css">
    <script src="js/funciones.js"></script>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
   <script src="librerias/jquery-3.2.1.min.js"></script>

  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>

    <title>Adopta una Huella</title>
</head>

<header>
    <?php include("headerC.php");?>
</header>

<body>

<h1>Adopta una Huella</h1>

<p>Solicitudes.</p>

<br>
<br>
        




<table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">Nombre perro</th>
      <th scope="col">Foto</th>
      <th scope="col">Nombre adoptante</th>
      <th scope="col">Solicitud</th>
      <th scope="col">Confirmación</th>
    </tr>
  </thead>
  <tbody>
     <?php 

    
        while($ver2=mysqli_fetch_row($result2)){ 


      $datos2=$ver2[0]."||".
              $ver2[1]."||".
              $ver2[2]."||".
              $ver2[3];

       ?>
    <tr>
    <td><?php  echo $ver2[1] ?></td>
      <td><img srcset="img/banner/<?php  echo $ver2[2]; ?> 5800w"></i></td>
        <td><?php  echo $ver2[3]; ?></td>
      <td><i class="fas fa-id-card"></i></td>
       <td><a href="aceptar.php?id_form=<?php echo $ver2[0]; ?>" OnClick="if (! confirm('¿Está seguro de aceptar la Solicitud?')) return false;"><button type='button' class='btn btn-success fas fa-user-check' OnClick="pregunta">Aceptar</button></a>
           | <a href="rechazar.php?id_form=<?php echo $ver2[0]; ?>" OnClick="if (! confirm('¿Está seguro de rechazar la Solicitud?')) return false;"><button type='button' class='btn btn-danger fas fa-user-times' OnClick="pregunta">Rechazar</button></a></td>
   

    
           
    </tr> <?php } ?>


  </tbody>
</table>


<p>Solicitudes Aceptadas</p>
<br>
<br>

<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Nombre perro</th>
      <th scope="col">Foto</th>
      <th scope="col">Nombre adoptante</th>
      <th scope="col">Numero</th>
      <th scope="col">Dirección</th>
    </tr>
  </thead>
  <tbody>
     <?php 

    
        while($ver5=mysqli_fetch_row($result5)){ 


      $datos5=$ver5[0]."||".
              $ver5[1]."||".
              $ver5[2]."||".
              $ver5[3]."||".
              $ver5[4];

       ?>
    <tr>
    <td  class="success"><?php  echo $ver5[0] ?></td>
      <td class="success"><img srcset="img/banner/<?php  echo $ver5[1]; ?> 5800w"></i></td>

      <td class="success"><?php  echo $ver5[2]; ?></td>
      
       <td class="success"><?php  echo $ver5[3]; ?> </td>
     <td class="success"><?php  echo $ver5[4]; ?> </td>
   

    <?php } ?>
  



    </tr>

  </tbody>
</table>







<p>Solicitudes Rechazadas</p>
<br>
<br>

<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Nombre perro</th>
      <th scope="col">Foto</th>
      <th scope="col">Nombre adoptante</th>
      <th scope="col">Numero</th>
      <th scope="col">Dirección</th>
    </tr>
  </thead>
  <tbody>
     <?php 

    

    
        while($ver8=mysqli_fetch_row($result8)){ 


      $datos8=$ver8[0]."||".
              $ver8[1]."||".
              $ver8[2]."||".
              $ver8[3]."||".
              $ver8[4];

       ?>
    <tr>
    <td  class="danger"><?php  echo $ver8[0] ?></td>
      <td class="danger"><img srcset="img/banner/<?php  echo $ver8[1]; ?> 5800w"></i></td>

      <td class="danger"><?php  echo $ver8[2]; ?></td>
      
       <td class="danger"><?php  echo $ver8[3]; ?> </td>
     <td class="danger"><?php  echo $ver8[4]; ?> </td>
   

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

<script type="text/javascript">
    function pregunta(){
alertify.confirm("This is a confirm dialog.",
  function(){
    alertify.success('Ok');
  },
  function(){
    alertify.error('Cancel');
  }); }
</script>