<?php

// chama o arquivo de configuracao do BD
require 'conexao.php';

$nome= $_POST["nome"];
$telefone= $_POST["telefone"];
$celular= $_POST["celular"];
$email= $_POST["email"];
$id_estado= $_POST["estado"];
$foto= $_FILES['foto'];


// RESPONSAVEL PELO CADASTRO DE CANDIDATOS
//function cadastroCandidato(parametros??){
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
	
		$error = array();
	
		// Largura máxima em pixels
		$largura = 1500;
		// Altura máxima em pixels
		$altura = 1800;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 10000000;
		
		// Verifica se o arquivo é uma imagem
		if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
			$error[1] = "Arquivo em formato inválido! A imagem deve ser jpg, jpeg, bmp, gif ou png. Envie outro arquivo.";
		} 
		
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
			$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
	
		// Se não houver nenhum erro
		if (count($error) == 0) {
 
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
 
			// Gera um nome único para a imagem
			$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
			
			// Caminho de onde ficará a imagem
			$caminho_imagem = "../fotos-candidatos/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
	
		}
	
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	}

	// query que realiza a inserção dos dados no banco de dados na tabela candidatos
	$query = "INSERT INTO `candidato` (`nome` , `telefone`, `celular`, `email`, `id_estado`, `foto`) 
	VALUES ('$nome', '$telefone', '$celular', '$email', '$id_estado', '$foto')";

	if(mysql_query($query,$con)) {
		echo "Seu cadastro foi realizado com sucesso! Agradecemos a atenção."; 
	} else {
		echo "Erro na sequencia SQL!";
	}

?>