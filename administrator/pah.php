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
   
</div><strong> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+3" color="#00FF33">H/O PAST ILLNESS</font></p></strong></p>

<form method="post" action="pah_insert.php" >
      <table width="560" height="520" border="0" align="center">
      <tr>
          <td width="213"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">REGI NO</font></strong></font></td>
           <td width="401"><input type="text" name="regi_no"/>&nbsp;</td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">CAD</font></strong></font></td>
       <td ><select name="cad" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
            
        </tr>
        <tr><td>&nbsp;</td></tr>
       <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">CAUGH</font></strong></font></td>
        <td ><select name="caugh" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
               
           
        </tr>
        <tr><td>&nbsp;</td></tr>
       <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">CHEST BURNING</font></strong></font></td>
         <td ><select name="ch_bu" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
            
        </tr>
        <tr><td>&nbsp;</td></tr>
       <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">FEVER</font></strong></font></td>
         <td ><select name="fev" size="1">
   			<option value="" >Select Type</option>
            <option value="100'F" >100'F</option>
            <option value="101'F" >101'F</option>
            <option value="102'F" >102'F</option>
            <option value="103'F" >103'F</option>
            <option value="104'F" >104'F</option>
            <option value="normal" >normal</option>
            </select></td>
         
            
        </tr>
        <tr><td>&nbsp;</td></tr>
         <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">GASTRO INTESTINAL DISORDAR</font></strong></font></td>
         <td ><select name="gas" size="1">
   			<option value="" >Select Type</option>
            <option value="conotipation" >conotipation</option>
            <option value="diarrhoea" >diarrhoea</option>
             <option value="domperidone" >domperidone</option>
            <option value="Esomiprazol" >Esomiprazol</option>
            <option value="flatulence" >flatulence</option>
            <option value="gastritis" >gastritis</option>
            <option value="pantoprazole" >pantoprazole</option>
            <option value="not taken" >not taken</option>
            </select></td>  
        
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td width="213"><strong><font size="-1" face="Verdana, Arial, Helvetica, sans-serif">HYPERTENSION</font></strong></td>
           <td ><select name="hyp" size="1">
   			<option value="" >Select Type</option>
            <option value="normal" >normal</option>
            <option value="high" >high</option>
            <option value="low" >low</option>
           </select></td>
         
        </tr>
        <tr><td>&nbsp;</td></tr>
         <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">KIDNEY PROBLAM</font></strong></font></td>
          <td ><select name="kid" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td> 
            
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NAUSEA</font></strong></font></td>
          <td ><select name="nau" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
          <tr><td>&nbsp;</td></tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">OPERATIONS</font></strong></font></td>
          <td ><select name="opa" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
         
           
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">PAIN</font></strong></font></td>
           <td ><select name="pain" size="1">
   			<option value="" >Select Type</option>
            <option value="In head" >In head</option>
             <option value="In joint" >In joint</option>
              <option value="In lag" >In lag</option>
              <option value="In masul" >In masul</option>
              <option value="In stomac" >In stomac</option>
           <option value="In tooth" >In tooth</option
            ><option value="no" >no</option>
            </select></td>             
          
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">PSYCHIATIC DISORDER</font></strong></font></td>
          <td ><select name="psy" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">RUNNING NOSE</font></strong></font></td>
         <td ><select name="run" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">SKIN DISEASE</font></strong></font></td><td ><select name="skin" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
         <tr><td>&nbsp;</td></tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">TOOTHACE</font></strong></font></td>
          <td ><select name="tooth" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>
        </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">VOMITIG</font></strong></font></td>
       <td ><select name="vom" size="1">
   			<option value="" >Select Type</option>
            <option value="Yes" >Yes</option>
            <option value="No" >No</option>
            </select></td>  
        </tr>
        <tr><td>&nbsp;</td></tr>
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