<?php

require 'usuariolog.php';
require 'conexion.php';




$sql1="SELECT estatus
            FROM form WHERE id_usuario = '" . $_SESSION["id_usuario"] . "' ";
        $result1=mysqli_query($con,$sql1);

 $sql2="SELECT id_seguimiento, foto_seg, observacion, estatus_seg
      FROM seguimiento";
        $result2=mysqli_query($con,$sql2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
        src="https://code.jquery.com/jquery-3.4.1.slim.js"
        integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
        crossorigin="anonymous"></script>
   <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
  <script src="js/funciones.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <script src="js/funciones.js"></script>
      <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

 
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
<main>
    <center><h2 class="register-heading">Seguimiento</h2></center><br/>
    <div class="row">
        
        
 
               
      </div>
      <br /> <br />
    <div class="contenedor" >




    <div class="row" style="text-align:center;">
     <div class="col-sm-12"  style="background-color:#FFF" >
        
        <p>


                <div class="bs-calltoaction bs-calltoaction-primary">
                    <div class="row">
                        <div class="col-md-12 cta-contents">
                           
                            <div class="cta-desc">


<div class="row" style="text-align:center;" > 
  <div class="panel-heading" style="text-align: right;"> <caption>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                    Agregar nuevo 
                    <span class="glyphicon glyphicon-plus"></span></button>
                </caption></div>
<table class="table  table-hover table-striped" id="tabla" >
<thead>
<tr>
  

  <th><center>Foto seguimiento</center></th>
  <th><center>Observaciones</center></th>
  <th><center>Estatus</center></th>




</tr>
</thead>


<tbody>
 <?php 

    
        while($ver=mysqli_fetch_row($result2)){ 


      $datos=$ver[0]."||".
              $ver[1]."||".
             $ver[2]."||".
             $ver[3];
?>
<tr>
<td> <?php  echo $ver[1] ?></td>
<td> <?php  echo $ver[2] ?></td>
<td> <?php  echo $ver[3] ?></td>


<td>  <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')"> </i></a></td>
<td><button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
            </td>

</tr>
<?php } ?>
</tbody>
</table>

</div></div></div>
    </div>
  </div>
  <center><div class="col-md-12 cta-button">
         
          </div></center>

</p>
      </div>
      <div class="col-lg-10"  >
        <center><h1></h1></center> 
        <p>

</p>
      </div>
    
    </div>
  </div> 
      
  </main>

   <!-- MODAL REG -->

<!-- Modal -->
<form method="post" action="#" enctype="multipart/form-data">
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-sm"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel" style=" text-align: center;">Agregar seguimiento</h4>
      </div>
      <div class="modal-body">
 <div class="form-group">
        <label for="file">File</label>
        <input type="file" class="form-control" id="file" name="file" required />
    </div>
        
         
        <label for="observacion">Observación</label>
        <input type="text" name="" id="observacion" class="form-control input-sm" class="validate" required>
        
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal" id="">
        Agregar
        </button>
      </div>
    </div>
  </div>
</div>
       </form>



</body>


<footer>
  <?php include("footer.php")?>
</footer>

</html>




<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          foto_seg=$('#foto_seg').val();
          observacion=$('#observacion').val();
         
            agregardatos(foto_seg,observacion);
        });
    

    });


$(document).ready(function() {
    $(".upload").on('click', function() {
         observacion=$('#observacion').val();
        var formData = new FormData();
        var files = $('#foto_seg')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'agregarDatosp.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
                } else {
                    alert('Formato de imagen incorrecto.');
                }
            }
        });
        return false;
    });
});




</script>



<script type="text/javascript">
  $(document).ready(function()){
    $('#tabla').reload('seguimiento.php');
  }
</script>
 <script>$('body').on('change','.uploadimg',function(e){ var filename = $(this).val().replace(/.*(\/|\\)/, ''); var getft = $(this).attr('data-gotfile'); console.log(getft+" "+filename); if(filename=='') { $('.'+getft).val('No file chosen'); } else { $('.'+getft).val(filename); }});</script> 