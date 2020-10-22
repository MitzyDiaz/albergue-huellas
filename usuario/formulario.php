<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">   

    <title>Adopta una Huella</title>
</head>

<header>
   <?php include("header.php");?>
</header>

<body>

    <div class="container">
            <h1 class="h1-form">Formulario de Adopción</h1>
        <form class="container" id="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Nombre</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Nombres" value=""  required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom02">Apellido Paterno</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido Paterno" value="" required>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Apellido Materno</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Apellido Materno" value="" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="validationCustom03">Edad</label>
          <input type="number" class="form-control" id="validationCustom03" placeholder="Edad" min=18 required>
          <div class="invalid-feedback">
            Ingresa datos
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom04">Teléfono</label>
          <input type="phone" class="form-control" id="validationCustom04" placeholder="Teléfono" minlength="10" required>
          <div class="invalid-feedback">
            Ingresa datos
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="validationCustom03">Contacto de Confianza</label>
          <input type="phone" class="form-control" id="validationCustom03" placeholder="Teléfono de Confianza" minlength="10" required>
          <div class="invalid-feedback">
            Ingresa datos
          </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
              <label for="validationCustom04">Parentezco</label>
                <select class="custom-select" required>
                  <option value="">Abre para realizar una selección</option>
                  <option value="1">Madre</option>
                  <option value="2">Padre</option>
                  <option value="3">Amigo(a)</option>
                  <option value="4">Hermano(a)</option>
                  <option value="5">Tío(a)</option>
                  <option value="6">Abuela(o)</option>          
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
             </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 mb-3">
          <label for="validationCustom03">Dirección</label>
          <textarea class="form-control" id="validationCustom03" placeholder="Escriba la dirección que coincida con su INE" required></textarea>
          <div class="invalid-feedback">
            Por favor, escribe tu dirección.
          </div>
          </div>
      </div>

      <div class="row">
      <div class="col-md-4 mb-3">
      <div class="form-group">
              <label for="validationCustom04">¿Tiene hijos?</label>
                <select class="custom-select" required>
                  <option value="">Abre para realizar una selección</option>
                  <option value="1">Sí</option>
                  <option value="2">No</option>        
                </select>
                <div class="invalid-feedback">Escoja una opción</div>
             </div>
             </div>
     
      <div class="col-md-4 mb-3">
      <div class="form-group">
              <label for="validationCustom04">Cantidad</label>
                <select class="custom-select" required>
                  <option value="">Abre para realizar una selección</option>
                  <option value="1">1</option>
                  <option value="2">2</option> 
                  <option value="3">3</option>
                  <option value="4">3+</option>       
                </select>
                <div class="invalid-feedback">Escoja una opción</div>
             </div>
      </div>
      </div>


      

      <div class="row">
      <div class="col-md-4 mb-3">
      <div class="form-group">
              <label for="validationCustom04">¿Tiene mascotas?</label>
                <select class="custom-select" required>
                  <option value="">Abre para realizar una selección</option>
                  <option value="1">Sí</option>
                  <option value="2">No</option>        
                </select>
                <div class="invalid-feedback">Escoja una opción</div>
             </div>
             </div>
     
      <div class="col-md-4 mb-3">
      <div class="form-group">
              <label for="validationCustom04">Cantidad</label>
                <select class="custom-select" >
                  <option value="">Abre para realizar una selección</option>
                  <option value="1">1</option>
                  <option value="2">2</option> 
                  <option value="3">3</option>
                  <option value="4">Más de 3</option>       
                </select>
                <div class="invalid-feedback">Escoja una opción</div>
             </div>
      </div>
      </div>

      <div class="row">
      <div class="col-md-10 mb-3">
            <div class="custom-file">
          <input type="file" class="custom-file-input" id="validatedCustomFile" required>
          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
          <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
      </div>
      </div>

      <div class="row">
      <div class="col-md-10 mb-3">
          <label for="validationCustom03">Razón de Adopción</label>
          <textarea class="form-control" id="validationCustom03" placeholder="Escriba la razón por la que desea adoptar" required></textarea>
          <div class="invalid-feedback">
            Por favor, escribe tu dirección.
          </div>
      </div>
      </div>
      

      <div class="row justify-content-center">
      <button type="button" class="btn btn-primary btn-lg " onclick="window.location='comprobante.php'">Enviar Formulario de Adopción</button>
      </div>
    </form>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="js/bootstrap.min.js"></script>


            
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();
</script>   
       
    </div>
</body>




<!--
<footer>
<?php include("footer.php")?>
</footer>
--></html>