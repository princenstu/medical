<?php
$regi=$_POST['regi_no'];
$cold=$_POST['cold'];
$dm=$_POST['dm'];
$eye=$_POST['eye'];
$fev=$_POST['fev'];
$gas=$_POST['gas'];
$hep=$_POST['hep'];
$htn=$_POST['htn'];
$ost=$_POST['ost'];
$pain=$_POST['pain'];
$skin=$_POST['skin'];

include("db.php");
$sql=mysql_query("insert into diag(regi_no,cold,dm,eye,fev,gas,hep,htn,ost,pain,skin) VALUES ('$regi','$cold','$dm','$eye','$fev','$gas','$hep','$htn','$ost','$pain','$skin')");
if(!$sql)
{
	echo "Error in database connection";
}
else
{
	print "Insertion Successfull";
}

?>
