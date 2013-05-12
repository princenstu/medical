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
   
</div><strong> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+3" color="#00FF33">DIAGNOSIS</font></p></strong></p>


    </strong></p>

<form method="post" action="diag_insert.php" >
      <table width="560" height="520" border="0" align="center">
       <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>REGI NO</strong></font></td>
          <td><input type="text" name="regi_no"/></td>
        </tr>
      <tr>
          <td width="213"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">COLD</font></strong></font></td>
         <td ><select name="cold" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">DIABETIS MELLITUS</font></strong></font></td>
          <td ><select name="dm" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">EYE DISEASEPAIN</font></strong></font></td>
          <td ><select name="eye" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">FEVER</font></strong></font></td>
         <td ><select name="fev" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">GASTRO INTESTINAL DISORDARSKIN DISEASE</font></strong></font></td>
          <td ><select name="gas" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HEPATOBILLIAG  DISORDAR</font></strong></font></td>
          <td ><select name="hep" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HTN</font></strong></font></td>
        <td ><select name="htn" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">OSTREOPOROSIS OF SPINE</font></strong></font></td>
         <td ><select name="ost" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">PAIN</font></strong></font></td>
         <td ><select name="pain" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr><tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">SKIN DISEASE</font></strong></font></td>
        <td ><select name="skin" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
</form>
      </form>
</td>
    
 </tr>
 </tbody> </table>
 
</center>
</body></html>
<?
}
?>