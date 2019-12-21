<?php
session_start();
 
session_unset(); 
$_SESSION['login_user'] = null;
 
session_destroy();
header("Location:home.php");
exit();
?>