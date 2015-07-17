<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css">
	<script src="static/js/jquery-1.9.1.js"></script>
	<script src="static/js/dinamico.js"></script>
	<script src="static/js/include.js"></script>
	<style type="text/css">
	#tabela{
		margin-top: 200px;
	}
	</style>
	<title></title>
</head>
<body>
	<div>
	<table class="table">
	  <tr class="active">
	    <td>Path porta</td>
	    <td>Baud</td> 
	    <td>Tam. vetor amostra</td>
	  </tr>
	  <tr class="warning">
	    <td><?php echo $_GET['path']; ?></td>
	    <td><?php echo $_GET['baud']; ?></td>
	    <td><?php echo $_GET['vetor']; ?></td>
	  </tr>
	</table>
	</div>
	<table id="tabela" class="table table-striped">
		<tr class="danger" >
			<td>
				<h3><div>Contador</div></h3>
			</td>
			<td>
				<h3><div>Ultimo dado salvo no banco</div></h3>
			</td>
		</tr>
		<tr class="success" >
			<td>
				<h3><div id="valor"></div></h3>
			</td>
			<td>
				<h3><div id="teste"></div></h3>
			</td>
		</tr>
	</table>		
</body>
</html>