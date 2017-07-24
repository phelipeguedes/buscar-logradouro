<?php 

	$con = mysqli_connect("localhost", "root", "", "estadosemunicipios");
	$out = '';
	$sql = "select id_municipio, nome_municipio from municipios where estado_id = ' " .$_POST["estadoID"]." ' order by nome_municipio";
	$result = mysqli_query($con, $sql);
	$out = '<option value="">Selecione um municipio</option>';

	while ($row = mysqli_fetch_array($result)) {
		$out .= '<option value=" '.$row["id_municipio"].' "> '.$row["nome_municipio"] . '</option>' ;	
	}

	// codifica o nome das cidades com acentuação
	echo utf8_encode($out);	

 ?>

