<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("db.php");
if(!$_POST['name']||!$_POST['batch']||!$_POST['session']||!$_POST['regi_no'])
{
		echo "Connection Error";
		echo "Please insert All field";
		include("particulanis.php");
		exit;
}
else
	{
	  $sql = mysql_query("SELECT regi_no FROM pop WHERE regi_no='$regi_no'");
	  $row = mysql_num_rows($sql);
	  if($row>="1")
	  {
	    echo "This Student regi_no = "; echo $_POST['regi_no']; echo "Already exist";
	  include("particulanis.php");
	  exit;
	  }
	  else
	  {

$result=mysql_query("insert into student (name,age,sex,batch,session,pr_add,pa_add,bl_gr,regi_no)VALUES ('$name','$age','$sex','$batch','$session','$pr_add','$pa_add','$bl_gr','$regi_no')");
print "<font color=blue>Insertion Successfull</font>";
include("particulanis.php");
	}
	}
?>

</body>
</html>