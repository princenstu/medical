<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<meta name="Description" content="A free open source web design by Gen.  Free for anyone to use as long as credits are intact. " />
<meta name="Keywords" content="open source web design,http://gendesigns.blogspot.com" />
<meta name="Copyright" content="Gen" />
<meta name="Designed By" content="http://gendesigns.blogspot.com" />
<meta name="Language" content="English" />
<title>Health Center</title>
 <link href="/medical/css/style.css" rel="stylesheet" type="text/css" />
<!-- <style type="text/css" title="layout" media="screen"> @import url(css/style.css); </style> !--> 
</head>
<body>
<div id="wrapper">
    <div id="top">
	             <div id="logo">
				 <div id="header1">
	                          <img src="/medical/css/images/plus.gif" alt="Logo"/>
	                          <h1><font color="#FF0000">NSTU health center</font></h1>    </div>
							 
	                         
	             </div>
	</div>
	
	<div id="header">
	            <h1><font color="#0000FF">Medical records of students </font></h1>
	            <h2></h2>
	</div>
<?php
$Name=$_POST['Name'];
$pass=$_POST['Password'];
$Password=md5($pass);
$Type=$_POST['Type'];

include("db.php");
$sql=mysql_query("SELECT * from admin");
$count=mysql_num_rows($sql);


$reg=$count+1;


$sql1=mysql_query("SELECT * from admin where UserName='$Name'");
$check=mysql_num_rows($sql1);
if($check>=1)
{
	echo "There is allready an admin exist";
}
else{
mysql_query("insert into admin (UserName,Password,Type) values ('$Name','$Password','$Type')");
echo "<br> $reg";
echo "Thank you for registration as an admin";
}

?>