<?
session_unset();
unset($_SESSION['Name']);
session_register("$name");
session_destroy();
Header("Location: ../index.php");
exit;
?>