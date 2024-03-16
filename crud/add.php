<?php
include("config.php");

if(isset($_POST['Submit'])) {	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$email =$_POST['email'];

//$sql = "CREATE DATABASE test";

/*$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
age INT(30) NOT NULL,
email VARCHAR(50)
)";*/

$sql = "INSERT INTO users(name,age,email) VALUES ('$name','$age','$email')";


if (mysqli_query($mysqli, $sql)) //mysqli_query(connection, query, resultmode) Perform query against a database:
{
	echo "Data inserted successfully!";
	header("Location: http://localhost/CRUD/index.php"); 
} else {
	echo "Error: " . mysqli_error($mysqli);
} 

}
$mysqli->close();
}

?>

