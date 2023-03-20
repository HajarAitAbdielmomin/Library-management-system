<?php
session_start();
$_SESSION=array();
header("location:LoginForm.php");
exit();

?>