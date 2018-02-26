<?php

include "conexao.php";
include "chcklog.php";

$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$rg=$_POST['rg'];
$senha=$_POST['senha'];
$email=$_POST['email'];
$situacao=$_POST['situacao'];
$t_usuario=$_POST['t_usuario'];
$ddd1=$_POST['ddd1'];
$numero1=$_POST["numero1"];
$ddd2=$_POST['ddd2'];
$numero2=$_POST['numero2'];
$obs=$_POST['obs'];
$usuario = mysqli_query($conexao,"SELECT * FROM users WHERE rg='$rg'") or die(mysqli_error());
while($linha = mysqli_fetch_array($usuario)){
$rus = $linha["rus"];
}
$sql=mysqli_query($conexao,"UPDATE `users` SET nome='$nome' ,sexo='$sexo' , rg='$rg' ,senha='$senha'
, email='$email' ,situacao='$situacao' ,t_usuario='$t_usuario' ,ddd1='$ddd1' , numero1='$numero1' 
, ddd2='$ddd2' ,numero2='$numero2' , obs='$obs' WHERE rus='$rus';")or die(mysqli_error());
 
?>
<html>
	<head>
		<title>SEVEN</title>
		<link rel="stylesheet"  href="estilo.css">
	</head>
	<body>
<?php
?>
<center>
	<img src="logo.png"  width="50%" height="20%">
	<h3></h3><BR>

<table cellpadding="1">
	<tr>
	<form action="adm.php" method="POST" enctype="multipart/form-data">
		    <td align="left"><input type="submit" value="Voltar"></td>
			</form>
	<td align="center">
			<h2>Cadastro atualizado</h2></td>

		<form action="logout.php" method="POST" enctype="multipart/form-data">
		     
		    <td align="right"><input type="submit" value="SAIR"> </td>
		</form>
</body>
</html>