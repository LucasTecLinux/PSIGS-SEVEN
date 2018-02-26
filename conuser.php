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
	<h3>Consulta</h3><br>
	<form action="adm.php" method="POST" enctype="multipart/form-data">
		    <td align="left"><input type="submit" value="Voltar"></td>
			</form>
	<table cellpadding="1">
	<tr>
	<td align="center">
			<h2><form method="post" action="opc.php" >
   <fieldset> 
			<input 	type= "radio" name="opc" id= "opc" value="A"checked>Ativos
		    <input 	type= "radio" name="opc"id= "opc" value="I" >Inativos
 	</fieldset><br>
    <input type="submit" value="Buscar" />
</form></h2>				
	</td>

</body>
</html>