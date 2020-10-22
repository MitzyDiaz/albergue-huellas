<?php
require 'usuariolog.php';
$id = $_REQUEST['id'];

$id = $_GET['id'];
require 'conexion.php';


  $sql1="SELECT * FROM usuarios WHERE id_usuario = '" . $_SESSION["id_usuario"] . "' ";
  $result1=mysqli_query($con,$sql1); 


  $sql2="SELECT * FROM banner WHERE id = '1' ";
  $result2=mysqli_query($con,$sql2); 
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <title>Formulario de Adopción</title>
</head>

<header>
   <?php include("header.php");?>
</header>

<body>
    <div style="height: 30px;"></div>
    <div class="container forma">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
        <div class="card-header"><h2 class="card-h2">FORMULARIO DE ADOPCIÓN</h2></div>
        <div class="card-body">
        <form id="form" action="con_form.php" method="post" class="needs-validation" novalidate>
                <!--PRIMER COLUMNA-->
                <p>Datos de la mascota y el interesado     <?php echo $_SESSION['id_usuario']; ?> </p>
                <div class="form-row">

                 <?php 
    
                     while($ver1=mysqli_fetch_row($result1)){ 


                         $datos=$ver1[0]."||".$ver1[3];
                 ?> 
                     
                    <div class="col-md-4 mb-3">
                        
                      <input name="id_usuario" type="text" class="form-control" id="id_usuario" placeholder="" value="<?php echo $ver1[0] ?>" hidden="">  
                      <label for="nombre">Nombre interesado</label>
                      <input name="" type="text" class="form-control" id="" placeholder="<?php  echo $ver1[3] ?>" value="" disabled>                  
                    </div>  
                <?php } ?>

                 <?php 
    
                     while($ver2=mysqli_fetch_row($result2)){ 


                         $datos2=$ver2[0]."||".$ver2[1];
                 ?> 
                 
                      <input name="id" type="text" class="form-control" id="id" placeholder="" value="<?php echo $ver2[0] ?>" hidden="">
                  <div class="col-md-4 mb-3">
                      <label for="titulo">Nombre mascota</label>
                      <input name="" type="text" class="form-control" id="" placeholder="<?php  echo $ver2[1] ?>" value="" disabled>                  
                  </div>
                <?php } ?>
                </div>


                  <div class="form-row">
                   
                    <!--NOMBRE-->
                    <div class="col-md-4 mb-3">
                      <label for="nombre">Nombre</label>
                      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Escriba su nombre o nombres" value="" required>
                      <div class="valid-feedback">¡Ok!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    <!--APELLIDO PATERNO-->
                    <div class="col-md-4 mb-3">
                      <label for="ap">Apellido Paterno</label>
                      <input name="ap" type="text" class="form-control" id="ap" placeholder="Escriba su Apellido Paterno" value="" required>
                      <div class="valid-feedback">¡Ok!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                    <!--APELLIDO MATERNO-->
                    <div class="col-md-4 mb-3">
                      <label for="am">Apellido Materno</label>
                      <input name="am" type="text" class="form-control" id="am" placeholder="Escriba su Apellido Materno" value="" required>
                      <div class="valid-feedback">¡Ok!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                  </div>

                <!--SEGUNDA COLUMNA-->
                <div class="form-row">
                     <div class="col-md-4 mb-3">
                        <label for="edad">Edad</label>
                        <input type="number" name="edad" class="form-control" id="edad" placeholder="Edad" min=18 required>
                        <div class="valid-feedback">¡Ok!</div>
                        <div class="invalid-feedback">Complete el campo</div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="tel">Teléfono</label>
                        <input type="phone" name="tel" class="form-control" id="tel" placeholder="Teléfono" minlength="10" required>
                        <div class="valid-feedback">¡Ok!</div>
                        <div class="invalid-feedback">Complete el campo</div>
                    </div>
                </div>
                <!--TERCERA COLUMNA-->
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="contacto-co">Contacto de Confianza</label>
                        <input type="phone" name="contacto_co"class="form-control" id="contacto-co" placeholder="Teléfono" minlength="10" required>
                        <div class="valid-feedback">¡Ok!</div>
                        <div class="invalid-feedback">Complete el campo</div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                        <label for="parent">Parentezco</label>
                            <select class="custom-select" id="parent" name="parent" required>
                            <option value="">Abre para realizar una selección</option>
                            <option value="Madre">Madre</option>
                            <option value="Padree">Padre</option>
                            <option value="Admigo(a)">Amigo(a)</option>
                            <option value="Hermano">Hermano(a)</option>
                            <option value="Tio">Tío(a)</option>
                            <option value="Abuelo">Abuela(o)</option>          
                            </select>
                            <div class="valid-feedback">¡Ok!</div>
                            <div class="invalid-feedback">Complete el campo</div>
                        </div>
                    </div>
                </div>

                <!--CUARTA COLUMNA-->
                <!--DIRECCIÓN-->
                <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="direccion">Dirección</label>
                        <input name="dir" type="text" class="form-control" id="dir" placeholder="Escriba su dirección" required>
                        <div class="valid-feedback">¡Ok!</div>
                        <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                </div>

                <!--QUINTA COLUMNA-->
                <!--HIJOS-->
                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="hijos">¿Tiene hijos?</label>
                                <select name="hijos" class="custom-select" id="hijos" required>
                                <option value="">Abre para realizar una selección</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>        
                                </select>
                                <div class="valid-feedback">¡Ok!</div>
                                <div class="invalid-feedback">Escoja una opcíon.</div>   
                        </div>
                    </div>
                <!--HIJOS CANTIDAD-->
                    
                    <div class="col-md-4 mb-3">
                    <div class="hijos-cant">
                        <div class="form-group">
                            <label for="hijos_cant">Cantidad</label>
                                <select name="hijos_cant" class="custom-select" id="hijos_cant">
                                <option value="">Abre para realizar una selección</option>
                                <option value="1">1</option>
                                <option value="2">2</option> 
                                <option value="3">3</option>
                                <option value="4">3+</option>       
                                </select>
                                <div class="valid-feedback">¡Ok!</div>
                                <div class="invalid-feedback">Escoja una opción</div>
                        </div>
                    </div>
                    </div> 
                </div>
                
                <!--SEXTA COLUMNA-->
                <!--MASCOTAS-->
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label for="mascotas">¿Tiene mascotas?</label>
                                <select name="mascotas" class="custom-select" id="mascotas" required>
                                <option value="">Abre para realizar una selección</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>        
                                </select>
                                <div class="valid-feedback">¡Ok!</div>
                                <div class="invalid-feedback">Escoja una opción</div>
                        </div>
                    </div>
                <!--MASCOTAS_ESP-->

                    <div class="col-md-4 mb-3">
                        <div class="mascota-esp">
                        <label for="mascota_esp">Especifique</label>
                            <input name="mascota_esp" type="text" class="form-control" id="mascota_esp" placeholder="E.g: Perro, Gato..etc" value="">
                            <div class="valid-feedback">¡Ok!</div>
                            <div class="invalid-feedback">Complete el campo.</div>  
                        </div> 
                    </div>

                <!--MASCOTAS_CANT-->
                    <div class="col-md-4 mb-3">
                        <div class="mascota-cant">
                        <div class="form-group">
                            <label for="mascotas_cant">Cantidad</label>
                                <select name="mascota_cant" class="custom-select" id="mascotas_cant">
                                <option value="">Abre para realizar una selección</option>
                                <option value="1">1</option>
                                <option value="2">2</option> 
                                <option value="3">3</option>
                                <option value="4">Más de 3</option>       
                                </select>
                                <div class="valid-feedback">¡Ok!</div>
                                <div class="invalid-feedback">Escoja una opción</div>
                        </div>
                        </div>
                    </div>
                </div>

                <!--SEPTIMA COLUMNA-->
                <!--COMPROBANTE-->
                <div class="form-row">
                    <div class="col-md-10 mb-3">
                        <label for="url_ine">Comprobante (INE)</label>
                            <div class="custom-file">
                                <input name="url_ine" type="file" class="custom-file-input" id="url_ine" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="valid-feedback">¡Ok!</div>
                                <div class="invalid-feedback">Suba un archivo porfavor</div>
                            </div>
                    </div>
                </div>

                <!--OCTAVA COLUMNA-->
                <!--RAZON-->
                <div class="form-row">
                    <div class="col-md-10 mb-3">
                        <label for="razon">Razón de Adopción</label>
                            <textarea  name="razon" class="form-control" id="razon" placeholder="Escriba la razón por la que desea adoptar" required></textarea>
                            <div class="valid-feedback">¡Ok!</div>
                            <div class="invalid-feedback">Por favor, escribe tu razón de adopción.</div>
                    </div>
                </div>

                <!--NOVENA COLUMNA-->
                <!--TERM_COND-->
                <div class="form-row">
                  <div class="form-group">
                    <div class="form-check">
                      <input name="term_cond" class="form-check-input" type="checkbox" value="1" name="term_cond" id="term_cond" required>
                      <label class="form-check-label" for="term_cond">Acepto términos y condiciones</label>
                      <div class="valid-feedback">¡Aceptado!</div>
                      <div class="invalid-feedback">Debes de aceptar los terminos y condiciones para continuar</div>
                    </div>
                  </div>
                  </div>

                <div class="form-row">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar Formulario</button>
                </div>
                </form>
            </div>   
        </div>
    </div>       
    </div>                  
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/val.js"></script>

</body>
</html>