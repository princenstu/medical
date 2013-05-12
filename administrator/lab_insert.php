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

$s_1=$_POST['s_wt'];
$s_2=$_POST['s_at'];
$s_3=$_POST['s_hbs'];
$s_4=$_POST['s_tpha'];
$s_5=$_POST['s_blgr'];
$s_6=$_POST['s_hiv'];
$s_7=$_POST['s_de'];
$s_8=$_POST['s_others'];
$s_total=$s_1." ".$s_2." ".$s_3." ".$s_4." ".$s_5." ".$s_6." ".$s_7." ".$s_8;

$h_1=$_POST['h_dc'];
$h_2=$_POST['h_esr'];
$h_3=$_POST['h_hb'];
$h_4=$_POST['h_plat'];
$h_5=$_POST['h_tc'];
$h_6=$_POST['h_tcrbc'];
$h_total=$h_1." ".$h_2." ".$h_3." ".$h_4." ".$h_5." ".$h_6;

$b_1=$_POST['b_bsr'];
$b_2=$_POST['b_bsf'];
$b_3=$_POST['b_bu'];
$b_4=$_POST['b_bili'];
$b_5=$_POST['b_sgot'];
$b_6=$_POST['b_sgpt'];
$b_7=$_POST['b_scr'];
$b_8=$_POST['b_ua'];
$b_total=$b_1." ".$b_2." ".$b_3." ".$b_4." ".$b_5." ".$b_6." ".$b_7." ".$b_8;

$u_1=$_POST['u_re'];
$u_2=$_POST['u_cs'];
$u_3=$_POST['u_su'];
$u_4=$_POST['u_pg'];
$u_total=$u_1." ".$u_2." ".$u_3." ".$u_4;

$so_1=$_POST['so_re'];
$so_2=$_POST['so_cs'];
$so_total=$so_1." ".$so_2;

$ho_1=$_POST['ho_t3'];
$ho_2=$_POST['ho_t4'];
$ho_3=$_POST['ho_tsh'];
$ho_total=$ho_1." ".$ho_2." ".$ho_3;

include("db.php");

$sql=mysql_query("insert into lab_inves (sero,hama,bio,urin,stool,hor,regi_no) VALUES ('$s_total','$h_total','$b_total','$u_total','$so_total','$ho_total','$regi')");
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