<?php

$conexao=mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($conexao,"SEVEN") or die(mysqli_error());

?>