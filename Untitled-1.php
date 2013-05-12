<form method="post" action="../Untitled-1.php">
input Tour regi number :<input type="text" name="rg" />
</form>
<?php
$r=$_POST['rg'];
include("../db.php");
$sql=mysql_query("SELECT* FROM pop WHERE regi_no='$rg'");
$row=mysql_num_rows($sql);
if($row>="1"){
?>
<form method="post" action="../insert.php" >
      <table width="560" height="520" border="0" align="center"s>
        <tr>
          <td width="143"><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">NAME</font></strong></font></td>
          <td width="401"><input type="text" name="name"/>&nbsp;</td>
        </tr>
        <tr>
          <td><font 
face="Verdana, Arial, Helvetica, sans-serif"><strong><font size="-1">AGE</font></strong></font></td>
          <td><input type="text" name="age" /></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>SEX</strong></font></td>
          <td ><select name="sex" size="1">
   			<option value="" >Select Type</option>
            <option value="M" >M</option>
            <option value="F" >F</option>
            </select></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>BATCH</strong></font></td>
         <td ><select name="batch" size="1">
   			<option value="" >Select Type</option>
            <option value="1st" >1st</option>
            <option value="2nd" >2nd</option>
            <option value="3rd" >3rd</option>
            <option value="4th" >4th</option>
            <option value="5th" >5th</option>
            <option value="6th" >6th</option>
            </select></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>SESSION</strong></font></td>
          <td ><select name="session" size="1">
   			<option value="" >Select Type</option>
            <option value="2005-06" >2005-06</option>
            <option value="2006-07" >2006-07</option>
            <option value="2007-08" >2007-08</option>
            <option value="2008-09" >2008-09</option>
            <option value="2009-10" >2009-10</option>
            <option value="2010-11" >2010-11</option>
            </select></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>PRESENT ADDRESS</strong></font></td>
          <td><input type="text" name="pr_add"/></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>PERMANAT ADDRESS</strong></font></td>
          <td><input type="text" name="pa_add"/></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>BLOOD GROUP</strong></font></td>
         <td ><select name="bl_gr" size="1">
   			<option value="" >Select Type</option>
            <option value="A+" >A+</option>
            <option value="B+" >B+</option>
            <option value="AB+" >AB+</option>
            <option value="O+" >O+</option>
            <option value="A-" >A-</option>
            <option value="B-" >B-</option>
            <option value="AB-" >AB-</option>
            <option value="O-" >O-</option>
            </select></td>
        </tr>
        <tr>
          <td><font face="Verdana, Arial, Helvetica, sans-serif" 
size="-1"><strong>REGI NO</strong></font></td>
          <td><input type="text" name="regi_no"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
         <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="SAVE"  />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="reset"  />&nbsp;</td>
    
   
     </tr>
      </table>
      </form>
      <?
}
else{
}
	  
	  ?>