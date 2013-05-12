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
	                          <div id="div">
	                            <div id="div2">
	                              <div id="div3">
	                                <h1><font color="#0000FF" face="Times New Roman, Times, serif"  size="+6" >NSTU HEALTH CENTER</font></h1>
                                  </div>
                                </div>
                   </div>
	                          <div id="div4">
                                <h1><font  face="Arial, Helvetica, sans-serif"   color="#F40000"size="+1">YOUR COMPLETE HEALTH SOLUTION</font></h1>
                   </div>
	                          <h1>&nbsp;</h1>    
				 </div>
							 
	                         
	             </div>
	</div>
	
	<div id="header"></td>
  </tr>
  <tr> 
   
   </div>
<table  border="0">
        <tr>
          <td width="930" colspan="2" valign="top" >

 
 <p><td colspan="2"  valign="top">
          <font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font></p>
<table width="560" height="520" bordercolor="#EBE9B9">
        <tr>
          <td colspan="2" bgcolor="#EBE9B9" valign="top">
          <form method="post" action="lab_su.php">
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
$sql=mysql_query("SELECT* FROM lab_inves WHERE regi_no='$rg'");
$row=mysql_num_rows($sql);
if($row>="1"){
	$sql = mysql_query("SELECT * FROM lab_inves WHERE regi_no='$rg'");
	$row = mysql_fetch_array($sql);
	$ms="gsg";
?>
      <table width="560" height="364" border="0" align="center"s>
      <tr>
        <td bgcolor="#ffffcc"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font><strong>LABORATORY INVESTIGATION</strong></p></td></tr>
        <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">REGI NO</font></strong></font></td>
<td width="354"><?php echo $row[regi_no]; ?>&nbsp;</td>
        </tr>
        <tr>
          <td height="26">
		 <font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>SEROLOGICAL</strong></font></td>
          <td><?php echo $row[sero]; ?></td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HAEMATOLOGICAL</font></strong></font></td>
<td width="354"><?php echo $row[hama]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">BIOCHEMICAL</font></strong></font></td>
<td width="354"><?php echo $row[bio]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">URINE TEST</font></strong></font></td>
<td width="354"><?php echo $row[urin]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">STOOL</font></strong></font></td>
<td width="354"><?php echo $row[stool]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HORMONE TEST</font></strong></font></td>
<td width="354"><?php echo $row[hor]; ?>&nbsp;</td>
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
?>          </td>
    
   
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