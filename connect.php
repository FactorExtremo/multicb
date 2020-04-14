<?php

$clickbankid='CLICKBANKID'; //// replace CLICKBANKID with your real Clickbank Id

$hostname='localhost'; //// specify host, usualy 'localhost'
$user='your-dbuser'; //// specify databas username
$pass='db-password'; //// specify database password
$dbase='your-dbname'; //// specify database name


// DO NOT EDIT BELOW THIS

$connection = mysql_connect("$hostname" , "$user" , "$pass") 
or die ("Can't connect to MySQL");
$db = mysql_select_db($dbase , $connection) or die ("Can't select database.");
?>