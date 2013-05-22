<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Portal CV</title>
    <link rel="stylesheet" href="css/estilos.css">
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
                <h1>Lista dos currículos da região de "SP"</h1>
                <table class="lista">
                    <thead>
                        <tr>
                            <th class="col-nome">Nome</th>
                            <th class="col-cv">Currículo</th>
                            <!-- <th class="col-areas">Áreas de interesse</th> -->
                            <th class="col-data">Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-nome">Luiz Inácio da Silva</td>
                            <td class="col-cv"><a href="#">Download</a></td>
                            <!-- <td class="col-areas">Back-end</td> -->
                            <td class="col-data">12/03/2013</td>
                        </tr>
                        <tr>
                            <td class="col-nome">Ronaldo Luís Nazário de Lima</td>
                            <td class="col-cv"><a href="#">Download</a></td>
                            <!-- <td class="col-areas">UX, Intefaces, Design</td> -->
                            <td class="col-data">12/03/2013</td>
                        </tr>
                        <tr>
                            <td class="col-nome">Obi-Wan Kenobi</td>
                            <td class="col-cv"><a href="#">Download</a></td>
                            <!-- <td class="col-areas">Design, Redes, Análise de Sistemas</td> -->
                            <td class="col-data">12/03/2013</td>
                        </tr>
                        <tr>
                            <td class="col-nome">Thórin Oakenshield</td>
                            <td class="col-cv"><a href="#">Download</a></td>
                            <!-- <td class="col-areas">Design, Front-end, Infra-estrutura</td> -->
                            <td class="col-data">12/03/2013</td>
                        </tr>
                        <tr>
                            <td class="col-nome">Pedro de Lara</td>
                            <td class="col-cv"><a href="#">Download</a></td>
                            <!-- <td class="col-areas">Design, UX</td> -->
                            <td class="col-data">12/03/2013</td>
                        </tr>
                        <tr>
                            <td class="col-nome">Tony Stark</td>
                            <td class="col-cv"><a href="#">Download</a></td>
                            <!-- <td class="col-areas">Redes, Segurança</td> -->
                            <td class="col-data">12/03/2013</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
		
        <!-- RODAPE -->
        <?php include ("rodape.html"); ?>
		
    </div>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>