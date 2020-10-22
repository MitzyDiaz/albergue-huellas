// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


function mostrarReferencia(){
    //Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
    if (document.form.hijos[1].checked == true) {
    //muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
    document.getElementById('hijos_cant').style.display='none';
    //por el contrario, si no esta seleccionada
    } else {
    //oculta el div con id 'desdeotro'
    document.getElementById('hijos_cant').style.display='block';
    }
}


//OCULTAR HIJOS
if ($('#hijos').val() == 1)
{
    $(".hijos-cant").css("display","block");
};

//Detectamos los cambios y mostramos uno u otro form
$('#hijos').change(function() {

if ($('#hijos').val() == 1)
{
    $(".hijos-cant").css("display","block");
};

if ($('#hijos').val() == 2)
{
    $(".hijos-cant").css("display","none");
};

});

//OCULTAR MASCOTA ESP Y MASCOTA CANT
if ($('#mascotas').val() == 1)
    {
        $(".mascota-esp").css("display","block");
        $(".mascota-cant").css("display","block");
    };
 
//Detectamos los cambios y mostramos uno u otro form
$('#mascotas').change(function() {
    
    if ($('#mascotas').val() == 1)
    {
        $(".mascota-esp").css("display","block");
        $(".mascota-cant").css("display","block");
    };
    
    if ($('#test').val() == 2)
    {
        $(".mascota-esp").css("display","none");
        $(".mascota-cant").css("display","none");
    };
    
});


$('body').scrollspy({ target: '#navbar-example' });

$('[data-spy="scroll"]').each(function () {
  var $spy = $(this).scrollspy('refresh');
});