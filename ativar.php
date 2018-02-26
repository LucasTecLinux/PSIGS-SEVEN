<?php

include "conexao.php";
include "chcklog.php";
$rus=$_POST["rus"];

$usuario = mysqli_query($conexao,"SELECT * FROM oldusers WHERE rus='$rus'") or die(mysqli_error());
while($linha = mysqli_fetch_array($usuario)){

$nome = $linha["nome"];
$sexo = $linha["sexo"];
$rg= $linha["rg"];
$senha = $linha["senha"];
$email = $linha["email"];
$situacao = $linha["situacao"];
$t_usuario = $linha["t_usuario"];
$t_tel1 = $linha["t_tel1"];
$ddd1 = $linha["ddd1"];
$numero1= $linha["numero1"];
$t_tel2 = $linha["t_tel2"]; 
$ddd2 = $linha["ddd2"];
$numero2 = $linha["numero2"];
$obs = $linha["obs"];

$sql=mysqli_query($conexao,"INSERT INTO `users` (`rus`,`nome`, `sexo`, `rg`, `senha`, `email`, `situacao`, `t_usuario`, `t_tel1`, `ddd1`, `numero1`, `t_tel2`, `ddd2`, `numero2`, `obs`) VALUES
('$rus','$nome', '$sexo', '$rg', '$senha', '$email', '$situacao', '$t_usuario', '$t_tel1', $ddd1, $numero1, '$t_tel2', $ddd2, $numero2, '$obs');") or die(mysqli_error());

$sql=mysqli_query($conexao,"DELETE FROM oldusers WHERE rus='$rus'") or die(mysqli_error());

}
?>
<html>
	<head>
		<title>SEVEN</title>
		<link rel="stylesheet" href="estilo.css"/>
	</head>
	<body>
	<center>
	<img src="logo.png"  width="50%" height="20%">
	<h3></h3><BR>
	<table cellpadding="1">
	
<tr>
	<form action="adm.php" method="POST" enctype="multipart/form-data">
		    <td align="left"><input type="submit" value="Voltar"></td>
			</form>
	<td align="center">
			<h2>Usuario reativado </h2></td>
		<form action="logout.php" method="POST" enctype="multipart/form-data">
		     
		    <td align="right"><input type="submit" value="SAIR"> </td>
		</form>
	</body>
	</html>