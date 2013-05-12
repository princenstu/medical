<?php
$regi_no=$_POST['reg'];
$name=$_POST['name'];
$batch=$_POST['batch'];
$session=$_POST['session'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$pr_add=$_POST['pr_add'];
$pa_add=$_POST['pa_add'];
$bl_gr=$_POST['bl_gr'];



include("db.php");

$sql=mysql_query("update pop set name='$name',batch='$batch',session='$session',age='$age',sex='$sex',pr_add='$pr_add',pa_add='$pa_add',bl_gr='$bl_gr' WHERE regi_no='$regi_no'");
if(!sql)
{
	echo "Error";
}
else{
	echo "successfull";
}


?>