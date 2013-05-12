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
<script language="javascript">
function printfun(){
	window.print() ;
}
</script>
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
    <td colspan="2" bgcolor="#003366" height="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php"><font size="+1" color="#00FF33"></font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../user/signout.php"><font size="+1" color="#00FF33">Signout</font></a></td>
  </tr>
  <tr> 
    <td bgcolor="#000000"></td><td bgcolor="#ffffcc"width="40"></td>
    <td width="648" bgcolor="#ffffcc"><p align="left"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font></p>
<table width="560" height="520" border="0">
        <tr>
          <td colspan="2" bgcolor="#ffffcc" valign="top">
          <form method="post" action="treat_su.php">
Registration number :<input type="text" name="rg" />
<input type="submit" />
</form>	
<div align="center">
<?  
$d=time();
$show_date = date("H:i:s m/d/Y",$d);
echo $show_date;

?>
</div>
<?php
$r=$_POST['rg'];
include("db.php");
$sql=mysql_query("SELECT* FROM treat WHERE regi_no='$rg'");
$row=mysql_num_rows($sql);
if($row>="1"){
	$sql = mysql_query("SELECT * FROM treat WHERE regi_no='$rg'");
	$row = mysql_fetch_array($sql);
	$ms="gsg";
?>
      <table width="560" height="364" border="0" align="center"s>
        <tr>
        <td bgcolor="#ffffcc"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font><strong>TREATMENT GIVEN AND DOSE</strong></p></td></tr>
        <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">REGI NO</font></strong></font></td>
<td width="354"><?php echo $row[regi_no]; ?>&nbsp;</td>
        </tr>
        <tr>
          <td height="26">
<font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>ANTI ACIDIC DRUG</strong></font></td>
          <td><?php echo $row[anti_acid]; ?></td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI ASTHMATIC DRUG</font></strong></font></td>
<td width="354"><?php echo $row[anti_asma]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTIBIOTIC</font></strong></font></td>
<td width="354"><?php echo $row[anti_bio]; ?>&nbsp;</td>
        </tr>
          <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI DIABETIC DRUG</font></strong></font></td>
<td width="354"><?php echo $row[anti_dia]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI FUNGAL DRUG</font></strong></font></td>
<td width="354"><?php echo $row[anti_fun]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI HISTAMINE</font></strong></font></td>
<td width="354"><?php echo $row[anti_his]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI HYPERTENSIVE DRUG</font></strong></font></td>
<td width="354"><?php echo $row[anti_hyp]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI PSYCHOTRIC DRUG</font></strong></font></td>
<td width="354"><?php echo $row[anti_psy]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI PYRETIC DRUG</font></strong></font></td>
<td width="354"><?php echo $row[anti_pyr]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NSAID</font></strong></font></td>
<td width="354"><?php echo $row[nsaid]; ?>&nbsp;</td>
        </tr>
         <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value=" Print " onclick="printfun()" /></td>
    </tr>
      </table>
      <?
}
else{
	echo "Please insert your regi number";
}	
?>	
        
          
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