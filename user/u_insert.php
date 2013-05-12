
<?php
$cnn=mysql_connect("localhost","","");
if (!$cnn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('medical');
$Name=$_POST['Name'];
$pass=$_POST['Password'];
$Password=md5($pass);
$Type=$_POST['Type'];

$query='insert into user (UserName,Password,Type) values ("'.$Name.'","'.$Password.'","'.$Type.'")';
mysql_query($query) or die(mysql_error());
echo "Your registration has been completed";


?>