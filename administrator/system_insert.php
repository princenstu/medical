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

$c_1=$_POST['c_nor'];
$c_2=$_POST['c_ab'];
$c_3=$_POST['c_remarks'];
$c_total=$c_1." ".$c_2." ".$c_3;

$d_1=$_POST['d_nor'];
$d_2=$_POST['d_ab'];
$d_3=$_POST['d_remarks'];
$d_total=$d_1." ".$d_2." ".$d_3;

$g_1=$_POST['g_nor'];
$g_2=$_POST['g_ab'];
$g_3=$_POST['g_remarks'];
$g_total=$g_1." ".$g_2." ".$g_3;

$h_1=$_POST['h_nor'];
$h_2=$_POST['h_ab'];
$h_3=$_POST['h_remarks'];
$h_total=$h_1." ".$h_2." ".$h_3;

$l_1=$_POST['l_nor'];
$l_2=$_POST['l_ab'];
$l_3=$_POST['l_remarks'];
$l_total=$l_1." ".$l_2." ".$l_3;

$m_1=$_POST['m_nor'];
$m_2=$_POST['m_ab'];
$m_3=$_POST['m_remarks'];
$m_total=$l_1." ".$l_2." ".$l_3;

$n_1=$_POST['n_nor'];
$n_2=$_POST['n_ab'];
$n_3=$_POST['n_remarks'];
$n_total=$n_1." ".$n_2." ".$n_3;

$v_1=$_POST['v_nor'];
$v_2=$_POST['n_ab'];
$v_3=$_POST['v_remarks'];
$v_total=$v_1." ".$v_2." ".$v_3;

include("db.php");
$sql=mysql_query("insert into system (regi_no,cardo_sys,dig_sys,gini_sys,vir_sys,nerv_sys,mus_sys,lyp_sys,hepa_sys) VALUES ('$regi','$c_total','$d_total','$g_total','$v_total','$n_total','$m_total','$l_total','$h_total')");
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
