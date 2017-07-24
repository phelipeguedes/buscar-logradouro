<?php 
$con = mysqli_connect("localhost", "root", "", "estadosemunicipios");
$sql = "select  id_estado, nome_estado  from estados order by nome_estado";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buscar localidade</title>
	<meta charset="utf-8"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="			crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script type="text/javascript" src="js/localidades.js"></script>
</head>
<body>
	
	<div class="ocontainer-fluid">
		<div class="jumbotron">
			<h2>Brasil</h2>
		</div>	
	</div>	

	<div class="container">	

		<div class="modal">
			<div class="loading"></div>
		</div>	

		<div class="panel panel-default">
			<div class="panel-heading">				
				<h4 class="panel-title">Buscar logradouro</h4>										
			</div>

			<div class="panel-body">
				<select id="estados" class="form-control">
					<option value="">Selecione um estado</option>
					<?php 
					while($row = mysqli_fetch_array($result)){
							//  codifica para utf-8 (coloquei os dados no banco com acentuação.)
						echo utf8_encode("<option value=' ".$row['id_estado']." '>".$row['nome_estado']."</option>");
					}
					?>
				</select>
				<br>
				<select  id="cidades" class="form-control">
					<option value="">municípios</option>
				</select>
				<br>
				<select id="ruas" class="form-control">
					<option value="">logadouros</option>
				</select>
			</div>
		</div>

		<div class="modal">
			<div class="loading">
				<img src="img/loading-page.gif">
				<p>Carregando...</p>
			</div>
		</div>
	</div>

	<footer>
		<h5 class="text-center">Estados e muncípios brasileiros</h5>
		<span class="glyphicon glyphicon-map-marker"></span>
	</footer>
	
</body>
</html>