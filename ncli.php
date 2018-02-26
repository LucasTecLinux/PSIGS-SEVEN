<?php
 
 $conecxao = mysqli_connect("localhost","root","") or die (mysqli_error());
		mysqli_select_db($conecxao,"SEVEN") or die (mysqli_error());

		
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
	//$plano = 	 $_POST['plano'];

mysqli_query($conecxao,
"INSERT INTO `cliente` (
`nome`, `nomem`, 
`nomep`, `sexo`, 
`dnas`, `rg`, 
`cpf`, `def`, 
`t_tel1`, `ddd1`, 
`numero1`, `email`, 
`endereco`, `escola`, 
`horarioe`, `horarios`) VALUES(
'$nome', '$nomem', 
'$nomep', '$sexo', 
'$dnas', '$rg', 
'$cpf', '$def', 
'$t_tel1', '$ddd1', 
'$numero1', '$email', 
'$endereco', '$escola', 
'$horarioe', '$horarios')") or die (mysqli_error());

?>

<html> 
	<head>
		<title> Seven </title>
	</head> 
	<body>
	
	Cadastro realizado 
	<form action="painel.php" method="POST" enctype="multipart/form-data">
	<input type="submit" id="voltar" value="voltar" >  
	</form>
	<form action="index.php" method="POST" enctype="multipart/form-data">
	<input type="submit" id="sair" value="sair" >  
	</form>
	
	</body>
	</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
