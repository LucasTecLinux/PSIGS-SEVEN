<?php

include "conexao.php";
include "chcklog.php";


$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$rg=$_POST['rg'];
$senha=$_POST['senha'];
$email=$_POST['email'];
$situacao=$_POST['situacao'];
$t_usuario=$_POST['t_usuario'];
$t_tel1=$_POST['t_tel1'];
$ddd1=$_POST['ddd1'];
$numero1=$_POST["numero1"];
$t_tel2=$_POST['t_tel2'];
$ddd2=$_POST['ddd2'];
$numero2=$_POST['numero2'];
$obs=$_POST['obs'];

$sql=mysqli_query($conexao,
"INSERT INTO `users` (
`nome`, `sexo`, 
`rg`, `senha`, 
`email`, `situacao`, 
`t_usuario`, `t_tel1`, 
`ddd1`, `numero1`, 
`t_tel2`, `ddd2`, 
`numero2`, `obs`
) VALUES(
'$nome', '$sexo', 
'$rg', '$senha', 
'$email', '$situacao', 
'$t_usuario', '$t_tel1', 
'$ddd1', '$numero1', 
'$t_tel2', '$ddd2', 
'$numero2', '$obs'
);") or die(mysqli_error());

$usuario = mysqli_query($conexao,"SELECT * FROM users WHERE rg='$rg'") or die(mysqli_error());
while($linha = mysqli_fetch_array($usuario)){
$rusbanco = $linha["rus"];
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
	<h3>Cadastro realizado</h3><BR>

<table cellpadding="1">
	<tr>
	<form action="adm.php" method="POST" enctype="multipart/form-data">
		    <td align="left"><input type="submit" value="Voltar"></td>
			</form>
	<td align="center">
			<h2>RUS: <?php echo "$rusbanco"?></h2></td>

		<form action="logout.php" method="POST" enctype="multipart/form-data">
		     
		    <td align="right"><input type="submit" value="SAIR"> </td>
		</form>
</body>
</html>