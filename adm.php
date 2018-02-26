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
	
	<img src="logo.png"  width="50%" height="20%">
	<h3></h3>
	<table   cellpadding="1">
	<tr>
	<td align="center">
			<h2>Area do Aministrador</h2>				
	</td>
	
		<form action="caduser.php" method="POST" enctype="multipart/form-data">
		    <input type="submit" value="Cadastrar">
		</form>
		
		<form action="conuser.php" method="POST" enctype="multipart/form-data">
		    <input type="submit" value="Consutar/Alterar">
		</form>
		
		<form action="logout.php" method="POST" enctype="multipart/form-data">
		    <input type="submit" value="SAIR">
		</form>
		
		</center>
	</body>
</html>