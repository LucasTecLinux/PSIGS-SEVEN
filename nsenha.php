<?php
include "conexao.php";

$rus=$_POST["rus"];
$senha1=$_POST["senha1"];
$senha2=$_POST["senha2"];

$sql=mysqli_query($conexao,"SELECT * FROM users where rus='$rus'") or die(mysqli_error());
$row=mysqli_num_rows($sql);

if($row<1){
	header("Location: index.php");
}else
	
	if($senha1==$senha2){

$sql1=mysqli_query($conexao,"UPDATE users SET senha=$senha1 WHERE rus='$rus'") or die(mysqli_error());

}
	else{
		header("Location: digerrado.php");
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
	
	
	<table cellpadding="1">
	<tr>
	<td align="center">
	<h2>Senha trocada com sucesso!!!</h2>
	<form action="index.php" method="POST" enctype="multipart/form-data">
	 <input type="submit" id="sair" value="Sair"><br>
	</form>
	</body>
</html>