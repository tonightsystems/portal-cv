<?php

$con = mysql_connect("localhost", "root", "");
if(!$con){
	echo("Erro na conexao com o servidor MySQL!");
}

$db_ok = mysql_select_db ("bd_portalcv", $con);
if(!$db_ok){
	echo("Erro na conexao com o banco bd_portalcv!");
}

?>