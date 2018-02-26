<?php

include "conexao.php";

$rus=$_POST["rus"];

$sql=mysqli_query($conexao,"SELECT * FROM users where rus='$rus'") or die(mysqli_error());
$row=mysqli_num_rows($sql);

if($row<1){
	header("Location: norus.php");
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
	
	<h3>Nova senha</h3>
	<br>
	<table cellpadding="1">
	<tr>
	<td align="center">
	
	<form action="nsenha.php" method="POST" enctype="multipart/form-data">  
		
		Digite a nova senha: <input type="password" name="senha1" id="senha1" size="30"  maxlength="30" placeholder="Nova senha"><br>
		Digite novamente: <input type="password" name="senha2" id="senha2" size="30"  maxlength="30" placeholder="Digite novamente"><br><br>
		
		<input type="submit" id="entrar" value="Alterar">
		
		<input type="hidden" name="rus" id="rus" size="30"  maxlength="30" value="<?php echo $rus ?>">
		</form>
		</td>
	</body>
</html>