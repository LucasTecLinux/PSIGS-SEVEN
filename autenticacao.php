<?php

include "conexao.php";

$rus=$_POST["rus"];
$senha=$_POST["senha"];

if($rus=="" || $senha=="")//verifica se esta em branco
{
	header("Location: index.php");
}

else
{
	//se nao estiver em branco entao ele verifica no banco se o usuario e a senha existem
$sql=mysqli_query($conexao,"SELECT * FROM users where rus=$rus AND senha=$senha") or die(mysqli_error());
$row=mysqli_num_rows($sql);

if($row>0){//se o row for maior que 1, entao quer dizer que existe um usuario e senha compartivel com o digitado
	//se existir algum usuario cadastrado, entao ele inicia uma nova sessao
	
	session_start();
	$_SESSION["rus"]=$_POST["rus"];
    $_SESSION["senha"]=$_POST["senha"];
	
	//aqui ele vai puxar do banco de dados qual o tipo de user esta tentando se logar
	//para que em seguida possa redirecionar-lo para o painel apropriado
$usuario = mysqli_query($conexao,"SELECT * FROM users WHERE rus='$rus'") or die(mysqli_error());
while($linha = mysqli_fetch_array($usuario)){
	
$t_usuariobanco = $linha["t_usuario"];

if($t_usuariobanco=="Administrador")
{
	header("Location: adm.php");
}
else
{
	header("Location: painel.php");
}
}//fim do while
}else{//se nao foi encontrado nenhum usuario, entao ele retorna ao index
	header("Location: index.php");
}
}
?>