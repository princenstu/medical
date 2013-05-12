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
       
   
  <tr> 
   
   </div>
<table  border="0">
        <tr>
          <td width="930" colspan="2" valign="top" ><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="+3" 
 color="#FF0000">Administrative Activities</font></strong></font></p>
 <a href="../user/signout.php"><font size="+1" color="#00FF33">Admin Signout</font></a>

      <table width="560" height="520">
        <tr>
          <td  ><p><br><br><br>
  <a href="parti.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PARTICULARS OF THE PATIENT ENTRY</font></strong></font></a></font></strong></font></p>
      <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="system.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SYSTEMIC EXAMINATION</font></strong></font></a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="general.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GENERAL PHYSICAL EXAMINATION</font></strong></font></a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="preh.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;H/O PRESENT ILLNES</font></strong></font></a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="pah.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;H/O PAST ILLNESS</font></strong></font></a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="drh.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DRUG HISTORY</font></strong></font></a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="fa.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAMILY HISTORY</font></strong></font></a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="lab.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LABORATORY INVESTIGATION</font></strong></font></a> </font></strong></font></p><p align="left">
 <font
  face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><!--<a href="lab_report.php">!--><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LABORATORY INVESTIGATION REPORT</font></strong></font></a> </font></strong></font></p><p align="left">
 <font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="diag.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DIAGNOSIS</font></strong></font></a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="treat.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TREATMENT GIVEN AND DOSE</font></strong></font></a> </font></strong></font></p>
<p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="con_su.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONSULTATION SUMMARY</font></strong></font></a></font></strong></font></p>
 <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="treat_su.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TREATMENT SUMMARY</font></strong></font></a></font></strong></font></p>
 <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="lab_su.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LABORATORY INVESTIGATION</font></strong></font></a></font></strong></font></p>
 <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><br><a href="con_su_without.php"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONSULTATION SUMMARY</font></strong></font></a></p>
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