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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home EMHR</title>
</head>

<body>
<div style="position: absolute; left:80px; visibility: visible; width: 934px; height: 754px;">
<center>
<table height="700">
  <tbody><tr> 
    <td width="146" bgcolor="#000000" height="86">
    <img name="" src="2.jpg" alt="" width="131" 
height="107"></td>
    <td colspan="2"><p><strong><font color="#00FF00" size="+2" face="Georgia, Times New Roman, Times, serif">NOAKHALI SCIENCE AND TECHNOLOGY UNIVERSITY</font></strong></p>
      <p align="center"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#000066">EMHR (Electronic medical health record) System</font></strong></font></p></td>
  </tr>
  <tr bgcolor="#990000"> 
    <td width="146" bgcolor="#009900"><div align="justify"> 
        <font color="#009900" size="+1"><a href="WWW.NSTU.EDU.BD">NSTU HOME
        </a> </font></div></td>
    <td colspan="2" bgcolor="#003366" height="42"><a href="signout.php"><div align="center"><font size="+1" color="#00FF33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signout</font></div></a></td>
  </tr>
  <tr> 
    <td bgcolor="#000000"></td><td bgcolor="#ffffcc"width="40"></td>
    <td width="648" bgcolor="#ffffcc"><p align="left"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font></p>
<form method="post" action="insert.php" >
      <table width="560" height="520" border="0">
        <tr>
          <td colspan="2" bgcolor="#ffffcc" valign="top"><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#000066"><br>
  <a href="parti.php">PARTICULARS OF THE PATIENT ENTRY</a></font></strong></font></p>
      <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="system.php">SYSTEMIC EXAMINATION</a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="general.php">GENERAL PHYSICAL EXAMINATION</a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="preh.php">H/O PRESENT ILLNES</a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="pah.php">H/O PAST ILLNESS</a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="drh.php">DRUG HISTORY</a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="fa.php">FAMILY HISTORY</a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="lab.php">LABORATORY INVESTIGATION</a> </font></strong></font></p><p align="left">
 <font
  face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="lab_report.php">LABORATORY INVESTIGATION REPORT</a> </font></strong></font></p><p align="left">
 <font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="diag.php">DIAGNOSIS</a> </font></strong></font></p><p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="treat.php">TREATMENT GIVEN AND DOSE</a> </font></strong></font></p>
<p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="con_su.php">CONSULTATION SUMMARY</a></font></strong></font></p>
 <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="treat_su.php">TREATMENT SUMMARY</a></font></strong></font></p>
 <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="lab_su.php">LABORATORY INVESTIGATION SUMMARY</a></font></strong></font></p>
 <p align="left"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong>
 <font color="#000066"><a href="con_su_without.php">CONSULTATION SUMMARY WITHOUT DIAGNOSIS & TREATMENT</a></font></strong></font></p>
 </td>
    
   
     </tr>
      </table>
      </form>
</td>
    
 </tr>
 </tbody> </table>
 <table bgcolor="#CCFFFF" width="850"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.yourchildshealthrecord.com/default.aspx?tabname=About%20Us"><font size="-1" color="#000000">About EMHR</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourdiagnosis.com/"><font size="-1" color="#000000">Help</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourhealthrecord.com/"><font size="-1" color="#000000">Contact Us</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourchildshealthrecord.com/default.aspx?tabname=Privacy%20Statement"><font size="-1" color="#000000"> Privacy Statement</font></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourchildshealthrecord.com/default.aspx?tabname=Disclaimer"><font size="-1" color="#000000">More Info</font></a>  
    </td></tr></table>
</center></div>
</body></html>
<?
}
?>