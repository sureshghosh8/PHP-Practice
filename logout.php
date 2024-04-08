<?php 

session_start(); 
session_unset();
session_destroy();

$_SESSION["Rollnumber"] = "11"; 
$_SESSION["Name"] = "Ajay"; 
echo " you have been logged out "

?> 
