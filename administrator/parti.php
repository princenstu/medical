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
   
</div><strong> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+3" color="#00FF33">PARTICULARS OF THE PATIENT</font></p></strong></p>
<form method="post" action="parti_insert.php" >
<table width="560" height="520" border="0" align="center">
       <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>REGI NO</strong></font></td>
          <td><input type="text" name="regi_no"/></td>
  </tr>
        <tr>
          <td width="143"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NAME</font></strong></font></td>
          <td width="401"><input type="text" name="name"/>&nbsp;</td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">AGE</font></strong></font></td>
          <td><input type="text" name="age" /></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>SEX</strong></font></td>
          <td ><select name="sex" size="1">
   			<option value="" >Select Type</option>
            <option value="Male" >Male</option>
            <option value="Female" >Female</option>
            </select></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>BATCH</strong></font></td>
         <td ><select name="batch" size="1">
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
          <td><input type="text" name="pr_add"/></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>PERMANAT ADDRESS</strong></font></td>
          <td><input type="text" name="pa_add"/></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>BLOOD GROUP</strong></font></td>
         <td ><select name="bl_gr" size="1">
   			<option value="" >Select Type</option>
            <option value="A+" >A+</option>
            <option value="A-" >A-</option>
            <option value="AB+" >AB+</option>
            <option value="AB-" >AB-</option>
            <option value="B+" >B+</option>
            <option value="B-" >B-</option>
            <option value="O+" >O+</option>
            <option value="O-" >O-</option>
            </select></td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
         <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="SAVE"  />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="reset"  />&nbsp;</td>
    
   
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