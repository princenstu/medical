
<?php
$cnn=mysql_connect("localhost","","");
if (!$cnn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db('medical');
?>


