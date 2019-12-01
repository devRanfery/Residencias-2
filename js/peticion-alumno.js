$(obtener_registros());

function obtener_registros(Alumno)
{
	$.ajax({
		url : '../controllers/search-alumno.php',
		type : 'POST',
		dataType : 'html',
		data : { Alumno: Alumno },
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});
