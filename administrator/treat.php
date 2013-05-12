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
	
	<div id="header"><tr> 
   
   </div><strong> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+3" color="#00FF33">TREATMENT GIVEN AND DOSE</font></p></strong></p>


    </strong></p>

<form method="post" action="treat_insert.php" >
      <table width="560" height="520" border="0" align="center">
       <tr>
          <td width="213"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">REGI NO</font></strong></font></td>
           <td width="401"><input type="text" name="regi_no"/>&nbsp;</td>
        </tr>
      <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI ACIDIC DRUG</font></strong></font></td>
           <td >
           
           <input type="checkbox" name="ac_an" value="Antacid"/>Antacid<br>
            <input type="checkbox" name="ac_fe" value="Femodine"/>Femodine<br>
           <input type="checkbox" name="ac_om" value="omeprazole"/>omeprazole<br>
           <input type="checkbox" name="ac_rn" value="Rnitidine"/>Rnitidine<br>
           <input type="checkbox" name="ac_nu" value="null"/>null<br>
           <strong>Dose : </strong>           <input type="text" name="ac_dose" />
           
           </td>
        </tr>
        <tr>
          <td height="37"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI ASTHMATIC DRUG</font></strong></font></td>
          <td >
            <input type="checkbox" name="as_am" value="Aminophyline"/>Aminophyline<br>
           <input type="checkbox" name="as_de" value="Dexamethasone"/>Dexamethasone<br>
           <input type="checkbox" name="as_le" value="Levosalbutamol"/>Levosalbutamol<br>
            <input type="checkbox" name="as_sa" value="Salbutamol"/>Salbutamol<br>
           <input type="checkbox" name="as_st" value="Steroid-Prednisolone"/>Steroid-Prednisolone<br>
            <input type="checkbox" name="as_th" value="Theophylinephyline"/>Theophylinephyline<br>
            <input type="checkbox" name="as_nu" value="null"/>null<br>
           <strong>Dose : </strong>           <input type="text" name="as_dose" />
           </td>
        </tr>
        <tr>
         <td height="37"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTIBIOTIC</font></strong></font></td>
          <td >
           <input type="checkbox" name="bi_am" value="Amoxacillin"/>Amoxacillin<br>
           <input type="checkbox" name="bi_az" value="Azithromycin"/>Azithromycin<br>
           <input type="checkbox" name="bi_ce" value="Cefixime"/>Cefixime<br>
           <input type="checkbox" name="bi_ci" value="Ciprofloxacin"/>Ciprofloxacin<br>
           <input type="checkbox" name="bi_le" value="Levofloxacin"/>Levofloxacin<br>
           <input type="checkbox" name="bi_nu" value="null"/>null<br>
           <strong>Dose : </strong>           <input type="text" name="bi_dose" />
           </td>
        </tr>
        <tr>
          <td height="37"valign="top"><font
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI DIABETIC DRUG</font></strong></font></td>
         <td >
           <input type="checkbox" name="di_glm" value="Glibenclamide"/>Glibenclamide<br>
           <input type="checkbox" name="di_glr" value="Glimipiride"/>Glimipiride<br>
           <input type="checkbox" name="di_in" value="Insuline"/>Insuline<br>
           <input type="checkbox" name="di_me" value="Metaformi"/>Metaformi<br>
           <input type="checkbox" name="di_nu" value="null"/>null<br>
           <strong>Dose : </strong>           <input type="text" name="di_dose" />
           </td>
        </tr>
        <tr>
          <td height="37"valign="top"><font
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI FUNGAL DRUG</font></strong></font></td>
         <td >
            <input type="checkbox" name="fu_be" value="Benzyle-banzoile"/>Benzyle-banzoile<br>
            <input type="checkbox" name="fu_cl" value="Clotrimazole"/>Clotrimazole<br>
            <input type="checkbox" name="fu_fl" value="Fluconazole"/>Fluconazole<br>
             <input type="checkbox" name="fu_ke" value="Ketoonazole"/>Ketoonazole<br>
             <input type="checkbox" name="fu_pr" value="Permiyhrin"/>Permiyhrin<br>
               <input type="checkbox" name="fu_tr" value="Triamcirolone-acetonide"/>Triamcirolone-acetonide<br>
           <input type="checkbox" name="fu_nu" value="null"/>null<br>
           <strong>Dose : </strong>           <input type="text" name="fu_dose" />
           </td>
        </tr>
        <tr>
          <td height="38"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI HISTAMINE</font></strong></font></td>
           <td >
            <input type="checkbox" name="hi_ch" value="Chloropheniramine"/>Chloropheniramine<br>
            <input type="checkbox" name="hi_de" value="Desloratadine"/>Desloratadine<br>
            <input type="checkbox" name="hi_hi" value="Histasin"/>Histasin<br>
            <input type="checkbox" name="hi_lo" value="Loratadine"/>Loratadine<br>
              <input type="checkbox" name="hi_tnu" value="null"/>null<br>
         <strong>Dose : </strong>           <input type="text" name="hi_dose" />
           </td>
        </tr>
        <tr>
          <td height="40"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI HYPERTENSIVE DRUG</font></strong></font></td>
         <td >
           <input type="checkbox" name="hy_am" value="Amlodipine"/>Amlodipine<br>
           <input type="checkbox" name="hy_at" value="Atenolol"/>Atenolol<br>
           <input type="checkbox" name="hy_ni" value="Nifedipne"/>Nifedipne<br>
           <input type="checkbox" name="hy_pr" value="Propanolol"/>Propanolol<br>
           <input type="checkbox" name="hy_nu" value="null"/>null<br>
         <strong>Dose : </strong>           <input type="text" name="hy_dose" />
           </td>
        </tr>
        <tr>
          <td height="38"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI PSYCHOTRIC DRUG</font></strong></font></td>
           <td >
           <input type="checkbox" name="ps_am" value="Amytriptylline"/>Amytriptylline<br>
           <input type="checkbox" name="ps_br" value="Bromazipam"/>Bromazipam<br>
           <input type="checkbox" name="ps_cl" value="Clonazipam"/>Clonazipam<br>
           <input type="checkbox" name="ps_fl" value="Flupentixol"/>Flupentixol<br>
           <input type="checkbox" name="ps_me" value="Melitracin"/>Melitracin<br>
           <input type="checkbox" name="ps_no" value="Noramytriptylline"/>Noramytriptylline<br>
           <input type="checkbox" name="ps_nu" value="null"/>null<br>
         <strong>Dose : </strong>           <input type="text" name="ps_dose" />
           </td>
        </tr>
        <tr>
          <td height="38"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI PYRETIC DRUG</font></strong></font></td>
           <td >
           <input type="checkbox" name="py_ac" value="Ace"/>Ace<br>
            <input type="checkbox" name="py_acp" value="Ace plus"/>Ace plus<br>
            <input type="checkbox" name="py_na" value="Napa"/>Napa<br>
           <input type="checkbox" name="py_nae" value="Napa extra"/>Napa extra<br>
          <input type="checkbox" name="py_pa" value="Paracitamol"/>Paracitamol<br>
           <input type="checkbox" name="py_nu" value="null"/>null<br>
         <strong>Dose : </strong>           <input type="text" name="py_dose" />
           </td>
        </tr>
        <tr>
          <td height="38"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NSAID</font></strong></font></td>
           <td >
           <input type="checkbox" name="ns_ac" value="Aceclofenac"/>Aceclofenac<br>
           <input type="checkbox" name="ns_di" value="Diclofenac"/>Diclofenac<br>
           <input type="checkbox" name="ns_ke" value="Ketorolac"/>Ketorolac<br>
           <input type="checkbox" name="ns_na" value="Naproxen"/>Naproxen<br>
           <input type="checkbox" name="ns_pa" value="Paracitamol"/>Paracitamol<br>
           <input type="checkbox" name="ns_nu" value="null"/>null<br>
         <strong>Dose : </strong>           <input type="text" name="ns_dose" />
           </td>
        </tr>
        
        <tr>
          <td height="37"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">OTHERS</font></strong></font></td>
          
          <td><input type="text" /></td>
        </tr>
        
     <tr>
    <td>&nbsp;</td>
    <td>
    <input type="submit" value="SAVE"  />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    <input type="reset"  />
    &nbsp;</td>
    
   
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