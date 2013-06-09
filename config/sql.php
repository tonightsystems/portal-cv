<?php

// chama o arquivo de configuracao do BD
require 'conexao.php';

$nome= $_POST["nome"];
$telefone= $_POST["telefone"];
$celular= $_POST["celular"];
$email= $_POST["email"];
$id_estado= $_POST["estado"];
/*$minicurriculo= $_POST["minicurriculo"];*/


//Query que realiza a inserção dos dados no banco de dados na tabela candidatos
$query = "INSERT INTO `candidato` (`nome` , `telefone`, `celular`, `email`, `id_estado`) 
VALUES ('$nome', '$telefone', '$celular', '$email', '$id_estado')";

if (mysql_query($query,$con)) {
	echo "Seu cadastro foi realizado com sucesso! Agradecemos a atenção."; 
}


$query2 = mysql_query("select nome from `estado`");


?>