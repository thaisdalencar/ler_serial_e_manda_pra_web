<?php 

	header("Content-Type: application/json; charset=utf-8");
	include_once 'php_controller.php';

	$xml = simplexml_load_file('dados_config.xml');
	$vetor = $xml->valor->vetor;
	$tamanho = intval($vetor);	
	
	$exibir = new ler;
	$vetor = $exibir->mostrar($tamanho);
	/*include_once("php_view.php");*/
	$jsonData = json_encode($vetor);
	echo ($jsonData) ;
?>