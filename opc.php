<?php

include "chcklog.php";

$opc=$_POST["opc"];

if($opc=='I'){
	header("Location: conold.php");
}else
{
header("Location: tusers.php");
}
	?>