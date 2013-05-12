<?php
session_start();

if ($_SESSION['Name']==Null){
session_unset();
session_destroy();
echo '<meta http-equiv=refresh content=0;url=http://localhost/student_info/user/login.php>';
}
else{
echo "<br> User Type : ";
echo $_SESSION['Name'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Information</title>
<style type="text/css">
<!--
.style2 {color: #0066CC}
.style3 {font-style: italic; border-color: #CCFF33; font-size: 24px;}
.style6 {color: #339933; font-size: 18px;}
.style7 {
	font-size: 16px;
	color: #FF6600;
}
.style8 {font-size: 18px}
-->
</style>
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
</head>
<body>
<table width="84%" border="1" align="center" height="100%" >
  <tr bgcolor="#D5EDB3">
    <td height="67" colspan="3"><div align="center" class="style2"><span class="style3">Noakhali Science And Technology University</span>&nbsp;</div></td>
    
  </tr>
  <tr>
  		<td colspan="3"><table width="100%" border="0">
          <tr bgcolor="#99CC66">
            <td width="32%"><div align="center"><script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script></div></td>
            <td width="37%" class="style2"><div align="center"><a href="../index.php">Home</a></div></td>
            <td width="31%"><div align="center"><a href="../user/signout.php">Sinout</a></div></td>
          </tr>
    </table></td>
  </tr>
  <tr>
    <td width="23%" height="487"valign="top"  ><table width="100%"  height="80%" border="0" >
      <tr>
        <td height="88" class="style6"><div align="center"><a href="../s_search/searchmain1.php">Student Information</a></div></td>
      </tr>
      <tr>
        <td class="style6"><div align="center"><a href="../course/course1.php">Course Informtion</a></div></td>
      </tr>
      <tr>
        <td class="style6"><div align="center"><a href="../result/result1.php">Result</a></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="54%"><p>&nbsp;</p>
<p align="center" style="font-weight: bold; font-size: 24px"> 1 : <a href="course_enty.php">Course Entry</a></p>
<p align="center" style="font-weight: bold; font-size: 24px">2: <a href="registration.php">Student Entry</a></p>
<p align="center" style="font-weight: bold; font-size: 24px">3: <a href="../result/result_insert1.php">Result Entry</a></p>
<p><a href="http://localhost/student_info/user/signout.php">Signout</a></p></td>
    <td width="23%"></td>
  </tr>
  
  <tr>
    <td height="23" colspan="3">&nbsp;</td>
  </tr>
</table>


</body>
</html>
