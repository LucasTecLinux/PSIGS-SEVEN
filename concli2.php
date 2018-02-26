<?php

include "conexao.php";
include "chcklog.php";

$rg=$_POST["rg"];

if($rg==""){
	header("Location: conCli.php");
}
else{
	
$usuario = mysqli_query($conexao,"SELECT * FROM cliente WHERE rg='$rg'") or die(mysqli_error());
	$row=mysqli_num_rows($usuario);
	
if($row>0){
while($linha = mysqli_fetch_array($usuario)){

	$id = $linha["id"];
	$nome  = $linha["nome"];
	$nomem  = $linha["nomem"];
	$nomep = $linha["nomep"];
	$sexo = $linha["sexo"];
	$dnas  = $linha["dnas"];
	$rg = $linha["rg"];
	$cpf = $linha["cpf"];
	$def = $linha["def"];
	$t_tel1= $linha["t_tel1"];
    $ddd1= $linha["ddd1"];
    $numero1= $linha["numero1"];
	$email = $linha["email"];
	$endereco = $linha["endereco"];
	$escola	= $linha["escola"];
	$horarioe = $linha["horarioe"];
	$horarios= $linha["horarios"];
    




}
}else{
	header("Location: conCli.php");
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
	<h3>Clientes</h3>
	<form action="altcli.php" method="POST" enctype="multipart/form-data">
	<table  border="0" cellpadding="1">
	<td align="right">
			         <h2>Consulta de Clientes:</h2></td>
					 
		    <tr>
		    <td align="right">Nome:</td> <td><input type="text" name="nome" id="nome" size="31"  maxlength="80" placeholder="Crianca" value="<?php echo"$nome"; ?>"><br></td></tr>
			<tr>
		    <td align="right">Nome da Mae:</td> <td><input type="text" name="nomem" id="nomem" size="31"  maxlength="80" placeholder="Mae" value="<?php echo"$nomem"; ?>"><br></td></tr>
			<tr>
		    <td align="right">Nome do Pai:</td> <td><input type="text" name="nomep" id="nomep" size="31"  maxlength="80" placeholder="PAI" value="<?php echo"$nomep"; ?>"><br></td></tr>
			<tr>
		     <td align="center"></td> <td><fieldset>
			<legend>Sexo</legend> 
			<input 	type= "radio" name="sexo" id= "sexo" value="M">Masculino 
		    <input 	type= "radio" name="sexo"id= "sexo" value="F" checked>Feminino
 		    </fieldset></td></tr>
			<tr>
			<td align="right">Data de Nascimento: </td><td><input type="date" name="dnas" value="<?php echo"$dnas"; ?>"></td>
			
			<tr>
			<td align="right">RG:</td> <td><input type="text" name="rg" id="rg" size="31"  maxlength="9" placeholder="RG" value="<?php echo"$rg"; ?>"><br></td></tr>
			<tr>
			<td align="right">CPF:</td> <td><input type="text" name="cpf" id="cpf" size="31"  maxlength="11" placeholder="CPF" value="<?php echo"$cpf"; ?>"><br></td></tr>
			<tr>
			 <td>
			<td align="left">Possui alguma deficiencia: <input 	type= "radio" name="def" id= "def" value="s">Sim 
		    <input 	type= "radio" name="def"id= "def" value="n" checked>Nao
 		    </td></td></tr>
			<tr>
			<td align="right">E-MAIL: </td> <td><input type="text" name="email" id="email" size="40" maxlength="100" placeholder="E-mail" value="<?php echo"$email"; ?>"><br></td></tr>
			<tr>
			<td align="right">TELEFONES</td></tr>
			<tr>
			<td align="right">Tipo:</td> <td> <select name="t_tel1">
			<option value="CELL">CELULAR</option>
			<option value="RES">FIXO</option>
			</select></td> <td></td></tr><br>
			<tr>
			<td align="right">DDD - Numero:</td> <td><input type="text" name="ddd1" id="ddd1" size="4"  maxlength="2" placeholder="DDD" value="11" value="<?php echo"$ddd1"; ?>">
			<input type="text" name="numero1" id="numero1" size="10"  maxlength="9" placeholder="Numero" value="<?php echo"$numero1"; ?>"><br></td></tr>
			<tr>
		    <td align="right">Endereco:</td> <td><input type="text" name="endereco" id="endereco" size="31"  maxlength="100" placeholder="Endereco" value="<?php echo"$endereco"; ?>"><br></td></tr>
			
			<tr>
<td align="right">Escola:</td><td> 
<select name="escola">

<?php	                      
	echo "<option value='$escola'>$escola</option>"; 


?>
	</select></td> <td></td></tr><br>
	<tr>
			<td align="right">Horario: </td><td><input type="time" name="horarioe" value="<?php echo"$horarioe"; ?>"> - <input type="time" name="horarios" value="<?php echo"$horarios"; ?>"></td><br><br>
			</tr>
	<tr>
			<td align="right">Foto: </td><td><input type= "file" name="foto" width="40px"></td></tr>		
            <tr>
		    <td align="right">Observacoes:</td><td><textarea name="obs" id="obs" rows="5" cols="40"  value="<?php echo"$obs"; ?>"></textarea></td></tr>
			<tr>
	<td></td>
	<td align="left">
	<input type="submit" value="Enviar">
	<input type="reset" value="Limpar dados">
	</td>
	</tr>
	</form>
	</center>
		<form action="conCli.php" method="POST" enctype="multipart/form-data">
		    <td align="left"><input type="submit" value="Voltar"></td>
			</form>
			
		<form action="logout.php" method="POST" enctype="multipart/form-data">
		     
		    <td align="right"><input type="submit" value="SAIR"> </td>
		</form>
	</body>

</html>