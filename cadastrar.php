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
                <h1>Cadastre-se</h1>
                <form action="listar.html" method="post" id="cadastrar" onsubmit="validar(event, this)">
                    <table>
                        <tr>
                            <td class="col-label"><label for="i-nome">Nome:</label></td>
                            <td class="col-input"><input type="text" name="nome" title="Nome" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-email">E-mail:</label></td>
                            <td><input type="text" name="email" title="E-mail" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-cidade">Cidade:</label></td>
                            <td><input type="text" name="cidade" title="Cidade" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-estado">Estado:</label></td>
                            <td><input type="text" name="estado" title="Estado" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-curriculo">Currículo</label></td>
                            <td><input type="file" class="input" title="Currículo"></td>
                        </tr>
                        <tr>
                            <td><label for="i-estado">Áreas de interesse:</label></td>
                            <td>
                                <ul class="lista-areas">
                                    <li><input type="checkbox" name="area" value="area-1" id="area-1" checked><label for="area-1">Análise de Sistemas</label></li>
                                    <li><input type="checkbox" name="area" value="area-2" id="area-2" checked><label for="area-2">Back-end</label></li>
                                    <li><input type="checkbox" name="area" value="area-3" id="area-3"><label for="area-3">Design</label></li>
                                    <li><input type="checkbox" name="area" value="area-4" id="area-4" checked><label for="area-4">Front-End</label></li>
                                    <li><input type="checkbox" name="area" value="area-5" id="area-5" checked><label for="area-5">Interfaces</label></li>
                                    <li><input type="checkbox" name="area" value="area-6" id="area-6"><label for="area-6">Redes</label></li>
                                    <li><input type="checkbox" name="area" value="area-7" id="area-7"><label for="area-7">Segurança</label></li>
                                    <li><input type="checkbox" name="area" value="area-8" id="area-8"><label for="area-8">UX</label></li>
                                </ul>
                            </td>
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