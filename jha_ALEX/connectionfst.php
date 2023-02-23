<?php
//database configuration file
$dbHost     = "pw-sql-lab.mysql.database.azure.com";
$dbUsername = "pwadmin@pw-sql-lab";
$dbPassword = "h@rdhat-b0Rax-eas1ly-stony";
$dbName     = "fst_test_db";	
$port       = 3306;

//establish connection to sql database
$con=mysqli_init(); 

mysqli_ssl_set($con, NULL, NULL, NULL, NULL, NULL); 

mysqli_real_connect($con, $dbHost, $dbUsername, $dbPassword, $dbName, $port);

//mysqli connection
$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

?>