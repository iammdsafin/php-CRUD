<?php

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "todo";

	$conn = new mysqli($hostname, $username, $password, $dbname);


	if ($conn->connect_error)
	{
		die("Connection Unsuccessful: " . $conn->connect_error);
	}

	$sql = "INSERT INTO Users (firstname, lastname) VALUES ('MNO', 'GHI')";

	if ($conn->query($sql) === TRUE)
		{
  			echo "New record created successfully";
		}
		 else 
		{
  			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	echo "<hr><hr>";

	$sql = "SELECT id, firstname, lastname FROM Users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{

		while($row = $result->fetch_assoc()) 
		{
			echo "id: " . $row["id"] . " firstname: " . $row["firstname"] . " lastname: " . $row["lastname"];
			echo "<br>";
		}
	}
	else 
	{
		"No record(s) found";
	}

	$conn->close();
?>
