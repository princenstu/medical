<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['box01']))
{
$box01 = 1;
}
else
{
$box01=0;
}
if(isset($_POST['box02']))
{
$box02=1;
}
else
{
$box02=0;
}

$insert=mysql_query("
INSERT INTO tablename('field01', 'field02')
VALUES ('" . $box01 . "', '" . $box02 . "'")
?>

</body>
</html>