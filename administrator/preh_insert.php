<?
session_start();

if(!isset($_SESSION['Name']))
	{
		Header("Location: ../user/login.php");
		exit;
	}
else
{
	?>
<?php
$regi=$_POST['regi_no'];
$cad=$_POST['cad'];
$caugh=$_POST['caugh'];
$ch_bu=$_POST['ch_bu'];
$fev=$_POST['fev'];
$gas=$_POST['gas'];
$hyp=$_POST['hyp'];
$kid=$_POST['kid'];
$nau=$_POST['nau'];
$pain=$_POST['pain'];
$psy=$_POST['psy'];
$run=$_POST['run'];
$skin=$_POST['skin'];
$tooth=$_POST['tooth'];
$vom=$_POST['vom'];

include("db.php");
$sql=mysql_query("insert into preh(regi_no,cad,caugh,ch_bu,fev,gas,hyp,kid,nau,pain,psy,run,skin,tooth,vom) VALUES ('$regi','$cad','$caugh','$ch_bu','$fev','$gas','$hyp','$kid','$nau','$pain','$psy','$run','$skin','$tooth','$vom')");
if(!$sql)
{
	echo "Error in database connection";
}
else
{
	print "Insertion Successfull";
}

?>
<?
}
?>