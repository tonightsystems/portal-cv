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
                <form action="config/conexao.php" method="post" id="cadastrar" onsubmit="validar(event, this)">
                    <table>
						<!-- DADOS BASICOS -->
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
							<select>
								<option>Selecione...</option>
								<?php while($teste = mysql_fetch_array($query2)) { ?>
									<option value="<?php echo $teste['descricao'] ?></option>
								<?php } ?>
							</select>
						</tr>	
						<!--
                        <tr>
                            <td><label for="i-estado">Estado:</label></td>
                            <td><input type="text" name="estado" title="Estado" class="input"></td>
                        </tr> 
						
                        <tr>
                            <td><label for="i-foto">Foto:</label></td>
                            <td><input type="file" title="Foto" class="input"></td>
                        </tr>

                        <tr>
                            <td><label for="i-minicurriculo">Minicurrículo:</label></td>
							<td><textarea name="minicurriculo" cols="25" rows="7" class="input" title="Minicurrículo"></textarea></td>
                        </tr>		-->
						
						<!-- EXPERIENCIA PROFISSIONAL --><!-- 
                        <tr>
                            <td><label for="i-empresa">Empresa:</label></td>
                            <td><input type="text" name="empresa" title="Empresa" class="input"></td>
                        </tr>			
                        <tr>
                            <td><label for="i-funcao">Função:</label></td>
                            <td><input type="text" name="funcao" title="Função" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-dtaEntrada">Data Entrada:</label></td>
                            <td><input type="text" name="dtaEntrada" title="Data de Entrada" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-dtaSaida">Data Saída:</label></td>
                            <td><input type="text" name="dtaSaida" title="Data de Saída" class="input"></td>
                        </tr>
                        <tr>
                            <td><label for="i-ativExercida">Atividades Exercidas:</label></td>
							<td><textarea name="ativExercida" cols="25" rows="7" title="Atividades Exercidas" class="input"></textarea></td>
                        </tr>	
						
				        <tr>
                            <td><label for="i-idioma">Idiomas:</label></td>
                            <td>
                                <ul class="lista-idiomas">
								    <li><input type="checkbox" name="idioma" value="idioma-1" id="idioma-1" checked><label for="idioma-1">Português</label></li>
                                    <li><input type="checkbox" name="idioma" value="idioma-1" id="idioma-1" ><label for="idioma-1">Inglês</label></li>
                                    <li><input type="checkbox" name="idioma" value="idioma-1" id="idioma-1" ><label for="idioma-1">Espanhol</label></li>
                                </ul>
                            </td>
                        </tr>
						
                        <tr>
                            <td><label for="i-estado">Áreas de interesse:</label></td>
                            <td>
                                <ul class="lista-areas">
                                    <li><input type="checkbox" name="area" value="area-1" id="area-1"><label for="area-1">Análise de Sistemas</label></li>
                                    <li><input type="checkbox" name="area" value="area-2" id="area-2"><label for="area-2">Back-end</label></li>
                                    <li><input type="checkbox" name="area" value="area-3" id="area-3"><label for="area-3">Design</label></li>
                                    <li><input type="checkbox" name="area" value="area-4" id="area-4"><label for="area-4">Front-End</label></li>
                                    <li><input type="checkbox" name="area" value="area-5" id="area-5"><label for="area-5">Interfaces</label></li>
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
                        </tr>-->
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Cadastrar"></td>
							<td><input type="reset" value="Limpar"></td>
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