<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home EMHR</title>
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
    <td colspan="2" bgcolor="#003366" height="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php"><font size="+1" color="#00FF33">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../index.php"><font size="+1" color="#00FF33">Signout</font></a></td>
  </tr>
  <tr> 
    <td bgcolor="#000000"></td>
    <td bgcolor="#ffffcc"><p align="left"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font></p>
<div align="center">
<form method="post" action="parti_up.php">
  Inpute regi number :
    <input type="text" name="rg" />
<input type="submit" />
</form>
</div>
<?php
$r=$_POST['rg'];
include("db.php");
$sql=mysql_query("SELECT* FROM pop WHERE regi_no='$rg'");
$row=mysql_num_rows($sql);
if($row>="1"){
	$sql = mysql_query("SELECT * FROM pop WHERE regi_no='$rg'");
	$row = mysql_fetch_array($sql);
?>
<form method="post" action="update_pop.php" >
      <table width="560" height="520" border="0" align="center"s>
        <tr>
          <td width="143"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NAME</font></strong></font></td>
          <td width="401"><input type="text" name="name" value="<?php echo $row[name]; ?>"/>&nbsp;</td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">AGE</font></strong></font></td>
          <td><input type="text" name="age"  value="<?php echo $row[age]; ?>"/></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>SEX</strong></font></td>
          <td ><select name="sex" size="1">
            <option value="<?php echo $row[sex]; ?>" selected="selected" ><?php echo $row[sex]; ?></option> 
   			<option value="" >Select Type</option>
            <option value="M" >M</option>
            <option value="F" >F</option>
            </select></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>BATCH</strong></font></td>
         <td ><select name="batch" size="1">
         <option value="<?php echo $row[batch]; ?>" selected="selected" ><?php echo $row[batch]; ?></option>
   			<option value="" >Select Type</option>
            <option value="1st" >1st</option>
            <option value="2nd" >2nd</option>
            <option value="3rd" >3rd</option>
            <option value="4th" >4th</option>
            <option value="5th" >5th</option>
            <option value="6th" >6th</option>
            </select></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>SESSION</strong></font></td>
          <td ><select name="session" size="1">
          <option value="<?php echo $row[session]; ?>" selected="selected" ><?php echo $row[session]; ?></option>
   			<option value="" >Select Type</option>
            <option value="2005-06" >2005-06</option>
            <option value="2006-07" >2006-07</option>
            <option value="2007-08" >2007-08</option>
            <option value="2008-09" >2008-09</option>
            <option value="2009-10" >2009-10</option>
            <option value="2010-11" >2010-11</option>
            </select></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>PRESENT ADDRESS</strong></font></td>
          <td><input type="text" name="pr_add" value="<?php echo $row[pr_add]; ?>"/></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>PERMANAT ADDRESS</strong></font></td>
          <td><input type="text" name="pa_add" value="<?php echo $row[pa_add]; ?>"/></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>BLOOD GROUP</strong></font></td>
         <td ><select name="bl_gr" size="1">
         <option value="<?php echo $row[bl_gr]; ?>" selected="selected" ><?php echo $row[bl_gr]; ?></option>
   			<option value="" >Select Type</option>
            <option value="A+" >A+</option>
            <option value="B+" >B+</option>
            <option value="AB+" >AB+</option>
            <option value="O+" >O+</option>
            <option value="A-" >A-</option>
            <option value="B-" >B-</option>
            <option value="AB-" >AB-</option>
            <option value="O-" >O-</option>
            </select></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
         <tr>
    <td><input type="hidden" name="reg" value="<? echo $r; ?>" /></td>
    <td><input type="submit" value="UPDATE"  />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="reset"  />&nbsp;</td>
    
   
     </tr>
      </table>
</form>
      <?
}
else{
	echo "Please insert your regi number";
}
	  
	  ?>

</td>
    
 </tr>
 </tbody> </table>
 <table bgcolor="#CCFFFF" width="850"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.yourchildshealthrecord.com/default.aspx?tabname=About%20Us"><font size="-1" color="#000000">About EMHR</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourdiagnosis.com/"><font size="-1" color="#000000">NSTU Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourhealthrecord.com/"><font size="-1" color="#000000">Contact Us</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourchildshealthrecord.com/default.aspx?tabname=Privacy%20Statement"><font size="-1" color="#000000"> Privacy Statement</font></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourchildshealthrecord.com/default.aspx?tabname=Disclaimer"><font size="-1" color="#000000">More Info</font></a>  
    </td></tr></table>
</center></div>
</body></html>