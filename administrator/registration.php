
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	color: #00CC99;
}
.style4 {
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<form method="post" action="">
<table width="544" height="79" border="0" align="center" title="Studen Info">
<tr >
    	<td width="86" height="39" colspan="3"  bgcolor="#66CC99"></td>
    </tr>
    <td height="28" colspan="3"><table width="100%" border="0" align="center">
      <tr>
        <td width="29%"><div align="center"><a href="../index.php">Home</a></div></td>
        <td width="30%"><div align="center"><a href="course_enty.php">Course Entry</a></div></td>
        <td width="41%"><div align="center"></div></td>
      </tr>
    </table>
      
    </td>
</table>
<div align="center"><span class="style1"><a href="../s_search/searchmain1.php">SEARCH</a></span></div>
</form>
<p>
<form method="post" action="insert.php">
<table width="688" border="0" align="center">
  <tr>
    <td width="110" height="31"><span class="style4">Name</span></td>
    <td width="232"><input type="text" name="Name"/>      &nbsp;</td>
    <td width="111"></td>
    <td width="246">&nbsp;</td>
  </tr>
  <tr>
    <td height="41" class="style4">Department</td>
    <td><select name="Department" size="1" >
      <option value="">Select Department</option>
      <option value="CSTE">CSTE</option>
      <option value="PHAR">PHAR</option>
      <option value="ACCT">ACCT</option>
      <option value="FIMS">FIMS</option>
      </select>&nbsp;</td>
    <td class="style4">Session</td>
    <td><select name="Session" size="1" >
      <option value="">Select Session</option>
      <option value="2005-06">2005-06</option>
      <option value="2006-07">2006-07</option>
      <option value="2007-08">2007-08</option>
      <option value="2008-09">2008-09</option>
      </select>&nbsp;</td>
  </tr>
  <tr>
    <td height="41" class="style4">Student ID</td>
    <td><input type="text" name="SID" />&nbsp;</td>
    <td class="style4">Date of Birth</td>
    <td><table width="65%" border="0">
  <tr>
    <td width="25%"><?php $i = 0;print '<select name="Day">';while ($i <= 31) {print "<option>$i</option>\n";$i++;}?></td>
    <td width="22%"><?php $i = 0;print '<select name="Month">';while ($i <= 12) {print "<option>$i</option>\n";$i++;}?></td>
    <td width="53%"><?php $i =1980;print '<select name="Year">';while ($i <= 2100) {print "<option>$i</option>\n";$i++;}?></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td height="75" colspan="4"><table width="100%" border="1">
  <tr>
    <td colspan="6"><div align="center"><span class="style1">Pass </span>&nbsp;</div></td>
  </tr>
  <tr>
    <td width="13%" class="style4">Name of The Exam</td>
    <td width="13%" class="style4">Board / University</td>
    <td width="29%" class="style4">Name of the Institution</td>
    <td width="13%" class="style4">Year of the exam</td>
    <td width="22%" class="style4">Exam Roll</td>
    <td width="10%" class="style4">GPA</td>
  </tr>
  <tr>
    <td align="center"><select name="E1_Name" size="1" >
      <option value="">Select </option>
      <option value="SSC">SSC</option>
      <option value="Dakhil">Dakhil</option>
      <option value="O Lavel">O Lavel</option>
      <option value="Others">Others</option>
      </select></td>
    <td align="center"><select name="E1_Board" size="1" >
      <option value="">Select </option>
      <option value="Dhaka">Dhaka</option>
      <option value="Chittagong">Chittagong</option>
      <option value="Rajshahi">Rajshahi</option>
      <option value="Comilla">Comilla</option>
      <option value="Jassor">Jassor</option>
      <option value="Barisal">Barisal</option>
      <option value="Shylet">Shylet</option>
      </select></td>
    <td><textarea name="I1_Name" rows="1" cols="20"></textarea></td>
    <td><?php $i =2000;print '<select name="Year1">';while ($i <= 2100) {print "<option>$i</option>\n";$i++;}?></td>
    <td><input type="text" name="E1_Roll" /></td>
    <td><input type="text" name="GPA1"  size="10" /></td>
  </tr>
  <tr>
    <td align="center"><select name="E2_Name" size="1" >
      <option value="">Select </option>
      <option value="HSC">HSC</option>
      <option value="Alim">Alim</option>
      <option value="A Lavel">A Lavel</option>
      <option value="Others">Others</option>
      </select></td>
    <td align="center"><select name="E2_Board" size="1" >
      <option value="">Select </option>
      <option value="Dhaka">Dhaka</option>
      <option value="Chittagong">Chittagong</option>
      <option value="Rajshahi">Rajshahi</option>
      <option value="Comilla">Comilla</option>
      <option value="Jassor">Jassor</option>
      <option value="Barisal">Barisal</option>
      <option value="Shylet">Shylet</option>
      </select></td>
    <td><textarea name="I2_Name" rows="1" cols="20"></textarea></td>
    <td><?php $i =2000;print '<select name="Year2">';while ($i <= 2100) {print "<option>$i</option>\n";$i++;}?></td>
    <td><input type="text" name="E2_Roll"  /></td>
    <td><input type="text" name="GPA2"  size="10" /></td>
  </tr>
</table> </td>
  </tr>
  <tr>
    <td class="style4">Present Address</td>
    <td><textarea name="PresentA" rows="5" cols="30"></textarea></td>
    <td class="style4">Parmanent Address</td>
    <td><textarea name="ParmanentA" rows="5" cols="30"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style4">Email :</td>
    <td><input type="text" name="email"  /></td>
    <td><span class="style4">Contact No:</span></td>
    <td><input type="text" name="phone"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style4">Nationality</span></td>
    <td><input type="text" name="Nation"  /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="SAVE" />&nbsp;</td>
    <td><input type="reset" /></td>
  </tr>
</table>

</form>
</body>
</html>
