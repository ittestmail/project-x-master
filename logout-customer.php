<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
session_regenerate_id(TRUE);
// Redirect to login page
header("location: index.php");



?>