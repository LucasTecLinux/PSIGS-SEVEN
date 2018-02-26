<?php
include "conexao.php";
include "chcklog.php";

	
	$nome  = $_POST['nome'];
	$nomem  = $_POST['nomem'];
	$nomep  = $_POST['nomep'];
	$sexo  = $_POST['sexo'];
	$dnas  = $_POST['dnas'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$def = $_POST['def'];
	$t_tel1=$_POST['t_tel1'];
    $ddd1=$_POST['ddd1'];
    $numero1=$_POST["numero1"];
	$email = $_POST['email'];
	$endereco =	 $_POST['endereco'];
	$escola	=	 $_POST['escola'];
	$horarioe =	 $_POST['horarioe'];
	$horarios =	 $_POST['horarios'];
$usuario = mysqli_query($conexao,"SELECT * FROM cliente WHERE rg='$rg'") or die(mysqli_error());
while($linha = mysqli_fetch_array($usuario)){
$rg = $linha["rg"];
}
mysqli_query($conexao,"UPDATE `cliente` SET 
nome='$nome',
nomem='$nomem' ,
nomep='$nomep',
sexo='$sexo' ,
dnas='$dnas' ,
cpf='$cpf' ,
ddd1='$ddd1' ,
numero1='$numero1' ,
email='$email' ,
endereco='$endereco' ,
escola='$escola'	,
horarioe='$horarioe' ,
horarios='$horarios' 
 WHERE rg='$rg';")or die(mysqli_error());

?>
<html>
	<head>
		<title>SEVEN</title>
		<link rel="stylesheet"  href="estilo.css">
	</head>
	<body>
<?php
?>
<center>
	<img src="logo.png"  width="50%" height="20%">
	<h3></h3><BR>

<table cellpadding="1">
	<tr>
	<form action="conCli.php" method="POST" enctype="multipart/form-data">
		    <td align="left"><input type="submit" value="Voltar"></td>
			</form>
	<td align="center">
			<h2>Cadastro atualizado</h2></td>

		<form action="logout.php" method="POST" enctype="multipart/form-data">
		     
		    <td align="right"><input type="submit" value="SAIR"> </td>
		</form>
</body>
</html>