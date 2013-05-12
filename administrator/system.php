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
   
</div><strong> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+3" color="#00FF33">SYSTEMIC EXAMINATION</font></p></strong></p>
<form method="post" action="system_insert.php" >
<table width="560" height="520" border="0" align="center"s>
       <tr>
          <td width="213"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">REGI NO</font></strong></font></td>
           <td width="401"><input type="text" name="regi_no"/>&nbsp;</td>
  </tr>
        <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">CARDIOVASCULAR SYSTEM  	
</font></strong></font></td>
           <td ><select name="option" size="1">
   			<option value="Normal" >Normal</option>
            <option value="Abnormal" >Abnormal</option>
            </select>
           
    <strong>Remarks : </strong><input type="text" name="c_remarks" />
           </td>
        </tr>
        <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">DIGEITIVE SYSTEM</font></strong></font></td><td >
           <select name="option" size="1">
   			<option value="Normal" >Normal</option>
            <option value="Abnormal" >Abnormal</option>
            </select>
    <strong>Remarks : </strong><input type="text" name="d_remarks" />
           </td>
  </tr>
        <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">GENITAL SYSTEM</font></strong></font></td><td >
          <select name="option" size="1">
   			<option value="Normal" >Normal</option>
            <option value="Abnormal" >Abnormal</option>
            </select>
    <strong>Remarks : </strong><input type="text" name="g_remarks" />
           </td>
  </tr>
         <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HEPATOBILLIAG SYSTEM</font></strong></font></strong></font></td><td >
          <select name="option" size="1">
   			<option value="Normal" >Normal</option>
            <option value="Abnormal" >Abnormal</option>
            </select>
    <strong>Remarks : </strong><input type="text" name="h_remarks" />
           </td>
  </tr>
        <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">LYPHATIC SYSTEM</font></strong></font></strong></font></td><td >
           <select name="option" size="1">
   			<option value="Normal" >Normal</option>
            <option value="Abnormal" >Abnormal</option>
            </select>
    <strong>Remarks : </strong><input type="text" name="l_remarks" />
           </td>
  </tr>
       <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">MUSCULOSKELETAL SYSTEM</font></strong></font></td><td >
           <select name="option" size="1">
   			<option value="Normal" >Normal</option>
            <option value="Abnormal" >Abnormal</option>
            </select>
    <strong>Remarks : </strong><input type="text" name="m_remarks" />
           </td>
  </tr>
        <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NERVOUS SYSTEM</font></strong></font></td><td >
         <select name="option" size="1">
   			<option value="Normal" >Normal</option>
            <option value="Abnormal" >Abnormal</option>
            </select>
    <strong>Remarks : </strong><input type="text" name="n_remarks" />
           </td>
  </tr>
        <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">VRINAL SYSTEM</font></strong></font></td><td >
          <select name="option" size="1">
   			<option value="Normal" >Normal</option>
            <option value="Abnormal" >Abnormal</option>
            </select>
    <strong>Remarks : </strong><input type="text" name="v_remarks" />
           </td>
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
 
</center>
</body></html>
<?
}
?>