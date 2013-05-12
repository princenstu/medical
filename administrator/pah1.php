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
<title>PAST</title>
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
    <td colspan="2" bgcolor="#003366" height="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php"><font size="+1" color="#00FF33">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../user/signout.php"><font size="+1" color="#00FF33">Signout</font></a></td>
  </tr>
  <tr> 
    <td bgcolor="#000000"></td>
    <td bgcolor="#ffffcc"><p align="center"><strong>H/O PAST ILLNESS<br />
    </strong></p>
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
 <table bgcolor="#CCFFFF" width="850"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.yourchildshealthrecord.com/default.aspx?tabname=About%20Us"><font size="-1" color="#000000">About EMHR</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourdiagnosis.com/"><font size="-1" color="#000000">Help</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourhealthrecord.com/"><font size="-1" color="#000000">Contact Us</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourchildshealthrecord.com/default.aspx?tabname=Privacy%20Statement"><font size="-1" color="#000000"> Privacy Statement</font></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://www.yourchildshealthrecord.com/default.aspx?tabname=Disclaimer"><font size="-1" color="#000000">More Info</font></a>  
    </td></tr></table>
</center></div>
</body></html>
<?
}
?>