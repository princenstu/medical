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
<script language="javascript">
function printfun(){
window.print();
}
</script>
</head>
<body>
<div id="wrapper">
    <div id="top">
	             <div id="logo">
				 <div id="header1">
	                          <img src="/medical/css/images/plus.gif" alt="Logo"/>
	                         <h1><font color="#0000FF" face="Times New Roman, Times, serif"  size="+6" >NSTU HEALTH CENTER</font></h1>   </div>
							 
	                         
	             </div>
	</div>
	
	<div id="header">
	           <h1><font  face="Arial, Helvetica, sans-serif"   color="#F40000"size="+1">YOUR COMPLETE HEALTH SOLUTION</font></h1>
    </td>
  </tr>
  <tr> 
   
   </div>
<table  border="0">
        <tr>
          <td width="930" colspan="2" valign="top" bgcolor="#EBE9B9">
<?php
$ms=$_POST['ms'];
if($ms==null)
{
?>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#6C9208" size="+3">Your health records</font></p>
 <p>&nbsp;</p>
 <form method="post" action="con_su.php"><font size="+3" color="#6C9208">
Registration number :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="rg" /><input type="hidden" name="ms"  value="lo" />
<input type="submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../user/signout.php"><font size="+2" color="#6C9208">Signout</font></a>
</form>	
<?
}
else
{
?>
<div align="center">
<?  
$d=time();
$show_date = date("H:i:s m/d/Y",$d);
echo $show_date;

?>
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
      <table width="560" height="364" border="0" align="center"s>
        <tr>
        <td  bgcolor="#66FF33"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font>  <strong>CONSULTATION SUMMARY</strong></p>
</td></tr>
        <tr>
        <td bgcolor="#66FF33"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font>  <strong> PARTICULARS OF THE PATIENT</strong></p>
</td></tr>
        <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">REGI NO</font></strong></font></td>
<td width="354"><?php echo $row[regi_no]; ?>&nbsp;</td>
        </tr>
        <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NAME</font></strong></font></td>
<td width="354"><?php echo $row[name]; ?>&nbsp;</td>
        </tr>
        <tr>
          <td height="28"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">AGE</font></strong></font></td>
          <td><?php echo $row[age]; ?></td>
        </tr>
        <tr>
          <td height="24"><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>SEX</strong></font></td>
          <td ><?php echo $row[sex]; ?></td>
        </tr>
        <tr>
          <td height="28"><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>BATCH</strong></font></td>
         <td ><?php echo $row[batch]; ?></td>
        </tr>
        <tr>
          <td height="26"><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>SESSION</strong></font></td>
          <td ><?php echo $row[session]; ?></td>
        </tr>
        <tr>
          <td height="31"><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>PRESENT ADDRESS</strong></font></td>
          <td><?php echo $row[pr_add]; ?></td>
        </tr>
        <tr>
          <td height="33"><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>PERMANAT ADDRESS</strong></font></td>
          <td><?php echo $row[pa_add]; ?></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>BLOOD GROUP</strong></font></td>
         <td ><?php echo $row[bl_gr]; ?></td>
        </tr>
        <tr>
        <td  bgcolor="#66FF33"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font><strong>SYSTEMIC EXAMINATION</strong></p></td></tr>
        <tr>
          <td height="26">
		  <?php 
		 $sql1 = mysql_query("SELECT * FROM system WHERE regi_no='$rg'");
		 $row1 = mysql_fetch_array($sql1);
		 ?>
         <font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>CARDIOVASCULAR SYSTEM</strong></font></td>
          <td><?php echo $row1[cardo_sys]; ?></td>
        </tr>
        <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">DIGEITIVE SYSTEM</font></strong></font></td>
<td width="354"><?php echo $row1[dig_sys]; ?>&nbsp;</td>
        </tr>
                <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">GENITAL SYSTEM</font></strong></font></td>
        <td width="354"><?php echo $row1[gini_sys]; ?>&nbsp;</td></tr>
         <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HEPATOBILLIAG SYSTEM</font></strong></font></td>
        <td width="354"><?php echo $row1[hepa_sys]; ?>&nbsp;</td></tr><tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">LYPHATIC SYSTEM</font></strong></font></td>
        <td width="354"><?php echo $row1[lyp_sys]; ?>&nbsp;</td></tr><tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">MUSCULOSKELETAL SYSTEM</font></strong></font></td>
        <td width="354"><?php echo $row1[mus_sys]; ?>&nbsp;</td></tr><tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NERVOUS SYSTEM</font></strong></font></td>
        <td width="354"><?php echo $row1[nerv_sys]; ?>&nbsp;</td></tr>
         <tr>
          <td width="213"valign="top"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">VRINAL SYSTEM</font></strong></font></td>
        <td width="354"><?php echo $row1[vir_sys]; ?>&nbsp;</td></tr>
         <tr>
        <td  bgcolor="#66FF33"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font><strong>GENERAL PHYSICAL EXAMINATION</strong></p></td></tr>
        <tr>
          <td height="26">
		  <?php 
		 $sql2 = mysql_query("SELECT * FROM general WHERE regi_no='$rg'");
		 $row2 = mysql_fetch_array($sql2);
		 ?>
         <font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>WEIGHT</strong></font></td>
          <td><?php echo $row2[weight]; ?></td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HIGHT</font></strong></font></td>
<td width="354"><?php echo $row2[height]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">CYANOSIS</font></strong></font></td>
<td width="354"><?php echo $row2[cyanosis]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">KOLINYC</font></strong></font></td>
<td width="354"><?php echo $row2[koli]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">Leuchonychin</font></strong></font></td>
<td width="354"><?php echo $row2[leuc]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">Lyumph nodes</font></strong></font></td>
<td width="354"><?php echo $row2[lyumph]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">Pulse</font></strong></font></td>
<td width="354"><?php echo $row2[pulse]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">Bp</font></strong></font></td>
<td width="354"><?php echo $row2[bp]; ?>&nbsp;</td>
        </tr>
         <tr>
        <td  bgcolor="#66FF33"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font><strong>H/O PRESENT ILLNESS</strong></p></td></tr>
        <tr>
          <td height="26">
		  <?php 
		 $sql3 = mysql_query("SELECT * FROM preh WHERE regi_no='$rg'");
		 $row3 = mysql_fetch_array($sql3);
		 ?>
         <font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>CAD</strong></font></td>
          <td><?php echo $row3[cad]; ?></td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">CAUGH</font></strong></font></td>
<td width="354"><?php echo $row3[caugh]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">CHEST BURNING</font></strong></font></td>
<td width="354"><?php echo $row3[ch_bu]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">FEVER</font></strong></font></td>
<td width="354"><?php echo $row3[fev]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">GASTRO INTESTINAL DISORDAR</font></strong></font></td>
<td width="354"><?php echo $row3[gas]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HYPERTENSION</font></strong></font></td>
<td width="354"><?php echo $row3[hyp]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">KIDNEY PROBLAM</font></strong></font></td>
<td width="354"><?php echo $row3[kid]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NAUSEA</font></strong></font></td>
<td width="354"><?php echo $row3[nau]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">PAIN</font></strong></font></td>
<td width="354"><?php echo $row3[pain]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">PSYCHIATIC DISORDER</font></strong></font></td>
<td width="354"><?php echo $row3[psy]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">RUNNING NOSE</font></strong></font></td>
<td width="354"><?php echo $row3[run]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">SKIN DISEASE</font></strong></font></td>
<td width="354"><?php echo $row3[skin]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">TOOTHACE</font></strong></font></td>
<td width="354"><?php echo $row3[tooth]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">VOMITIG</font></strong></font></td>
<td width="354"><?php echo $row3[vom]; ?>&nbsp;</td>
        </tr>
         <tr>
        <td  bgcolor="#66FF33"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font><strong>H/O PAST ILLNESS</strong></p></td></tr>
        <tr>
          <td height="26">
		  <?php 
		 $sql4 = mysql_query("SELECT * FROM pah WHERE regi_no='$rg'");
		 $row4 = mysql_fetch_array($sql4);
		 ?>
         <font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>CAD</strong></font></td>
          <td><?php echo $row4[cad]; ?></td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">CAUGH</font></strong></font></td>
<td width="354"><?php echo $row4[caugh]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">CHEST BURNING</font></strong></font></td>
<td width="354"><?php echo $row4[ch_bu]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">FEVER</font></strong></font></td>
<td width="354"><?php echo $row4[fev]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">GASTRO INTESTINAL DISORDAR</font></strong></font></td>
<td width="354"><?php echo $row4[gas]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HYPERTENSION</font></strong></font></td>
<td width="354"><?php echo $row4[hyp]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">KIDNEY PROBLAM</font></strong></font></td>
<td width="354"><?php echo $row4[kid]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NAUSEA</font></strong></font></td>
<td width="354"><?php echo $row4[nau]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">PAIN</font></strong></font></td>
<td width="354"><?php echo $row4[pain]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">PSYCHIATIC DISORDER</font></strong></font></td>
<td width="354"><?php echo $row4[psy]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">RUNNING NOSE</font></strong></font></td>
<td width="354"><?php echo $row4[run]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">SKIN DISEASE</font></strong></font></td>
<td width="354"><?php echo $row4[skin]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">TOOTHACE</font></strong></font></td>
<td width="354"><?php echo $row4[tooth]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">VOMITIG</font></strong></font></td><td width="354"><?php echo $row4[vom]; ?>&nbsp;</td>
        </tr>
<tr>
        <td  bgcolor="#66FF33"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font><strong>DRUG HISTORY</strong></p></td></tr>
        <tr>
          <td height="26">
		  <?php 
		 $sql5 = mysql_query("SELECT * FROM drug WHERE regi_no='$rg'");
		 $row5 = mysql_fetch_array($sql5);
		 ?>
         <font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>ANTI ACIDIC DRUG</strong></font></td>
          <td><?php echo $row5[anti_acid]; ?></td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI ASTHMATIC DRUG</font></strong></font></td>
<td width="354"><?php echo $row5[anti_asma]; ?>&nbsp;</td>
        </tr>
<tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTIBIOTIC</font></strong></font></td>
<td width="354"><?php echo $row5[anti_bio]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI DIABETIC DRUG</font></strong></font></td>
<td width="354"><?php echo $row5[anti_dia]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI HYPERTENSIVE DRUG</font></strong></font></td>
<td width="354"><?php echo $row5[anti_hyp]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI PSYCHOTRIC DRUG</font></strong></font></td>
<td width="354"><?php echo $row5[anti_psy]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NSAID</font></strong></font></td>
<td width="354"><?php echo $row5[nsaid]; ?>&nbsp;</td>
        </tr>
         <tr>
        <td  bgcolor="#66FF33"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font><strong>FAMILY HISTORY</strong></p></td></tr>
        <tr>
          <td height="26">
		  <?php 
		 $sql6 = mysql_query("SELECT * FROM family WHERE regi_no='$rg'");
		 $row6 = mysql_fetch_array($sql6);
		 ?>
         <font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>FATHER</strong></font></td>
          <td><?php echo $row6[father]; ?></td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">MOTHER</font></strong></font></td>
<td width="354"><?php echo $row6[mother]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">BROTHER</font></strong></font></td>
<td width="354"><?php echo $row6[brother]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">SISTER</font></strong></font></td>
<td width="354"><?php echo $row6[sister]; ?>&nbsp;</td>
        </tr>
         <tr>
        <td  bgcolor="#66FF33"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font><strong>LABORATORY INVESTIGATION</strong></p></td></tr>
        <tr>
          <td height="26">
		  <?php 
		 $sql7 = mysql_query("SELECT * FROM lab_inves WHERE regi_no='$rg'");
		 $row7 = mysql_fetch_array($sql7);
		 ?>
         <font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>SEROLOGICAL</strong></font></td>
          <td><?php echo $row7[sero]; ?></td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HAEMATOLOGICAL</font></strong></font></td>
<td width="354"><?php echo $row7[hama]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">BIOCHEMICAL</font></strong></font></td>
<td width="354"><?php echo $row7[bio]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">URINE TEST</font></strong></font></td>
<td width="354"><?php echo $row7[urin]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">STOOL</font></strong></font></td>
<td width="354"><?php echo $row7[stool]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HORMONE TEST</font></strong></font></td>
<td width="354"><?php echo $row7[hor]; ?>&nbsp;</td>
        </tr>
         <tr>
        <td  bgcolor="#66FF33"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font><strong>DIAGNOSIS</strong></p></td></tr>
        <tr>
          <td height="26">
		  <?php 
		 $sql8 = mysql_query("SELECT * FROM diag WHERE regi_no='$rg'");
		 $row8 = mysql_fetch_array($sql8);
		 ?>
         <font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>COLD</strong></font></td>
          <td><?php echo $row8[cold]; ?></td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">DIABETIS MELLITUS</font></strong></font></td>
<td width="354"><?php echo $row8[dm]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">EYE DISEASEPAIN</font></strong></font></td>
<td width="354"><?php echo $row8[eye]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">FEVER</font></strong></font></td>
<td width="354"><?php echo $row8[fev]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">GASTRO INTESTINAL DISORDARSKIN DISEASE</font></strong></font></td>
<td width="354"><?php echo $row8[gas]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HEPATOBILLIAG  DISORDAR</font></strong></font></td>
<td width="354"><?php echo $row8[hep]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">HTN</font></strong></font></td>
<td width="354"><?php echo $row8[htn]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">OSTREOPOROSIS OF SPINE</font></strong></font></td>
<td width="354"><?php echo $row8[ost]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">PAIN</font></strong></font></td>
<td width="354"><?php echo $row8[pain]; ?>&nbsp;</td>
        </tr><tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">SKIN DISEASE</font></strong></font></td>
<td width="354"><?php echo $row8[skin]; ?>&nbsp;</td>
        </tr>
         <tr>
        <td  bgcolor="#66FF33"><p align="center"><font face="Verdana, Arial, Helvetica, sans-serif"
 size="-1">
</font><strong>TREATMENT GIVEN AND DOSE</strong></p></td></tr>
        <tr>
          <td height="26">
		  <?php 
		 $sql9 = mysql_query("SELECT * FROM treat WHERE regi_no='$rg'");
		 $row9 = mysql_fetch_array($sql9);
		 ?>
         <font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>ANTI ACIDIC DRUG</strong></font></td>
          <td><?php echo $row9[anti_acid]; ?></td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI ASTHMATIC DRUG</font></strong></font></td>
<td width="354"><?php echo $row9[anti_asma]; ?>&nbsp;</td>
        </tr>
         <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTIBIOTIC</font></strong></font></td>
<td width="354"><?php echo $row9[anti_bio]; ?>&nbsp;</td>
        </tr>
          <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI DIABETIC DRUG</font></strong></font></td>
<td width="354"><?php echo $row9[anti_dia]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI FUNGAL DRUG</font></strong></font></td>
<td width="354"><?php echo $row9[anti_fun]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI HISTAMINE</font></strong></font></td>
<td width="354"><?php echo $row9[anti_his]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI HYPERTENSIVE DRUG</font></strong></font></td>
<td width="354"><?php echo $row9[anti_hyp]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI PSYCHOTRIC DRUG</font></strong></font></td>
<td width="354"><?php echo $row9[anti_psy]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">ANTI PYRETIC DRUG</font></strong></font></td>
<td width="354"><?php echo $row9[anti_pyr]; ?>&nbsp;</td>
        </tr> <tr>
          <td width="196" height="29"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NSAID</font></strong></font></td>
<td width="354"><?php echo $row9[nsaid]; ?>&nbsp;</td>
        </tr>
         <tr>
    <td>&nbsp;</td>
    <td><input type="submit"  value=" Print " onclick="printfun()" />  <p> <a href="../index.php"><font size="+2" color="#66CC66">Home </font> </a> </p></td>
    </tr>
      </table>
      <?
}
else{
	echo "Please insert your regi number";
}
}
?>          </td>
    
   
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