<?php
	include './config/conexao.php';
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	 <title>Portal CV</title>
<script type="text/javascript">
	
	function loginsuccessfully() {
		setTimeout ("window.location='index.php'", 3000);
	}
	function loginfailed() {
		setTimeout ("window.location='descadastrar.php'", 3000);
	}

</script> 
</head>


<body>
<?php
	$email =$_POST['login'];
	$senha =$_POST['senha'];

	$sql= mysql_query("DELETE FROM candidato WHERE login = '$login'");
	$row = mysql_num_rows($sql);

	if($row = $sql) {
		session_start();
		$_SESSION['login']=$_POST['login'];
		$_SESSION['senha']=$_POST['senha'];
		
		header("location: index.php");
		echo "<center>Deletado com sucesso! Aguarde um instante</center>";
		echo "<script>loginsuccessfully()</script>";

	}else{

		echo "<center>Login ou Senha inválidos! Aguarde um instante para tentar novamente</center>";
		echo "<script>loginfailed()</script>";
	}
	
?>
</body>
</html>
