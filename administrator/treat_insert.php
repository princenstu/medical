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
<?php
$regi=$_POST['regi_no'];

$ac_1=$_POST['ac_an'];
$ac_2=$_POST['ac_fe'];
$ac_3=$_POST['ac_om'];
$ac_4=$_POST['ac_rn'];
$ac_5=$_POST['ac_nu'];
$ac_6=$_POST['ac_dose'];
$ac_total=$ac_1." ".$ac_2." ".$ac_3." ".$ac_4." ".$ac_5." ".$ac_6;

$as_1=$_POST['as_am'];
$as_2=$_POST['as_de'];
$as_3=$_POST['as_le'];
$as_4=$_POST['as_sa'];
$as_5=$_POST['as_st'];
$as_6=$_POST['as_th'];
$as_7=$_POST['as_nu'];
$as_8=$_POST['as_dose'];
$as_total=$as_1." ".$as_2." ".$as_3." ".$as_4." ".$as_5." ".$as_6." ".$as_7." ".$as_8;

$bi_1=$_POST['bi_am'];
$bi_2=$_POST['bi_az'];
$bi_3=$_POST['bi_ce'];
$bi_4=$_POST['bi_ci'];
$bi_5=$_POST['bi_le'];
$bi_6=$_POST['bi_nu'];
$bi_7=$_POST['bi_dose'];
$bi_total=$bi_1." ".$bi_2." ".$bi_3." ".$bi_4." ".$bi_5." ".$bi_6." ".$bi_7;

$di_1=$_POST['di_glm'];
$di_2=$_POST['di_glr'];
$di_3=$_POST['di_in'];
$di_4=$_POST['di_me'];
$di_5=$_POST['di_nu'];
$di_6=$_POST['di_dose'];
$di_total=$di_1." ".$di_2." ".$di_3." ".$di_4." ".$di_5." ".$di_6;

$fu_1=$_POST['fu_be'];
$fu_2=$_POST['fu_cl'];
$fu_3=$_POST['fu_fl'];
$fu_4=$_POST['fu_ke'];
$fu_5=$_POST['fu_pr'];
$fu_6=$_POST['fu_tr'];
$fu_7=$_POST['fu_nu'];
$fu_8=$_POST['fu_dose'];
$fu_total=$fu_1." ".$fu_2." ".$fu_3." ".$fu_4." ".$fu_5." ".$fu_6." ".$fu_7." ".$fu_8;

$hi_1=$_POST['hi_ch'];
$hi_2=$_POST['hi_de'];
$hi_3=$_POST['hi_hi'];
$hi_4=$_POST['hi_lo'];
$hi_5=$_POST['hi_tnu'];
$hi_6=$_POST['hi_dose'];
$hi_total=$hi_1." ".$hi_2." ".$hi_3." ".$hi_4." ".$hi_5." ".$hi_6;

$hy_1=$_POST['hy_am'];
$hy_2=$_POST['hy_at'];
$hy_3=$_POST['hy_ni'];
$hy_4=$_POST['hy_pr'];
$hy_5=$_POST['hy_nu'];
$hy_6=$_POST['hy_dose'];
$hy_total=$hy_1." ".$hy_2." ".$hy_3." ".$hy_4." ".$hy_5." ".$hy_6;

$ps_1=$_POST['ps_am'];
$ps_2=$_POST['ps_br'];
$ps_3=$_POST['ps_cl'];
$ps_4=$_POST['ps_fl'];
$ps_5=$_POST['ps_me'];
$ps_6=$_POST['ps_no'];
$ps_7=$_POST['ps_nu'];
$ps_8=$_POST['ps_dose'];
$ps_total=$ps_1." ".$ps_2." ".$ps_3." ".$ps_4." ".$ps_5." ".$ps_6." ".$ps_7." ".$ps_8;

$py_1=$_POST['py_ac'];
$py_2=$_POST['py_acp'];
$py_3=$_POST['py_na'];
$py_4=$_POST['py_nae'];
$py_5=$_POST['py_pa'];
$py_6=$_POST['py_nu'];
$py_7=$_POST['py_dose'];
$py_total=$py_1." ".$py_2." ".$py_3." ".$py_4." ".$py_5." ".$py_6." ".$py_7;

$ns_1=$_POST['ns_ac'];
$ns_2=$_POST['ns_di'];
$ns_3=$_POST['ns_ke'];
$ns_4=$_POST['ns_na'];
$ns_5=$_POST['ns_pa'];
$ns_6=$_POST['ns_nu'];
$ns_7=$_POST['ns_dose'];
$ns_total=$ns_1." ".$ns_2." ".$ns_3." ".$ns_4." ".$ns_5." ".$ns_6." ".$ns_7;

include("db.php");
$sql=mysql_query("insert into treat (regi_no,anti_acid,anti_asma,nsaid,anti_his,anti_hyp,anti_bio,anti_fun,anti_dia,anti_psy,anti_pyr) VALUES ('$regi','$ac_total','$as_total','$ns_total','$hi_total','$hy_total','$bi_total','$fu_total','$di_total','$ps_total','$py_total')");
if(!$sql)
{
	echo "Error in database connection";
}
else
{
	print "Insertion Successfull";
}


?>
<?
}
?>