$(obtener_registros());

function obtener_registros(Residencias)
{
	$.ajax({
		url : '../controllers/search-residencias.php',
		type : 'POST',
		dataType : 'html',
		data : { Residencias: Residencias},
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
