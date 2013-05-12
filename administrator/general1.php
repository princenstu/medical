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
<title>GENERAL</title>
</head>

<body>
<div style="position: absolute; left:80px; visibility: visible; width: 850px; height: 950px;">
<center>
<table height="700">
  <tbody><tr> 
    <td width="145" bgcolor="#000000" height="86">
    <img name="" src="2.jpg" alt="" width="131" 
height="107"></td>
    <td colspan="2"><p><strong><font color="#00FF00" size="+2" face="Georgia, Times New Roman, Times, serif">NOAKHALI SCIENCE AND TECHNOLOGY UNIVERSITY</font></strong></p>
      <p align="center"><font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#000066">EMHR (Electronic medical health record) System</font></strong></font></p></td>
  </tr>
  <tr bgcolor="#990000"> 
    <td width="145" bgcolor="#009900">
        <font color="#009900" size="+1"><a href="WWW.NSTU.EDU.BD">NSTU HOME
         </a> </font></td>
    <td colspan="2" bgcolor="#003366" height="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php"><font size="+1" color="#00FF33">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../user/signout.php"><font size="+1" color="#00FF33">Signout</font></a></td>
  </tr>
  <tr> 
    <td bgcolor="#000000"></td>
    <td bgcolor="#ffffcc" valign="top"><p align="center">
<font
 face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
color="#000000">GENERAL PHYSICAL EXAMINATION</font></strong></font></p>
<form method="post" action="general_insert.php" >
  <table width="356" height="520" border="0" align="center">
  <tr>
    <td width="112"><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">REGI NO</font></strong></td>
    <td width="178"><input type="text" name="regi_no"/></td>
  </tr>
  <tr>
    <td><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">WEIGHT</font></strong></td>
    <td><input type="text" name="w"/></td>
  </tr>
  <tr>
    <td><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">HIGHT</font></strong></td>
    <td><input type="text" name="height"  /></td>
  </tr>
  <tr>
    <td><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">CYANOSIS</font></strong></td>
    <td><input type="text" name="cyanosis"  /></td>
  </tr>
  <tr>
    <td><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">KOLINYC</font></strong></td>
    <td><input type="text" name="koli"  /></td>
  </tr>
  <tr>
    <td><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Leuchonychin</font></strong></td>
    <td><input type="text" name="leuc"  /></td>
  </tr>
  <tr>
    <td><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Lyumph nodes</font></strong></td>
    <td><input type="text" name="lyumph"  /></td>
  </tr>
  <tr>
    <td><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Pulse</font></strong></td>
    <td><input type="text" name="pulse"  /></td>
  </tr>
    <tr>
    <td><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">Bp</font></strong></td>
    <td><input type="text" name="bp"  /></td>
  </tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="SAVE"/> <input type="reset" /></td>
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