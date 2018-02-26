<?php

include "conexao.php";
include "chcklog.php";


?>
<html>
	<head>
		<title>SEVEN</title>
		<link rel="stylesheet"  href="estilo.css">
	</head>
	<body>
	<center>
	<img src="logo.png"  width="50%" height="20%">
	<tr>
<th>
<form action='Clientes.php' method='POST' enctype='multipart/form-data'>
<input type='submit' id='clientes' value='Clientes'>
</form>
<th>
</tr>
	<form action="logout.php" method="POST" enctype="multipart/form-data">
		    <input type="submit" value="SAIR">
		</form>
	</body>
</html>