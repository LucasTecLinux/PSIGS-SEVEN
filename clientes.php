<?php
include "conexao.php";
include "chcklog.php";
?>
<html>
	<head>
		<title>SEVEN</title>
		<link rel="stylesheet" href="estilo.css"/>
	</head>
	<body>
	<center>
	<div id="menu">
	<img src="logo.png"  width="50%" height="20%">
	<h3></h3>
	<table   cellpadding="1">
	<tr>
	<td align="center">
			<h2>Clientes</h2>				
	</td>
		<form action="cadCli.php" method="POST" enctype="multipart/form-data">
		    <input type="submit" value="Cadastrar">
		</form>
		<form action="conCli.php" method="POST" enctype="multipart/form-data">
		    <input type="submit" value="Consuta">
		</form>
		<form action="logout.php" method="POST" enctype="multipart/form-data">
		    <input type="submit" value="SAIR">
		</form>
		<form action="painel.php" method="POST" enctype="multipart/form-data">
		    <input type="submit" value="Voltar">
			</form>
		</div>
		</center>
	</body>
</html>