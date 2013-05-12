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
$weight=$_POST['w'];
$height=$_POST['height'];
$cyanosis=$_POST['cyanosis'];
$koli=$_POST['koli'];
$leuc=$_POST['leuc'];
$lyumph=$_POST['lyumph'];
$pulse=$_POST['pulse'];
$bp=$_POST['bp'];

include("db.php");
$sql=mysql_query("insert into general(regi_no,weight,height,cyanosis,koli,leuc,lyumph,pulse,bp) VALUES ('$regi','$weight','$height','$cyanosis','$koli','$leuc','$lyumph','$pulse','$bp')");
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