<?php

require './config/conexao.php';

$nome= "Fulano de Tal";
$telefone= "";
$celular= "";

$query1 = "SELECT * FROM `candidato` c, `login` l
WHERE c.id_login = l.id_login";

$result = mysql_query($query1);


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
                <h1>Seu Perfil</h1><br />
                <form action="listar.html" method="post" id="cadastrar" onsubmit="validar(event, this)">
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
                            <td class="col-input"><input type="text" name="nome" title="Nome" class="input" value="<?php echo $nome ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="i-telefone">Telefone:</label></td>
                            <td><input type="text" name="telefone" title="Telefone" class="input" value="<?php echo $telefone ?>"></td>
                        </tr> 
                        <tr>
                            <td><label for="i-celular">Celular:</label></td>
                            <td><input type="text" name="celular" title="Celular" class="input" value="<?php echo $celular ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="i-estado">Estado:</label></td>
                            
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
						
				        <tr>
                            <td><label for="i-email">E-mail:</label></td>
                            <td><input type="text" name="email" title="E-mail" class="input" value="fulano@gmail.com"></td>
                        </tr>
                        <tr>
                            <td><label for="i-curriculo">Senha</label></td>
                            <td><input type="password" class="input" title="Senha"></td>
                        </tr>
                        <tr>
                            <td><label for="i-curriculo">Confirmar senha</label></td>
                            <td><input type="password" class="input" title="Confirmar senha"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Cadastrar"></td>
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