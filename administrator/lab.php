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
   
</div><strong> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="+3" color="#00FF33">LABORATORY INVESTIGATION</font></p></strong></p>


    </strong></p>

<form method="post" action="lab_insert.php" >
      <table width="560" height="520" border="0" align="center">
       <tr>
          <td width="213"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">REGI NO</font></strong></font></td>
           <td width="401"><input type="text" name="regi_no"/>&nbsp;</td>
        </tr>
      <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">SEROLOGICAL</font></strong></font></td>
           <td >
           
           <input type="checkbox" name="s_at" value="ASO Titre"/>ASO Titre<br>
            <input type="checkbox" name="s_blgr" value="Blood Grouping & Rh Factor"/>Blood Grouping & Rh Factor<br>
           <input type="checkbox" name="s_de" value="Dengue Elisa"/>Dengue Elisa<br>
           <input type="checkbox" name="s_hbs" value="HBs Ag"/>HBs Ag<br>
           <input type="checkbox" name="s_hiv" value="Hiv"/>HIV<br>
            <input type="checkbox" name="s_tpha" value="TPHA"/>TPHA<br>
            <input type="checkbox" name="s_wt" value="Widal Test"/>Widal Test<br>
           <strong>Others : </strong>           <input type="text" name="s_others" />
           
           </td>
        </tr>
        <tr>
          <td height="37"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HAEMATOLOGICAL</font></strong></font></td>
          <td >
            <input type="checkbox" name="h_dc" value="DC"/>DC<br>
           <input type="checkbox" name="h_esr" value="ESR"/>ESR<br>
           <input type="checkbox" name="h_hb" value="Hb%"/>Hb%<br>
            <input type="checkbox" name="h_plat" value="Platelet"/>Platelet<br>
           <input type="checkbox" name="h_tc" value="TC"/>TC<br>
            <input type="checkbox" name="h_tcrbc" value="TC of RBC"/>TC of RBC<br>
           <strong>Others : </strong>           <input type="text" name="others" />
          </td>
        </tr>
        <tr>
         <td height="37"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">BIOCHEMICAL</font></strong></font></td>
          <td >
           <input type="checkbox" name="b_bsr" value="Blood Sugar Random"/>Blood Sugar Random<br>
           <input type="checkbox" name="b_bsf" value="Blood Sugar Fasting"/>Blood Sugar Fasting<br>
           <input type="checkbox" name="b_bu" value="Blood Urea"/>Blood Urea<br>
           <input type="checkbox" name="b_bili" value="Bilirubin"/>Bilirubin<br>
           <input type="checkbox" name="b_sgot" value="SGOT"/>SGOT<br>
           <input type="checkbox" name="b_sgpt" value="SGPT"/>SGPT<br>
           <input type="checkbox" name="b_scr" value="S.Creatinine"/>S.Creatinine<br>
           <input type="checkbox" name="b_ua" value="Uric Acid"/>Uric Acid<br>
           <strong>Others : </strong>           <input type="text" name="others" />
          </td>
        </tr>
        <tr>
          <td height="37"valign="top"><font
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">URINE TEST</font></strong></font></td>
         <td >
           <input type="checkbox" name="u_re" value="R/E"/>R/E<br>
           <input type="checkbox" name="u_cs" value="C/S"/>C/S<br>
           <input type="checkbox" name="u_su" value="Sugar"/>Sugar<br>
           <input type="checkbox" name="u_pg" value="Urine for Pregnancy"/>Urine for Pregnancy<br>
           <strong>Others : </strong>           <input type="text" name="others" />
          </td>
        </tr>
        <tr>
          <td height="40"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">STOOL </font></strong></font></td>
         <td >
           <input type="checkbox" name="so_re" value="R/E"/>R/E<br>
           <input type="checkbox" name="so_cs" value="C/S"/>C/S<br>
         <strong>Others : </strong>           <input type="text" name="others" />
          </td>
        </tr>
        <tr>
          <td height="38"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HORMONE TEST</font></strong></font></td>
           <td >
           <input type="checkbox" name="ho_t3" value="T3"/>T3<br>
           <input type="checkbox" name="ho_t4" value="T4"/>T4<br>
           <input type="checkbox" name="ho_tsh" value="TSH"/>TSH<br>
         <strong>Others : </strong>           <input type="text" name="others" />
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