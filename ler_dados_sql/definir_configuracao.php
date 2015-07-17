<?php 
$path = $_POST['path'];
$baud = $_POST['baud'];
$vetor = $_POST['vetor'];

if(empty($path) || !isset($path)){
	$path = "/dev/ttyACM0";
}
if(empty($baud) || !isset($baud)){
	$baud = "9600";
}
if(empty($vetor) || !isset($vetor)){
	$vetor = "1";
}



//escreve um arquivo xml com os dados de configuração
$xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';
$xml .= '<data>';
$xml .= '<valor>';
$xml .= '<path>' . $path . '</path>';
$xml .= '<baud>' . $baud. '</baud>';
$xml .= '<vetor>' . $vetor. '</vetor>';
$xml .= '</valor>';
$xml .= '</data>';

$fp = fopen('dados_config.xml', 'w+');
	fwrite($fp, $xml);
	fclose($fp);

//redireciona para o pagina leirura.php e passando os parametros por GET
header( "location: leitura.php?path=$path&baud=$baud&vetor=$vetor");
?>