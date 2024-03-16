<?php
include('config.php');
include('CSS/styles.css');
?>


<!DOCTYPE html>
<html>
<head>

	<title>Link CSS to HTML</title>

</head>
<body>

	<form action="add.php" method="post">
		<table width="25%" border="0">
			<tbody><tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</tbody></table>

	</form>


	<form action="" method="post">
		<table width="50%" height="15%" border="2px">

			<thead bgcolor="yellow">
				<th>Name</th>
				<th>Age</th>
				<th>Email</th>
				<th>Update</th>
				<th>Remove</th>
			</thead>
			<tbody>

				<?php
				$sql = "SELECT * FROM users ORDER BY id ASC"; 

				$result = $mysqli->query($sql); //$mysqli -> query(query, resultmode) Perform query against a database:

				if ($result->num_rows > 0) {
  // output data of each row
					while($row = $result->fetch_assoc()) // Associative array //Fetch a result row as an associative array
					{
						echo "<tr><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["email"] . "</td>
						<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a></td>
						<td><a href='delete.php?id=" . $row["id"] . "' onClick='return confirm(\"Are you sure you want to delete?\")'>Delete</a></td>
</tr>"; 
					}
				} else {
					echo "0 results";
				}       
				?>

			</tbody>
		</table>
	</form>

</body>
</html>




