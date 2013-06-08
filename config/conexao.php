<?php

$con = mysql_connect("localhost", "root", "");
if($con){
	echo("Conexão MySQL efetuada com sucesso!");
}else{
	echo("Erro na conexão com o servidor MySQL!");
}


$db_ok = mysql_select_db ("bd_portalcv", $con);
if($db_ok){
	echo("Conexão bd_portalcv efetuada com sucesso!");
}else{
	echo("Erro na conexão com o banco bd_portalcv!");
}


$result = mysql_query("SELECT * FROM `candidato`");
if(!$result){
	echo("Erro de cláusula SQL!");
}else{
	echo("Cláusula SQL executada com sucesso!");
}

?>