<?php

include "conexao.php";
include "chcklog.php";

$rus=$_POST["rus"];

if($rus==""){
	header("Location: tusers.php");
}
else{
	
$usuario = mysqli_query($conexao,"SELECT * FROM users WHERE rus='$rus'") or die(mysqli_error());
	$row=mysqli_num_rows($usuario);
	
if($row>0){
while($linha = mysqli_fetch_array($usuario)){

$nomebanco = $linha["nome"];
$sexobanco = $linha["sexo"];
$rgbanco = $linha["rg"];
$senhabanco = $linha["senha"];
$emailbanco = $linha["email"];
$situacaobanco = $linha["situacao"];
$t_usuariobanco = $linha["t_usuario"];
$t_tel1banco = $linha["t_tel1"];
$ddd1banco = $linha["ddd1"];
$numero1banco = $linha["numero1"];
$t_tel2banco = $linha["t_tel2"]; 
$ddd2banco = $linha["ddd2"];
$numero2banco = $linha["numero2"];
$obsbanco = $linha["obs"];

}
}else{
	header("Location: tusers.php");
}
}
?>

<html>
	<head>
		<title>SEVEN</title>
		<link rel="stylesheet"  href="estilo.css">
	</head>
	<body>
	<center>
	<img src="logo.png"  width="50%" height="20%">
	<h3></h3>
	<form action="alterado.php" method="POST" enctype="multipart/form-data">
	<table  cellpadding="1">
	<td align="right">
			         <h2>Consultar/Alterar cadastros</h2></td>
		    <tr>
		    <td align="right">Nome:</td> <td><input type="text" name="nome" id="nome" size="31"  maxlength="80" value="<?php echo"$nomebanco"; ?>"><br></td></tr>
			<tr>
			<td align="right"> SENHA: </td> <td><input type="text" name="senha" id="senha" size="34" maxlength="20" value="<?php echo"$senhabanco"; ?>"><br></td></tr>
			 <tr>
		    <td align="right">Sexo:</td> <td><input type="text" name="sexo" id="sexo" size="2"  maxlength="2" value="<?php echo"$sexobanco"; ?>"><br></td></tr>
			<tr>
			<td align="right">RG:</td> <td><input type="text" name="rg" id="rg" size="31"  maxlength="80" value="<?php echo"$rgbanco"; ?>"><br></td></tr>
			<tr>
			<td align="right">E-MAIL: </td> <td><input type="text" name="email" id="email" size="40" maxlength="100"value="<?php echo"$emailbanco"; ?>"><br></td></tr>
			<tr>
			<td align="right">SITUACAO:</td> <td><select name="situacao">
			<option value="A">ATIVO</option>
			</select><br></td></tr>
			<tr>
			<td align="right">Tipo de usuario:</td> <td><input type="text" name="t_usuario" id="t_usuario" size="31"  maxlength="30" value="<?php echo"$t_usuariobanco"; ?>"><br></td></tr>
			
			<tr>
			<td align="center">TELEFONES</td> <td></td></tr>
			<tr>
			<td align="right">Tipo:</td> <td><input type="text" name="t_tel1banco" id="t_tel1banco" size="31"  maxlength="30" value="<?php echo"$t_tel1banco"; ?>"><br></td></tr>
			<tr>
			<td align="right">DDD - Numero:</td> <td><input type="num" name="ddd1" id="ddd1" size="5"  maxlength="5" value="<?php echo"$ddd1banco"; ?>">
			<input type="num" name="numero1" id="numero1" size="10"  maxlength="9" value="<?php echo"$numero1banco"; ?>"><br></td></tr>
			<tr>
			<td align="right">Tipo:</td> <td><input type="text" name="t_tel2banco" id="t_tel2banco" size="31"  maxlength="30" value="<?php echo"$t_tel2banco"; ?>"><br></td></tr>
			<tr>
			<td align="right">DDD - Numero:</td> <td><input type="num" name="ddd2" id="ddd2" size="2"  maxlength="2" value="<?php echo"$ddd2banco"; ?>">
			<input type="num" name="numero2" id="numero2" size="10"  maxlength="9" value="<?php echo"$numero2banco"; ?>"><br></td></tr>	
		   <tr>
		    <td align="right">Observacoes:</td><td><textarea type="text" name="obs" id="obs" rows="5" cols="40" value="<?php echo"$obsbanco"; ?>"></textarea></td></tr>
			<tr>
	<td></td>
	<td align="left">
	<input type="submit" value="Alterar">
	</td>
	</tr>
	
	</form>
	</center>
		
       
		<form action="tusers.php" method="POST" enctype="multipart/form-data">
		    <td align="left"><input type="submit" value="Voltar"></td>
			</form>
			 <td align="left">
			 
		<form action="delete.php" method="POST" enctype="multipart/form-data">
		<input type="submit" id="desativar" value="Desativar"></td>
		<input  type="hidden" name="rus" id="rus" size="80"  maxlength="80" value="<?php echo"$rus"; ?>">
		</form>
		
		<form action="logout.php" method="POST" enctype="multipart/form-data">
		     
		    <td align="right"><input type="submit" value="SAIR"> </td>
		</form>
		
	</table>	
</body>
</html>
