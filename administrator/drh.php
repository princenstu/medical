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
   
</div><strong> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+3" color="#00FF33">DRUG HISTORY</font></p></strong></p>


    </strong></p>
<form method="post" action="drh_insert.php" >
      <table width="560" height="520" border="0" align="center">
      <tr>
          <td width="213"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">REGI NO</font></strong></font></td>
           <td width="401"><input type="text" name="regi_no"/>&nbsp;</td>
        </tr>
      <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI ACIDIC DRUG</font></strong></font></td>
          <td ><select name="anti_acid" size="1">
   			<option value="" >Select Type</option>
            <option value="Antacid" >Antacid</option>
            <option value="Femodine" >Femodine</option>
            <option value="omeprazole" >omeprazole</option>
            <option value="Rnitidine" >Rnitidine</option>
            
            <option value="Not taken" >Not taken</option>
    </select>
    </td>
       </tr>
       <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI ASTHMATIC DRUG</font></strong></font></td>
          
        <td ><select name="anti_asma" size="1">
   			<option value="" >Select Type</option>
            <option value="Aminophyline" >Aminophyline</option>
            <option value="Dexamethasone" >Dexamethasone</option>
            <option value="Levosalbutamol" >Levosalbutamol</option>
            <option value="Salbutamol" >Salbutamol</option>
            <option value="Steroid-Prednisolone" >Steroid-Prednisolone</option>
            <option value="Theophylinephyline" >Theophylinephyline</option>
             <option value="Not taken" >Not taken</option>
    </select></td>
            
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTIBIOTIC</font></strong></font></td>
          
        <td ><select name="anti_bio" size="1">
   			<option value="" >Select Type</option>
            <option value="Amoxacillin" >Amoxacillin</option>
            <option value="Azithromycin" >Azithromycin</option>
            <option value="Cefixime" >Cefixime</option>
            <option value="Ciprofloxacin" >Ciprofloxacin</option>
            <option value="Levofloxacin" >Levofloxacin</option>
    </select></td>
            
        </tr>
       
        <tr>
          <td width="213"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI DIABETIC DRUG</font></strong></font></td>
          <td ><select name="anti_dia" size="1">
   			<option value="" >Select Type</option>
            <option value="Glibenclamide" >Glibenclamide</option>
            <option value="Glimipiride" >Glimipiride</option>
            <option value="Insuline" >Insuline</option>
            <option value="Metaformi" >Metaformi</option>
            <option value="Not taken" >Not taken</option>
            </select></td>
           
        </tr>
         <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI HYPERTENSIVE DRUG</font></strong></font></td>
          <td ><select name="anti_hyp" size="1">
   			<option value="" >Select Type</option>
            <option value="Amlodipine" >Amlodipine</option>
            <option value="Atenolol" >Atenolol</option>
            <option value="Nifedipne" >Nifedipne</option>
            <option value="Propanolol" >Propanolol</option>
            <option value="Not taken" >Not taken</option>
            </select></td>
           
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI PSYCHOTRIC DRUG</font></strong></font></td>
         <td ><select name="anti_psy" size="1">
   			<option value="" >Select Type</option>
            <option value="Amytriptylline" >Amytriptylline</option>
            <option value="Bromazipam" >Bromazipam</option>
            <option value="Clonazipam" >Clonazipam</option>
            <option value="Flupentixol" >Flupentixol</option>
            <option value="Melitracin" >Melitracin</option>
            <option value="Noramytriptylline" >Noramytriptylline</option>
            <option value="Not taken" >Not taken</option>
    </select></td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NSAID</font></strong></font></td>
          <td ><select name="nsaid" size="1">
   			<option value="" >Select Type</option>
            <option value="Aceclofenac" >Aceclofenac</option>
             <option value="Diclofenac" >Diclofenac</option>
            <option value="Ketorolac" >Ketorolac</option>
             <option value="Naproxen" >Naproxen</option>
             <option value="Paracitamol" >Paracitamol</option>
            <option value="Not taken" >Not taken</option>
            
            <option value="User" ></option>
    </select></td> 
            
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