<?php

$myusername = "admin"; // Replace admin with your desired username
$mypassword = "123456"; // Replace 123456 with your desired password







// DO NOT EDIT BELOW THIS

$areaname = "Protected Area";

if ($_SERVER["PHP_AUTH_USER"] == "" || $_SERVER["PHP_AUTH_PW"] == "" || $_SERVER["PHP_AUTH_USER"] != $myusername || $_SERVER["PHP_AUTH_PW"] != $mypassword) {
    header("HTTP/1.0 401 Unauthorized"); 
    header("WWW-Authenticate: Basic realm=\"$areaname\""); 
    echo "<h1>Authorization Required.</h1>"; 
    die();
}

?>