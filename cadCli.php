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
	<h3>Clientes</h3>
	<form action="ncli.php" method="POST" enctype="multipart/form-data">
	<table  border="0" cellpadding="1">
	<td align="right">
			         <h2>Cadastro de Clientes:</h2></td>
					 
		    <tr>
		    <td align="right">Nome:</td> <td><input type="text" name="nome" id="nome" size="31"  maxlength="80" placeholder="Crianca"><br></td></tr>
			<tr>
		    <td align="right">Nome da Mae:</td> <td><input type="text" name="nomem" id="nomem" size="31"  maxlength="80" placeholder="Mae"><br></td></tr>
			<tr>
		    <td align="right">Nome do Pai:</td> <td><input type="text" name="nomep" id="nomep" size="31"  maxlength="80" placeholder="Pai"><br></td></tr>
			<tr>
		     <td align="center"></td> <td><fieldset>
			<legend>Sexo</legend> 
			<input 	type= "radio" name="sexo" id= "sexo" value="M">Masculino 
		    <input 	type= "radio" name="sexo"id= "sexo" value="F" checked>Feminino
 		    </fieldset></td></tr>
			<tr>
			<td align="right">Data de Nascimento: </td><td><input type="date" name="dnas"></td>
			
			<tr>
			<td align="right">RG:</td> <td><input type="text" name="rg" id="rg" size="31"  maxlength="9" placeholder="RG"><br></td></tr>
			<tr>
			<td align="right">CPF:</td> <td><input type="text" name="cpf" id="cpf" size="31"  maxlength="11" placeholder="CPF"><br></td></tr>
			<tr>
			 <td>
			<td align="left">Possui alguma deficiencia: <input 	type= "radio" name="def" id= "def" value="s">Sim 
		    <input 	type= "radio" name="def"id= "def" value="n" checked>Nao
 		    </td></td></tr>
			<tr>
			<td align="right">E-MAIL: </td> <td><input type="text" name="email" id="email" size="40" maxlength="100" placeholder="E-mail"><br></td></tr>
			<tr>
			<td align="right">TELEFONES</td></tr>
			<tr>
			<td align="right">Tipo:</td> <td> <select name="t_tel1">
			<option value="CELL">CELULAR</option>
			<option value="RES">FIXO</option>
			</select></td> <td></td></tr><br>
			<tr>
			<td align="right">DDD - Numero:</td> <td><input type="text" name="ddd1" id="ddd1" size="4"  maxlength="2" placeholder="DDD" value="11">
			<input type="text" name="numero1" id="numero1" size="10"  maxlength="9" placeholder="Numero"><br></td></tr>
			<tr>
		    <td align="right">Endereco:</td> <td><input type="text" name="endereco" id="endereco" size="31"  maxlength="100" placeholder="Endereco"><br></td></tr>
			
			<tr>
<td align="right">Escola:</td><td> 
<select name="escola">

<?php

while($dados=mysqli_fetch_array($opcao)){
	
	$esc=$dados['nome'];
	                      
	echo "<option value='$esc'>$esc</option>"; 
}

?>
	</select></td> <td></td></tr><br>
	<tr>
			<td align="right">Horario: </td><td><input type="time" name="horarioe"> - <input type="time" name="horarios"></td><br><br>
			</tr>
	<tr>
			<td align="right">Foto: </td><td><input type= "file" name="foto" width="40px"></td></tr>		
            <tr>
		    <td align="right">Observacoes:</td><td><textarea type="text" name="obs" id="obs" rows="5" cols="40" ></textarea></td></tr>
			<tr>
	<td></td>
	<td align="left">
	<input type="submit" value="Enviar">
	<input type="reset" value="Limpar dados">
	</td>
	</tr>
	</form>
	</center>
		<form action="clientes.php" method="POST" enctype="multipart/form-data">
		    <td align="left"><input type="submit" value="Voltar"></td>
			</form>
			
		<form action="logout.php" method="POST" enctype="multipart/form-data">
		     
		    <td align="right"><input type="submit" value="SAIR"> </td>
		</form>
	</body>

</html>