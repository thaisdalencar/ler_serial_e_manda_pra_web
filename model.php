<?php 
class Conexao{
	function __construct(){
		$conexao = @mysql_connect('127.0.0.1','user','vAAdtNKB92BJQNne') or die('não conectou ao banco');
		mysql_select_db("monitoramento",$conexao);
	}
}
class Model extends conexao{	
	function __construct(){
    	parent::__construct();
    }	
	function grava_dados($valor){
		$sql = "INSERT INTO vetor(vetor) VALUES ($valor)";
		$query = mysql_query($sql);
        return $query;  
	}
	function deletar_primeiros(){
		//mantem no banco so os ultimos 10 registros
		$sql="SELECT id FROM vetor ORDER BY id DESC LIMIT 10";
  		$result = mysql_query($sql);
  		while ($row = mysql_fetch_array($result)) {
              $lista[] =  $row;  
          }
        $deletar = $lista[9][0];
        $sql = "DELETE FROM vetor WHERE id < $deletar";
        $result = mysql_query($sql);
        return $result;  		
	}
}
?>