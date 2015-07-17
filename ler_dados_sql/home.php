<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css">
	<script src="static/js/jquery-1.9.1.js"></script>
	<script src="static/js/dinamico.js"></script>
	<script src="static/js/include.js"></script>
	<style type="text/css">
	#tabela{
		margin-top: 200px;
		margin-left: 100px;
	}
	</style>
	<title></title>
</head>
<body>
	<div id="tabela">
	<h2>Definir valores da porta serial:</h2>
		<form class="form-inline" action="definir_configuracao.php" method="post">
			<div class="form-group">
				<label for="exampleInputName2">Caminho da porta</label>
				<input type="text" class="form-control"  name="path" placeholder="/dev/ttyACM0">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail2">Velocidade de baud</label>
				<input type="text" class="form-control"  name="baud"  placeholder="9600">
			</div>
			<div class="form-group">
				<label for="exampleInputName2">Tam. vetor de amostra</label>
				<input type="text" class="form-control"  name="vetor" placeholder="1">
			</div>
			<button type="submit" class="btn btn-primary">Definir</button>
		</form>	
		<h4>Caso não preenchidos será setado os valores acima.</h4>
	</div>	
</body>
</html>