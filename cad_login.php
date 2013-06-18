<?php

session_start(); // iniciar a session

require './config/conexao.php';


if(isset($_POST['cadastrar'])) { // Se o usuário clicou no botão cadastrar efetua as ações

	cadastroLogin($con);	
	
}

// FUNCAO RESPONSAVEL POR REALIZAR O CADASTRO DO LOGIN

function cadastroLogin($con){ 
		
	// armazena os dados do formulário
	$email= $_POST["email"];
	$senha= $_POST["senha"];
	$confirmar_senha= $_POST["confirmar_senha"];
	
	$_SESSION['email'] = $email; //cria sessão para o campo email	
	
	if($senha == $confirmar_senha){
		
		// query que realiza a inserção dos dados na tabela login
		$query = "INSERT INTO `login` (`email`, `senha`) 
		VALUES ('$email', '$senha')";
	
		if(!mysql_query($query,$con)) {
			echo "Erro na sequencia SQL!";
		}	
		
		retornoID($con);
		header("Location: cad_curriculo.php");
	
	} else {
	
		echo "As senhas digitadas não são iguais.";
	
	}		
} 

// FUNCAO RESPONSAVEL POR RETORNAR O ÚLTIMO ID_LOGIN INSERIDO NO BD

function retornoID($con){

    $id_login = mysql_insert_id($con);
    
    $_SESSION['id_login'] = $id_login;
	echo "pagina Login:". $_SESSION['id_login']; 
  
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
                <center><h1>Cadastre-se</h1></center><br /><br />
                <form action="cad_login.php" method="post" id="cadastrar" onsubmit="validar(event, this)">
                    <table align="center">
					
						<!-- DADOS DE ACESSO -->
						<tr>
                            <td><label for="i-email">E-mail:</label></td>
                            <td><input type="text" name="email" title="E-mail" class="input"></td>
                        </tr>			
                        <tr>
                            <td><label for="i-senha">Senha:</label></td>
                            <td><input type="password" name="senha" title="Senha" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-curriculo">Confirmar Senha:</label></td>
                            <td><input type="password" name="confirmar_senha" title="Confirmar Senha" class="input"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
								<input type="reset" value="Limpar">
								<input type="submit" name="cadastrar" value="Cadastrar">
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