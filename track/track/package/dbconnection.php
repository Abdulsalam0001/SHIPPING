<?php
define('DB_SERVER','localhost');
define('DB_USER', 'instasto_loginsystem');
define('DB_PASS' ,'abdulsalam@12');
define('DB_NAME', 'instasto_loginsystem');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
?>