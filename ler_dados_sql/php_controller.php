<?php 
class Ler{
	function mostrar($tamanho){
		include_once 'php_model.php';
		$mostrar = new model();
		$vetor = $mostrar->ler_dados($tamanho);
		return $vetor;
	}
}
?>