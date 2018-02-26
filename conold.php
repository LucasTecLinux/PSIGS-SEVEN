<?php
include "conexao.php";
include "chcklog.php";

?>


<html>

<head>
<title>usuarios ativos</title>
<link rel="stylesheet" href="estilo.css"/>
</head>
<body>
<?php


$sql="SELECT * FROM oldusers";
$registros=mysqli_query($conexao,$sql) or die(mysqli_error("se ferrou kkkkk"));
$linhas=mysqli_num_rows($registros);

?>
<center>
<img src="logo.png"  width="50%" height="20%">
	
<h3>Consulta</h3><br><br>
<table border="1">
 <form action='verold.php' method='POST' enctype='multipart/form-data'>
<th><b>Buscar RUS especifico: </b><input type="text" name="rus" id="rus" size="30"  maxlength="30" placeholder="Usuario"> <input type='submit' id='buscar' value='buscar'>
</form></th>


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
echo "<tr>";
echo "<th>$rus</th>";
echo "<th>$nome</th>";
echo "<th>$tipo</th>";
echo "<th><form action='verold.php' method='POST' enctype='multipart/form-data'>
<input type='submit' id='consultar' value='Consultar'>
<input  type='hidden' name='rus' id='rus' size='80'  maxlength='80' value='$rus' '>
</form><th>";
echo "</tr>";
}

?>

	
</table>
<table>
<form action="conuser.php" method="POST" enctype="multipart/form-data">
		    <td align="left"><input type="submit" value="Voltar"></td>
			</form>
			<form action="logout.php" method="POST" enctype="multipart/form-data">
		     
		    <td align="right"><input type="submit" value="SAIR"> </td>
		</form>
			</table>
</CENTER>
</body>

</html>


