<?php
include_once("config.php"); // including the database connection file
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
$sql = "SELECT * FROM users WHERE id = ". $_GET['id']; 

				$result = $mysqli->query($sql); //$mysqli -> query(query, resultmode) Perform query against a database:

				if ($result->num_rows > 0) {
  // output data of each row
					while($row = $result->fetch_assoc()) // Associative array //Fetch a result row as an associative array
					{


						$name = $row['name'];
						$age = $row['age'];
						$email = $row['email'];

		}

	}
}

		if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age =  $_POST['age'];
	$email =$_POST['email'];	
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
	header("Location: index.php");
	
}
?>


<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br><br>
	
	<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>
		<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

