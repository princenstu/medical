<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pop insert</title>
</head>

<body>
<?php
include("db.php");
if(!$_POST['regi_no']||!$_POST['name']||!$_POST['batch']||!$_POST['session'])
{
		echo "Connection Error";
		echo "Please insert All field";
		include("parti.php");
		exit;
}
else
	{
	  $sql = mysql_query("SELECT name FROM pop WHERE name='$name'");
	  $row = mysql_num_rows($sql);
	  if($row>="1")
	  {
	    echo "This Registration No = "; echo $_POST['name']; echo "Already exist";
	  include("parti.php");
	  exit;
	  }
	  else
	  {

$result=mysql_query("insert into pop (regi_no,name,batch,session,age,sex,pr_add,pa_add,bl_gr)VALUES ('$regi_no','$name','$batch','$session','$age','$sex','$pr_add','$pa_add','$bl_gr')");
print "Insertion Successfull";
include("parti.php");
	}
	}
?>
</body>
</html>