<?php

include "conexao.php";
include "chcklog.php";

$sql="SELECT * FROM cliente";
$registros=mysqli_query($conexao,$sql) or die(mysqli_error());
$linhas=mysqli_num_rows($registros);

?>


<html>

<head>
<title>SEVEN</title>
<link rel="stylesheet" href="estilo.css"/>
</head>

<body>
<center>
	<img src="logo.png"  width="50%" height="20%">
	<h3>Consulta</h3><br><br>

<table border="1">

 <form action='concli2.php' method='POST' enctype='multipart/form-data'>
 
<th><b>Buscar RG especifico: </b>
<input type="text" name="rg" id="rg" size="30"  maxlength="30" placeholder="RG"> 
<input type='submit' id='buscar' value='buscar'>
</form> 

</th>

<tr>
<th>ID</th>
<th>Nome</th>
<th>RG</th>
</tr>

<?php
while($dados=mysqli_fetch_array($registros)){
	
	$id=$dados['id'];
	$nome=$dados['nome'];
	$rg=$dados['rg'];
	
echo "
<tr>
<th>$nome</th>
<th>$id</th>
<th>$rg</th>

<th>
<form action='concli2.php' method='POST' enctype='multipart/form-data'>

<input type='submit' id='consultar' value='Consultar'>
<input  type='hidden' name='rg' id='rg' size='80'  maxlength='80' value='$rg' '>

</form>
<th>
</tr>";
}

?>

	</table>
<table>

	<form action="Clientes.php" method="POST" enctype="multipart/form-data">
		    <td align="left"><input type="submit" value="Voltar"></td>
			</form>
			
			<form action="logout.php" method="POST" enctype="multipart/form-data"> 
		    <td align="right">
			<input type="submit" value="SAIR"> 
			</td>
		</form>
		
			</table>
</CENTER>

		
</body>

</html>
