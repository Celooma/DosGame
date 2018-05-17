
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gameDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql4 = "DROP TABLE User";
	$sql5 = "DROP TABLE Game";
	$sql6 = "DROP TABLE Score";

	if ($conn->query($sql4) === TRUE) {
	    echo "<br> Table User Dropped successfully";
	} else {
	    echo "<br> Error Dropping table User: " . $conn->error;
	}

	if ($conn->query($sql5) === TRUE) {
	    echo "<br> Table Game created successfully";
	} else {
	    echo "<br> Error Dropping table Game: " . $conn->error;
	}

	if ($conn->query($sql6) === TRUE) {
	    echo " <br> Table User Score successfully";
	} else {
	    echo " <br> Error Dropping table Score: " . $conn->error;
	}

	// sql to create table
	$sql = "CREATE TABLE User (
	userid INT(6)  AUTO_INCREMENT , 
	firstname VARCHAR(50) ,
	lastname VARCHAR(50) ,
	email VARCHAR(50),
	PRIMARY KEY ( userid )
	)";

	if ($conn->query($sql) === TRUE) {
	    echo "<br><br> <br> Table User created successfully";
	} else {
	    echo " <br> Error creating table User: " . $conn->error;
	}

	$sql2 = "CREATE TABLE Game (
	gameid INT(6)  AUTO_INCREMENT , 
	type VARCHAR(50) ,
	PRIMARY KEY ( gameid )
	)";

	if ($conn->query($sql2) === TRUE) {
	    echo "<br> Table Game created successfully";
	} else {
	    echo "<br> Error creating table Game: " . $conn->error;
	}

	$sql3 = "CREATE TABLE Score (
	scoreid INT(6)  AUTO_INCREMENT , 
	points VARCHAR(50) ,
	PRIMARY KEY ( scoreid ),
	gameid INT(6),
	userid INT(6),
	FOREIGN KEY (gameid) REFERENCES Game(gameid),
	FOREIGN KEY (userid) REFERENCES User(userid)
	)";

	if ($conn->query($sql3) === TRUE) {
	    echo "<br> Table Score created successfully";
	} else {
	    echo " <br> Error creating table Score: " . $conn->error;
	}
	$conn->close();

?>

