<?php 

	$con = mysqli_connect("localhost", "root", "", "estadosemunicipios");
	$out = '';
	$sql = "select  nome_rua  from ruas where municipio_id = ' " .$_POST["municipioID"]." ' order by nome_rua ";
	$result = mysqli_query($con, $sql);
	$out = '<option value="">Selecione uma rua/avenida</option>';

	while ($row = mysqli_fetch_array($result)) {
		$out .= '<option value=" '.$row["id_rua"].' "> '.$row["nome_rua"] . '</option>' ;	
	}

	// codifica o nome das cidades com acentuação
	echo utf8_encode($out);	
	