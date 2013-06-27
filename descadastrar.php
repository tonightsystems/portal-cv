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
                <center><h1>Descadastre-se</h1></center><br /><br />
                <form action="deletar.php" method="post" id="descadastrar" onsubmit="validar(event, this)">
                    <table align="center">
					
						<!-- DADOS DE ACESSO -->
						<tr>
                            <td><label for="i-login">Login:</label></td>
                            <td><input type="text" name="login" title="Login" class="input"></td>
                        </tr>			
                        <tr>
                            <td><label for="i-senha">Senha:</label></td>
                            <td><input type="password" name="senha" title="Senha" class="input"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
								<input type="reset" value="Limpar">
								<input type="submit" name="descadastrar" value="Descadastrar">
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