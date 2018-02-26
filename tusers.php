<?php

include "conexao.php";
include "chcklog.php";

$sql="SELECT * FROM users";
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

 <form action='userresult.php' method='POST' enctype='multipart/form-data'>
 
<th><b>Buscar RUS especifico: </b>
<input type="text" name="rus" id="rus" size="30"  maxlength="30" placeholder="Usuario"> 
<input type='submit' id='buscar' value='buscar'>
</form> 

</th>

<tr>
<th>RUS</th>
<th>Nome</th>
<th>Tipo</th>
<th>Opcao</th>
</tr>

<?php
while($dados=mysqli_fetch_array($registros)){
	
	$rus=$dados['rus'];
	$nome=$dados['nome'];
	$tipo=$dados['t_usuario'];
	
echo "
<tr>
<th>$rus</th>
<th>$nome</th>
<th>$tipo</th>

<th>
<form action='userresult.php' method='POST' enctype='multipart/form-data'>

<input type='submit' id='consultar' value='Consultar'>
<input  type='hidden' name='rus' id='rus' size='80'  maxlength='80' value='$rus' '>

</form>
<th>
</tr>";
}

?>

	</table>
<table>

	<form action="conuser.php" method="POST" enctype="multipart/form-data">
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
