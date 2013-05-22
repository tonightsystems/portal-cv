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
                <h1>Login</h1>
                <p>Acesse o sistema do Portal CV, cadastre seu currículo e suas áreas de interesse e em breve alguma oportunidade vai encontrar você!</p>
                <form action="perfil.html" id="login" method="post" onsubmit="validar(event, this)">
                    <table>
                        <tr>
                            <td><label for="i-email">E-mail</label></td>
                            <td><input type="text" name="email" id="i-email" title="E-mail" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-senha">Senha</label></td>
                            <td><input type="password" name="senha" id="i-senha" title="Senha" class="input"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" value="Login"></td>
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