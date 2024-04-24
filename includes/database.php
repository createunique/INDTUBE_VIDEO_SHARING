<?php

$hostName = "sql309.infinityfree.com";
$dbUser = "if0_36407788";
$dbPassword = "fGlwZhRQ2dI";
$dbName = "if0_36407788_videomanip";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) 
{
    die("Something went wrong;");
}

// Allowing only admins to register their account
$adminKey = password_hash("%6M07&G*9)@!(", PASSWORD_DEFAULT); 

?>
