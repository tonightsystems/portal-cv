<?php

$con = mysql_connect("localhost", "root", "");
if($con){
	echo("Conex�o MySQL efetuada com sucesso!");
}else{
	echo("Erro na conex�o com o servidor MySQL!");
}


$db_ok = mysql_select_db ("bd_portalcv", $con);
if($db_ok){
	echo("Conex�o bd_portalcv efetuada com sucesso!");
}else{
	echo("Erro na conex�o com o banco bd_portalcv!");
}


$result = mysql_query("SELECT * FROM `candidato`");
if(!$result){
	echo("Erro de cl�usula SQL!");
}else{
	echo("Cl�usula SQL executada com sucesso!");
}

?>