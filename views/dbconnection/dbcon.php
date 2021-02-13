<?php
/*connect to mysql database */
$conString=mysqli_connect($host,$dbuser,$dbpassword) or die("Database connection error!");
mysqli_select_db($conString,$dbase) or die("Database connection error!");
?>