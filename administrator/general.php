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
	                          <h1><font color="#0000FF" face="Times New Roman, Times, serif"  size="+6" >NSTU HEALTH CENTER</font></h1>    
				 </div>
							 
	                         
	             </div>
	</div>
	
	<div id="header">
	            <h1><font  face="Arial, Helvetica, sans-serif"   color="#F40000"size="+1">YOUR COMPLETE HEALTH SOLUTION</font></h1>      
       
   
  <tr> 
   
</div><strong> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+3" color="#00FF33">GENERAL PHYSICAL EXAMINATION</font></p></strong></p>
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
</td>
    
 </tr>
 </tbody> </table>
 
</center>
</body></html>
<?
}
?>