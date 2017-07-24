$(document).ready(function(){
	$("#estados").change(function(){
		var estado_id = $(this).val(); 	// estado_id recebe o valor do 'value' id_estado quando o select é alterado
		$.ajax({
			url: 'recebe.php',			// envia os dados para o php que processa o ajax  e exibe os municipios do 	                                                           respectivo estado
			method: 'POST',
			data: {estadoID:estado_id},   //atribui o valor da variável estado_id ao dado 'estadoId'
			datatype: 'text',
			success:function(data)
			{
				$("#cidades").html(data);  // seta o valor de data no elemento de id 'cidades'
			}
		});
	});

	$("#cidades").change(function(){
		var municipio_id = $(this).val();
		$.ajax({
			url: 'recebeCidade.php',
			method: 'POST',
			data: {municipioID:municipio_id},
			datatype: 'text',
			success:function(data)
			{
				$("#ruas").html(data);
			}
		});
	});

	$(document).ajaxStart(function(){
		$(".modal").show();
	}).ajaxStop(function(){
		$(".modal").hide(2000);
	});

});