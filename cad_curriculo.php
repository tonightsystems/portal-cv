<?php

session_start(); // iniciar a session

require './config/conexao.php';


if(isset($_POST['cadastrar'])) { // Se o usuário clicou no botão cadastrar efetua as ações

	cadastroCurriculo($con);
	
/*
	// Verifica se alguma area foi selecionada 
    if(isset($_POST["area"])) {// Faz um loop no Array de checkbox
            
        for($i = 0; $i < count($_POST["area"]); $i++) {  // A função count retorna a quantidade de checkbox selecionado
            echo "A area ".$_POST["area"][$i]." foi selecionada!<br />";
        }
    } else {
        echo "Nenhuma area foi selecionada!";
    }	
*/
/*
	// Verifica se algum idioma foi selecionado
    if(isset($_POST["idioma"])) {// Faz um loop no Array de checkbox
            
        for($i = 0; $i < count($_POST["idioma"]); $i++) {  // A função count retorna a quantidade de checkbox selecionado
            echo "O idioma ".$_POST["idioma"][$i]." foi selecionado!<br />";
        }
    } else {
        echo "Nenhum idioma foi selecionado!";
    }	
*/
	
	retornoID($con);
	header("Location: cad_curriculo2.php");
	
}

// FUNCAO RESPONSAVEL POR REALIZAR O CADASTRO DE CANDIDATOS

function cadastroCurriculo($con){ 
		
	// armazena os dados do formulário
	$nome= $_POST["nome"];
	$telefone= $_POST["telefone"];
	$celular= $_POST["celular"];
	$email= $_POST["email"];
	$id_estado= $_POST["estado"];
	$foto= $_FILES['foto'];
	$area= $_POST["area"];
	$idioma= $_POST["idioma"];
		
	uploadFoto($foto);
		
	// query que realiza a inserção dos dados no banco de dados na tabela candidatos
	$query = "INSERT INTO `candidato` (`nome` , `telefone`, `celular`, `email`, `id_estado`, `foto`, `areas_interesse`, `idioma`) 
	VALUES ('$nome', '$telefone', '$celular', '$email', '$id_estado', '$foto', '$area', '$idioma')";
	
	if(!mysql_query($query,$con)) {
		echo "Erro na sequencia SQL!";
	}
	
} 


// FUNCAO RESPONSAVEL POR REALIZAR O UPLOAD DE IMAGENS
	
function uploadFoto($foto){

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
			$caminho_imagem = "./fotos-candidatos/" . $nome_imagem;
 
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
} 


// FUNCAO RESPONSAVEL POR RETORNAR O ÚLTIMO ID_CANDIDATO INSERIDO NO BD

function retornoID($con){

    $id_candidato = mysql_insert_id($con);
    
    $_SESSION['id_candidato'] = $id_candidato;
	echo "pagina 1:". $_SESSION['id_candidato']; 
  
}


?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Portal CV</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
    <div id="tudo">
        <!-- CABEÇALHO -->
        <?php include ("cabecalho.html"); ?>
		
        <!-- CONTEÚDO PRINCIPAL -->
        <div id="meio">
            
			<!-- MENU LATERAL -->
			<?php include ("menu-lateral.html"); ?>
			
            <div id="conteudo">
                <h1>Cadastre-se</h1><br />
                <form action="cad_curriculo.php" method="post" id="cadastrar" onsubmit="validar(event, this)" enctype="multipart/form-data">
                    <table align="center">
					
						<!-- DADOS BASICOS -->
						<tr>
							<td colspan=2>
								<h3> Dados Básicos </h3>
								<hr>
							</td>
						</tr>
                        <tr>
                            <td class="col-label"><label for="i-nome">Nome:</label></td>
                            <td class="col-input"><input type="text" name="nome" title="Nome" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-telefone">Telefone:</label></td>
                            <td><input type="text" name="telefone" title="Telefone" class="input"></td>
                        </tr> 
                        <tr>
                            <td><label for="i-celular">Celular:</label></td>
                            <td><input type="text" name="celular" title="Celular" class="input"></td>
                        </tr>
						<tr>
                            <td><label for="i-email">E-mail:</label></td>
                            <td><input type="text" name="email" title="E-mail" class="input"></td>
                        </tr>
						<tr>
                            <td><label for="i-estado">Estado:</label></td>
							<td>
								<select name="estado">
									<option>Selecione...</option>
									
									<?php 
									
										$sql = "select id_estado, nome from `estado`"; // cria a query
										$result = mysql_query($sql) or die ("ERRO SQL:".mysql_error()); // envia a query ao BD, imprime erro se houver
												
										while($estado = mysql_fetch_array($result)){ // pega os dados retornados pela query 
									?> 
										
											<option value="<?php echo $estado['id_estado'] ?>"> <!-- mostra os dados em forma de options -->
												<?php echo $estado['nome'] ?>
											</option>
										<?php } ?>
								</select>
							</td>
						</tr>	
                        <tr>
                            <td><label for="i-foto">Foto:</label></td>
                            <td><input type="file" name="foto" title="Foto" class="input"></td>
                        </tr>
                        <tr>
                            <td><br /><label for="i-area">Áreas de interesse:</label></td>
                            <td>
                                <ul class="area">
                                    <li><input type="checkbox" name="area[]" value="Análise de Sistemas"><label for="area-1">Análise de Sistemas</label></li>
                                    <li><input type="checkbox" name="area[]" value="Back-end"><label for="area-2">Back-end</label></li>
                                    <li><input type="checkbox" name="area[]" value="Design"><label for="area-3">Design</label></li>
                                    <li><input type="checkbox" name="area[]" value="Front-End"><label for="area-4">Front-End</label></li>
                                    <li><input type="checkbox" name="area[]" value="Interfaces"><label for="area-5">Interfaces</label></li>
                                    <li><input type="checkbox" name="area[]" value="Redes"><label for="area-6">Redes</label></li>
                                    <li><input type="checkbox" name="area[]" value="Segurança"><label for="area-7">Segurança</label></li>
                                    <li><input type="checkbox" name="area[]" value="UX"><label for="area-8">UX</label></li>
                                </ul>
                            </td>
                        </tr>
						<tr>
							<td><br /><label for="i-idioma">Idiomas:</label></td>
							<td>
								<ul class="idioma">
								    <li><input type="checkbox" name="idioma[]" value="Português" checked><label for="idioma-1">Português</label></li>
                                    <li><input type="checkbox" name="idioma[]" value="Inglês" ><label for="idioma-2">Inglês</label></li>
                                    <li><input type="checkbox" name="idioma[]" value="Espanhol" ><label for="idioma-3">Espanhol</label></li>
                                </ul> 
                            </td>
                        </tr>
						
						<!--
                        <tr>
                            <td><label for="i-minicurriculo">Minicurrículo:</label></td>
							<td><textarea name="minicurriculo" cols="25" rows="7" class="input" title="Minicurrículo"></textarea></td>
                        </tr>		--><!--
                        <tr>
                            <td><label for="i-curriculo">Senha</label></td>
                            <td><input type="password" class="input" title="Senha"></td>
                        </tr>
                        <tr>
                            <td><label for="i-curriculo">Confirmar senha</label></td>
                            <td><input type="password" class="input" title="Confirmar senha"></td>
                        </tr>-->
                        <tr>
                            <td></td>
                            <td><br />
								<input type="reset" value="Limpar">
								<input type="submit" name="cadastrar" value="Seguir com Cadastro >>">
							</td>
                        </tr>						
                    </table>
                </form>
            </div>
        </div>
		
        <!-- RODAPE -->
        <?php include ("rodape.html"); ?>
		
    </div>
</body>
</html>