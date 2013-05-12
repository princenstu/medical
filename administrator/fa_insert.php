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
$father=$_POST['father'];
$mother=$_POST['mother'];
$brother=$_POST['brother'];
$sister=$_POST['sister'];

include("db.php");
$sql=mysql_query("insert into family(regi_no,father,mother,brother,sister) VALUES ('$regi','$father','$mother','$brother','$sister')");
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