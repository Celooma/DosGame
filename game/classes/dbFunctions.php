<?php

	function insertUser($firstname, $lastname, $email)
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "gamedb";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "INSERT INTO User (firstname, lastname, email)
				VALUES ('$firstname', '$lastname', '$email')";
				
		if ($conn->query($sql) === TRUE) 
		{
			$last_id = $conn->insert_id;
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();	

		return $last_id;
	}
	
	function insertScore($points, $gameid, $userid)
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "gamedb";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "INSERT INTO Score (points, gameid, userid)
				VALUES ('$points', '$gameid', '$userid')";
				
		if ($conn->query($sql) === FALSE) 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		} 

		$conn->close();	
	}
	
	function selectScore()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "gamedb";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (mysqli_connect_errno()) 
		{
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "SELECT s.points, u.firstname, u.lastname
				FROM Score s
				LEFT JOIN User u ON u.userid = s.userid 
				LEFT JOIN Game g ON g.gameid = s.gameid
				GROUP BY s.userid 
				ORDER BY s.points DESC limit 10";
				
		$result = mysqli_query($conn, $sql);
			if (!$result) {
			printf("Error: %s\n", mysqli_error($conn));
			exit();
		}
		
		echo "
		<tr>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Points</th>
		</tr>";

		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['firstname'] . "</td>";
			echo "<td>" . $row['lastname'] . "</td>";
			echo "<td>" . $row['points'] . "</td>";
			echo "</tr>";
		}

		$conn->close();	
		
	}
	
?>