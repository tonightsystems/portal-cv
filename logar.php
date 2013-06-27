<?php
	include './config/conexao.php';
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	 <title>Portal CV</title>
<script type="text/javascript">
	
	//function loginsuccessfully() {
		//setTimeout ("window.location='perfil.php'", 3000);
	//}
	function loginfailed() {
		setTimeout ("window.location='login.php'", 2000);
	}

</script> 
</head>
<body>
<?php
	$login=$_POST['login'];
	$senha=$_POST['senha'];

	$sql= mysql_query("SELECT * FROM candidato
						WHERE login = '$login' 
						AND senha = '$senha'") or die(mysql_error());
						
		$row = mysql_num_rows($sql);
	
	if($row > 0) {
		session_start();
		$_SESSION['login']=$_POST['login'];
		$_SESSION['senha']=$_POST['senha'];
				
		header("location: perfil_update.php");
		echo "<center>Autenticado com sucesso! Aguarde um instante</center>";
		echo "<script>loginsuccessfully()</script>";

	}else{

		echo "<center>Login ou Senha inválidos! Aguarde um instante para tentar novamente</center>";
		echo "<script>loginfailed()</script>";
	}
	
?>
</body>
</html>