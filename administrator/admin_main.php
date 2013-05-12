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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />

<title>Health Center</title>
 <link href="/medical/css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a { text-decoration:none }
</style> 
</head>
<body>
<div id="wrapper">
    <div id="top">
	             <div id="logo">
				 <div id="header1">
	                          <img src="/medical/css/images/plus.gif" alt="Logo"/>
	                          <h1><font color="#0000FF" face="Times New Roman, Times, serif"  size="+6" >NSTU HEALTH CENTER</font></h1>   </div>
							 
	                         
	             </div>
	</div>
	
	<div id="header">
	                 
   <h1><font  face="Arial, Helvetica, sans-serif"   color="#F40000"size="+1">YOUR COMPLETE HEALTH SOLUTION</font></h1>
  <tr> 
   
   </div>
   
<table  border="0">
        <tr>
          <td width="930" colspan="2" valign="top" ><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="+3" 
 color="#FF0000">Administrative Activities</font></strong></font></p>
 <a href="../user/signout.php"><font size="+1" color="#6C9208">Signout</font></a>
 
      <table width="560" height="520">
        <tr>
          <td  >
  <a href="admin_present.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#6C9208" size="+2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UPDATE PRESENT INFORMATION</font></strong></font></a></font></strong></font></p>
      <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong> </strong></font><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#000066"><br>
              <a href="admin_past.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#6C9208" size="+2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UPDATE PAST INFORMATION</font></strong></font></a> </font></strong></font></p>
      <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong> </strong></font><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#000066"><br>
 <a href="lab_treat.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#6C9208" size="+2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LABORATORY & TREATMENT</font></strong></font></a> </font></strong></font></p>
 <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong> </strong></font><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#000066"><br>
 <a href="con_su.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#6C9208" size="+2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONSULTATION SUMMARY</font></strong></font></a></font></strong></font></p>
 <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br>
<!-- <a href="treat_su.php"><font 
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; TREATMENT SUMMARY</font></strong></font></a></font></strong></font></p> !-->
 <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong> <font color="#000066"><br>
 </font></strong></font></p>
 <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br>
 </p>
 </td>
    
   
     </tr>
      </table>
       </td>
    
   
     </tr>
      </table>
</td>
    
 </tr>
 </tbody> </table>
 
</center></div>
</body></html>
<?
}
?>