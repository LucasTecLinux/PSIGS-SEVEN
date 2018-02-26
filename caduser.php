<?php

include "conexao.php";
include "chcklog.php";

$opcao=mysqli_query($conexao,"SELECT * FROM escolas") or die(mysqli_error()); //aqui voce muda o users para o nome da tabelacom as opcoes
$linha=mysqli_num_rows($opcao);

?>
<html>
	<head>
		<title>SEVEN</title>
		<link rel="stylesheet"  href="estilo.css">
	</head>
	<body>
	<center>
	<img src="logo.png"  width="50%" height="20%">
	<h3>ADM</h3>
	<form action="nuser.php" method="POST" enctype="multipart/form-data">
	<table  border="0" cellpadding="1">
	<td align="right">
			         <h2>Cadastro de Usuarios:</h2></td>
		    <tr>
		    <td align="right">Nome:</td> <td><input type="text" name="nome" id="nome" size="31"  maxlength="80" placeholder="Nome completo"><br></td></tr>
			<tr>
			<td align="right"> SENHA: </td> <td><input type="password" name="senha" id="senha" size="34" maxlength="20" placeholder="Nominimo 8 letras"><br></td></tr>
			<tr>
		     <td align="center"></td> <td><fieldset>
			<legend>Sexo</legend> 
			<input 	type= "radio" name="sexo" id= "sexo" value="M">Masculino 
		    <input 	type= "radio" name="sexo"id= "sexo" value="F" checked>Feminino 
 		    </fieldset></td></tr>
			<tr>
			<td align="right">RG:</td> <td><input type="text" name="rg" id="rg" size="31"  maxlength="80" placeholder="RG"><br></td></tr>
			<tr>
			<td align="right">E-MAIL: </td> <td><input type="text" name="email" id="email" size="40" maxlength="100"><br></td></tr>
			<tr>
			<td align="right">SITUACAO:</td> <td><select name="situacao">
			<option value="A">ATIVO</option>
			</select><br></td></tr>
			<tr>
			<td align="right">Tipo de usuario: :</td> <td><select name="t_usuario">
			<option value="Administrador">ADMINISTRADOR</option>
			<option value="Operador">OPERADOR</option>
			</select><br></td></tr>
			<tr>
			<td align="center">TELEFONES</td> <td></td></tr>
			<tr>
			<td align="right">Tipo:</td> <td> <select name="t_tel1">
			<option value="CELL">CELULAR</option>
			<option value="RES">FIXO</option>
			</select></td> <td></td></tr><br>
			<tr>
			<td align="right">DDD - Numero:</td> <td><input type="num" name="ddd1" id="ddd1" size="2"  maxlength="2" placeholder="DDD">
			<input type="num" name="numero1" id="numero1" size="10"  maxlength="9" placeholder="Numero"><br></td></tr>
			<tr>
			<td align="right">Tipo:</td> <td> <select name="t_tel2">
			<option value="CELL">CELULAR</option>
			<option value="TEL">FIXO</option>
			</select></td> <td></td></tr><br>
			<tr>
			<td align="right">DDD - Numero:</td> <td><input type="num" name="ddd2" id="ddd2" size="2"  maxlength="2" placeholder="DDD">
			<input type="num" name="numero2" id="numero2" size="10"  maxlength="9" placeholder="Numero"><br></td></tr>
			<tr>
			<td align="right">Foto: </td><td><input type= "file" name="foto" width="40px"></td></tr>		
            <tr>
		    <td align="right">Observacoes:</td><td><textarea name="obs" id="obs" rows="5" cols="40" ></textarea></td></tr>
			<tr>
	<td></td>
	<td align="left">
	<input type="submit" value="Enviar">
	<input type="reset" value="Limpar dados">
	</td>
	</tr>
	</form>
	</center>
		<form action="adm.php" method="POST" enctype="multipart/form-data">
		    <td align="left"><input type="submit" value="Voltar"></td>
			</form>
		<form action="logout.php" method="POST" enctype="multipart/form-data">
		     
		    <td align="right"><input type="submit" value="SAIR"> </td>
		</form>
	</body>

</html>