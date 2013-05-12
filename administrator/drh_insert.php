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
$anti_acid=$_POST['anti_acid'];
$anti_asma=$_POST['anti_asma'];
$anti_bio=$_POST['anti_bio'];
$anti_dia=$_POST['anti_dia'];
$anti_hyp=$_POST['anti_hyp'];
$anti_psy=$_POST['anti_psy'];
$nsaid=$_POST['nsaid'];

include("db.php");
$sql=mysql_query("insert into drug(regi_no,anti_acid,anti_asma,anti_bio,anti_dia,anti_hyp,anti_psy,nsaid) VALUES ('$regi','$anti_acid','$anti_asma','$anti_bio','$anti_dia','$anti_hyp','$anti_psy','$nsaid')");
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
