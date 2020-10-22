



function agregardatos(foto_seg,observacion){
	cadena="foto_seg=" + foto_seg +
			"&observacion=" + observacion;



	$.ajax({
		type:"POST",
		url:"agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
			
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}
function agregaform(datos){

	d=datos.split('||');
	$('#que_id').val(d[0]);
	$('#carrerau').val(d[1]);
	$('#materiau').val(d[2]);
	$('#unidadu').val(d[3]);
	$('#preguntau').val(d[4]);
	$('#ans1u').val(d[5]);
	$('#ans2u').val(d[6]);
	$('#ans3u').val(d[7]);
	$('#ans4u').val(d[8]);
	$('#true_ansu').val(d[9]);	

}
