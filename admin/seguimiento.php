<?php


require 'conexion.php';




$sql1="SELECT id
            FROM form WHERE id_usuario = '2";
        $result1=mysqli_query($con,$sql1);

 $sql2="SELECT id_seguimiento, foto_seg, observacion, estatus_seg
      FROM seguimiento WHERE id_usuario = '2' ";
        $result2=mysqli_query($con,$sql2);

/*$imagen_demo="../img/demo.png";
$insert=mysqli_query($con,"insert into seguimiento (foto_seg, estado) values ('$imagen_demo','0')");
$sql_last=mysqli_query($con,"select LAST_INSERT_ID(id) as last from seguimiento order by id desc limit 0,1");
$rw=mysqli_fetch_array($sql_last);
$id_seguimiento=intval($rw['last']);
$sql=mysqli_query($con,"select * from seguimiento where id='$id_seguimiento' limit 0,1");
$count=mysqli_num_rows($sql);
if ($count==0){
  //header("location: bannerlist.php");
  //exit;
}
$rw=mysqli_fetch_array($sql);

$observacion=$rw['observacion'];
$foto_seg=$rw['foto_seg'];

$active_config="active";
$active_banner="active";
*/
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
    <?php include("header.php");?>
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
  <td>
<img srcset="../usuario/img/banner/<?php  echo $ver[1]; ?> 5800w"></td>

<td> <?php  echo $ver[3] ?></td>

 <td><a href="aceptar_seg.php?id_seguimiento=<?php echo $ver[0]; ?>" OnClick="if (! confirm('¿Está seguro de aceptar?')) return false;"><button type='button' class='btn btn-success fas fa-user-check' OnClick="pregunta">OK!</button></a>
           | <a href="rechazar_seg.php?id_seguimiento=<?php echo $ver[0]; ?>" OnClick="if (! confirm('¿Está seguro de rechazar?')) return false;"><button type='button' class='btn btn-danger fas fa-user-times' OnClick="pregunta">Rehacer</button></a></td>

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
  <div class="modal-dialog"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel" style=" text-align: center;">Agregar seguimiento</h4>
      </div>
      <div class="modal-body">
 <h3 ><span class="glyphicon glyphicon-edit"></span> Editar banner</h3>
     
         
       
        
        
     <form class="form-vertical">
     
      <div class="form-group">
        
        <div class="col-sm-12">
        
         <form class="form-horizontal" id="editar_banner">
 <div class="form-group">
        <label for="titulo" class="col-sm-3 control-label">Descripción</label>
        <div class="col-sm-9">
          <textarea class='form-control' name="observacion" id="observacion" required rows=8></textarea>
        </div>
        </div>  
        

         <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail" style="max-width: 100%;" >
                    <img class="img-rounded" src="../img/banner/<?php echo $foto_seg;?>" />
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 250px;"></div>
                  <div>
                  <span class="btn btn-info btn-file"><span class="fileinput-new">Selecciona una imagen</span>
                  <span class="fileinput-exists" onclick="upload_image();">Cambiar imagen</span><input type="file" name="fileToUpload" id="fileToUpload" required onchange="upload_image();"></span>
                  <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Cancelar</a>
                  </div>
                    <button type="submit" class="btn btn-success">Actualizar datos</button>
          </div>
          <div class="upload-msg"></div>
          
        </div>
        
        </div>
        
      
        
       
        
        
     </form>
          
        </div>
        
        </div>
        
      
        
       
        
        
  
    </div>
    </div> 
      </div>
    </div>
  </div>



</body>


<footer>
  <?php include("footer.php")?>
</footer>

</html>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/jasny-bootstrap.min.js"></script>
  


<script type="text/javascript">
 function upload_image(){
        $(".upload-msg").text('Cargando...');
        var id_banner=$("#id_banner").val();
        var inputFileImage = document.getElementById("fileToUpload");
        var file = inputFileImage.files[0];
        var data = new FormData();
        data.append('fileToUpload',file);
        data.append('id',id_banner);
        
        $.ajax({
          url: "ajax/upload_banner.php",        // Url to which the request is send
          type: "POST",             // Type of request to be send, called as method
          data: data,         // Data sent to server, a set of key/value pairs (i.e. form fields and values)
          contentType: false,       // The content type used when sending data to the server.
          cache: false,             // To unable request pages to be cached
          processData:false,        // To send DOMDocument or non processed data file it is set to false
          success: function(data)   // A function to be called if request succeeds
          {
            $(".upload-msg").html(data);
            window.setTimeout(function() {
            $(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
            }); }, 5000);
          }
        });
        
      }
      
      function eliminar(id){
        var parametros = {"action":"delete","id":id};
            $.ajax({
              url:'ajax/upload2.php',
              data: parametros,
               beforeSend: function(objeto){
              $(".upload-msg2").text('Cargando...');
              },
              success:function(data){
                $(".upload-msg2").html(data);
                
              }
            })
          
        }
        
        
        
        
      



</script>
  <script>
    $("#editar_banner").submit(function(e) {
      
        $.ajax({
          url: "ajax/editar_banner.php",
          type: "POST",
          data: $("#editar_banner").serialize(),
           beforeSend: function(objeto){
          $("#loader").html("Cargando...");
          },
          success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $("#loader").html("");
          }
      });
       e.preventDefault();
    });
  </script>

  



<script type="text/javascript">
  $(document).ready(function()){
    $('#tabla').reload('seguimiento.php');
  }
</script>
 <script>$('body').on('change','.uploadimg',function(e){ var filename = $(this).val().replace(/.*(\/|\\)/, ''); var getft = $(this).attr('data-gotfile'); console.log(getft+" "+filename); if(filename=='') { $('.'+getft).val('No file chosen'); } else { $('.'+getft).val(filename); }});</script> 	