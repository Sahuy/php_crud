<?php
$databaseHost = 'localhost'; //or localhost
$databaseName = 'test';      // your db_name
$databaseUsername = 'root';  // root by default for localhost 
$databasePassword = '';      // by defualt empty for localhost

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if ($mysqli->connect_error) 
{
        die("Connection failed: " . $msqli->connect_error);
}
    /*else{
    	echo "success";
    }*/
?>