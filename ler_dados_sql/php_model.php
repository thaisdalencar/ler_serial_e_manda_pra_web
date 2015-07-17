<?php 
class Conexao{
	function __construct(){
		$conexao = @mysql_connect('127.0.0.1','user','vAAdtNKB92BJQNne') or die('não conectou ao banco');
		mysql_select_db("monitoramento",$conexao);
	}
}
class Model extends conexao{	
	function ler_dados($tamanho){
		$sql = "SELECT vetor FROM vetor ORDER BY id DESC LIMIT {$tamanho}";
		$query = mysql_query($sql);

		if(mysql_num_rows($query)>0){
          while($row = mysql_fetch_array($query)){
              $valores[] = $row["vetor"];
		     }
		} else {
		     var_dump("deu erro na lida ao banco!");
		}
		return $valores;
	}
}
?>