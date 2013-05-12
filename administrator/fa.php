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
	                          <img src="/medical/css/images/plus.gif" alt="Logo"/><font color="#0000FF" face="Times New Roman, Times, serif"  size="+6" >NSTU HEALTH CENTER</font></div>
							 
	                         
	             </div>
	</div>
	
	<div id="header">
	            <h1><font  face="Arial, Helvetica, sans-serif"   color="#F40000"size="+1">YOUR COMPLETE HEALTH SOLUTION</font></h1>      
       
   
  <tr> 
   
</div><strong> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+3" color="#00FF33">FAMALIY HISTORY</font></p></strong></p>


    </strong></p>

<form method="post" action="fa_insert.php" >
      <table width="560" height="520" border="0" align="center">
      <tr>
          <td width="213"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">REGI NO</font></strong></font></td>
           <td width="401"><input type="text" name="regi_no"/>&nbsp;</td>
        </tr>
      <tr>
          <td width="213"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">FATHER</font></strong></font></td>
          <td ><select name="father" size="1">
   			<option value="" >Select Type</option>
            <option value="AIDS" >AIDS</option>
            <option value="Asthma" >Asthma</option>
            <option value="Cancer" >Cancer</option>
            <option value="DIABETIS MELLITUS" >DIABETIS MELLITUS</option>
            <option value="Endocrine disease" >Endocrine disease</option>
            <option value="Heart disease" >Heart disease</option>
            <option value="Hypertension" >Hypertension</option>
            <option value="Thalacamia" >Thalacamia</option>
             <option value="null" >null</option>
            </select></td>
            
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">MOTHER</font></strong></font></td>
           <td ><select name="mother" size="1">
   			<option value="" >Select Type</option>
            <option value="AIDS" >AIDS</option>
            <option value="Asthma" >Asthma</option>
            <option value="Cancer" >Cancer</option>
            <option value="DIABETIS MELLITUS" >DIABETIS MELLITUS</option>
            <option value="Endocrine disease" >Endocrine disease</option>
            <option value="Heart disease" >Heart disease</option>
            <option value="Hypertension" >Hypertension</option>
            <option value="Thalacamia" >Thalacamia</option>
             <option value="null" >null</option>
            </select></td>
           
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">BROTHER</font></strong></font></td>
           <td ><select name="brother" size="1">
   			<option value="" >Select Type</option>
            <option value="AIDS" >AIDS</option>
            <option value="Asthma" >Asthma</option>
            <option value="Cancer" >Cancer</option>
            <option value="DIABETIS MELLITUS" >DIABETIS MELLITUS</option>
            <option value="Endocrine disease" >Endocrine disease</option>
            <option value="Heart disease" >Heart disease</option>
            <option value="Hypertension" >Hypertension</option>
            <option value="Thalacamia" >Thalacamia</option>
             <option value="null" >null</option>
            </select></td>
            
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">SISTER</font></strong></font></td>
      
         <td ><select name="sister" size="1">
   			<option value="" >Select Type</option>
            <option value="AIDS" >AIDS</option>
            <option value="Asthma" >Asthma</option>
            <option value="Cancer" >Cancer</option>
            <option value="DIABETIS MELLITUS" >DIABETIS MELLITUS</option>
            <option value="Endocrine disease" >Endocrine disease</option>
            <option value="Heart disease" >Heart disease</option>
            <option value="Hypertension" >Hypertension</option>
            <option value="Thalacamia" >Thalacamia</option>
             <option value="null" >null</option>
            </select></td>
        </tr>
       <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="SAVE"  />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="reset"  />&nbsp;</td>
    
   
     </tr>
      </table>
</form>
</td>
    
 </tr>
 </tbody> </table>
 
</center>
</body></html>
<?
}
?>