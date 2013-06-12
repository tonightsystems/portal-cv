<?php

session_start();
$id_candidato= $_SESSION['id_candidato'];

//echo "pagina2: ". $id_candidato; ///////////////////

require './config/conexao.php';

if(isset($_POST['cadastrar'])) { // Se o usuário clicou no botão cadastrar efetua as ações

	cadastroExperiencia($con, $id_candidato);
//	header("Location: cad_curriculo2.php");
	
}


// FUNCAO RESPONSAVEL POR REALIZAR O CADASTRO DE CANDIDATOS

function cadastroExperiencia($con, $id_candidato){ 
		
	// armazena os dados do formulário
	$empresa= $_POST["empresa"];
	$funcao= $_POST["funcao"];
	$dta_entrada= $_POST["dta_entrada"];
	$dta_saida= $_POST["dta_saida"];
	$ativ_exercidas= $_POST["ativ_exercidas"];

	// query que realiza a inserção dos dados no banco de dados na tabela experiencia_profissional
	$query = "INSERT INTO `experiencia_profissional` (`empresa` , `funcao`, `dta_entrada`, `dta_saida`, `atividades`, `id_candidato`) 
	VALUES ('$empresa', '$funcao', '$dta_entrada', '$dta_saida', '$ativ_exercidas', '$id_candidato')";
	
	if(!mysql_query($query,$con)) {
		echo "Erro na sequencia SQL!";
	}	
		
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
                <form action="cad_curriculo2.php" method="post" id="cadastrar" onsubmit="validar(event, this)" enctype="multipart/form-data">
                    <table align="center">
					
						<!-- EXPERIENCIA PROFISSIONAL -->
						<tr>
							<td colspan=2>
								<center><h3> Experiência Profissional </h3></center>
							</td>
						</tr>
                        <tr>
                            <td><label for="i-empresa">Empresa:</label></td>
                            <td><input type="text" name="empresa" title="Empresa" class="input"></td>
                        </tr>			
                        <tr>
                            <td><label for="i-funcao">Função:</label></td>
                            <td><input type="text" name="funcao" title="Função" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-dta_entrada">Data Entrada:</label></td>
                            <td><input type="text" name="dta_entrada" title="Data de Entrada" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-dta_saida">Data Saída:</label></td>
                            <td><input type="text" name="dta_saida" title="Data de Saída" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-ativ_exercidas">Atividades Exercidas:</label></td>
							<td><textarea name="ativ_exercidas" cols="25" rows="7" title="Atividades Exercidas" class="input"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
								<input type="reset" value="Limpar">
					<!--			<input type="submit" name="cad_experiencia" value="Nova Experiência"> -->
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