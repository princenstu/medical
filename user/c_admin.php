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
            <td width="37%" class="style2"><div align="center"><a href="../../../student_info/user/user/login.php">Login&nbsp;</a></div></td>
            <td width="31%"><div align="center"><a href="../../../student_info/user/user/u_registration.php">Registration</a></div></td>
          </tr>
    </table></td>
  </tr>
  <tr>
    <td width="23%" height="487"valign="top" bgcolor="#D0F9D1" ><table width="100%"  height="80%" border="0" >
      <tr>
        <td height="88" class="style6"><div align="center"><a href="../../../student_info/s_search/searchmain1.php">Student Information</a></div></td>
      </tr>
      <tr>
        <td class="style6"><div align="center"><a href="../../../student_info/course/course1.php">Course Informtion</a></div></td>
      </tr>
      <tr>
        <td class="style6"><div align="center"><a href="../../../student_info/result/result1.php">Result</a></div></td>
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
    <td width="61%"><table width="100%" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><strong>Administrator Alrady Has an Account, if You want to creat a new account then <span class="style2">DELETE</span> Previous </strong></div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>

<h3 align="center" style="background-color:#66FFFF">Enter Your Previous Password For Delete Your Previous Account</h3>
<form action="delete.php" method="post">
<table width="36%" border="0" align="center">
  <tr>
    <td width="40%">Password</td>
    <td width="60%"><input type="password" name="Password" />&nbsp;</td>
  </tr>
  <tr>
    <td><input type="submit" value="DELETE" />&nbsp;</td>
    <td><input type="reset"/>&nbsp;</td>
  </tr>
</table>
</form>
</td>
    <td width="16%"></td>
  </tr>
  
  <tr>
    <td height="23" colspan="3">&nbsp;</td>
  </tr>
</table>


</body>
</html>
