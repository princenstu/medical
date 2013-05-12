<?php
$namm=$_POST['Name'];
$passs=$_POST['Password'];
$passwordd=md5($passs);
if(($namm==null) || ($passs==null))
		{
			echo  "<div id=\"Login_message\" style=\"color:red\">Enter both User and Password!</div>";
			include ("a_login.php");
			exit; 
		}
else{

    
	$cnn=mysql_connect("localhost","","");
	mysql_select_db("medical");

	$result=mysql_query("select * from admin where UserName='$namm'");
	while($rows=mysql_fetch_array($result))
		{
			$pass=$rows[Password];
			$type=$rows[Type];
		}
		

if($pass==$passwordd)
        {
			session_start();
			$_SESSION['Name']=$namm;
			$name=$_SESSION['Name'];
			session_register("$name");
		  if($type=="Admin")
            {
			header("Location: ".$_SERVER['HTTP_REFERER']);
			header("Location: http://localhost/medical/administrator/admin_main.php");
			}
			//elseif($type=="User")
			//{
			//header("Location: ".$_SERVER['HTTP_REFERER']);
			//header("Location: http://localhost/medical/administrator/con_su.php");
			//}
		
			
}
else
{
echo  "<div id=\"Login_message\" style=\"color:red\">Invalid Admin name or password!Please try again </div>"."<br>";
echo "$passwordd";
include ("a_login.php");
}
}
?>
