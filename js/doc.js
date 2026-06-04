$(buscar_datos());

function buscar_datos(consulta){
		$.ajax({
		url: 'controlador/buscardoc.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta: consulta},
		})
		.done(function(respuesta){
			$("#datos2").html(respuesta);
		})
		.fail(function(){
			console.log("error");
		})

}

$(document).on('keyup', '#cajab', function(){
	var valor = $(this).val();
	if(valor != ""){
		buscar_datos(valor);
	} else{
		buscar_datos();
	}
})