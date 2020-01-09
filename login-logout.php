<?php
session_start();

if(isset($_POST['logout']))
{
 unset($_SESSION['name']);
 unset($_SESSION['password']);
 echo "success";
 exit();
}
?>