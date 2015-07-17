<?php
	header("Content-Type: application/json; charset=utf-8");
	//inclui o python que ler a serial
	include_once('exec_python.php');
	
	// ler o arquivo txt gerado pelo python
	$arquivo = file_get_contents("data.txt");
	$data = json_decode($arquivo); 

	/*$valor1 .= $data[0]->valores[0]->valor;
	$valor1 .= $data[1]->valores[0]->valor;
	$valor1 .= $data[2]->valores[0]->valor;
*/	
	var_dump("ultimos valores salvos no banco");
	include_once 'model.php';
	foreach ($data as $key => $value) {
		$salvar = new model();
		$vetor = $salvar->grava_dados($value->valores[0]->valor);	
		var_dump($value->valores[0]->valor);
	}


	//mantem no banco so os ultimos 10 registros
	$deletar = new model();
	$vetor = $deletar->deletar_primeiros();
?>