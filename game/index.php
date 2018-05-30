<?php
	session_start();
	$_SESSION = array();
?>

<html>

	<head>
		<title> MATHS is FUN </title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">
		<div class="row">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<h1> Please enter your details: </h1>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<form action="game_page.php" method="GET">
					<div class="form-group">
						<label>First Name:</label>
						<input type="text" class="form-control" name="firstname" required>
					</div>
					<div class="form-group">
						<label>Last Name:</label>
						<input type="text" class="form-control" name="lastname" required>
					</div>
					<div class="form-group">	
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="email" required>
					</div>
						<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<form action="score_board.php" method="GET">
					<button type="submit" class="btn btn-default">View Score Board</button>
				</form>
			</div>
		</div>
		</div>
	</body>

</html>
