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
<script language="javascript">
function printfun(){
window.print();
}
</script>
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
       
    </td>
  </tr>
  <tr> 
   
   </div>
<table  border="0">
        <tr>
          <td width="930" colspan="2" valign="top" bgcolor="#003300">

 
 <p><td colspan="2" bgcolor="#003300" valign="top">
          <form method="post" action="treat_su.php"><font size="+1" color="#00FF33">
Registration number :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="rg" /><input type="hidden" name="ms"  value="lo" />
<input type="submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../user/signout.php"><font size="+1" color="#00FF33">Signout</font></a>
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