<?php

	require_once('classes/dbFunctions.php');


?>

<html>

	<head>
		<title> Score Board </title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
			.top-buffer { 
				margin-top:20px;
				text-align: center;				
			}
			td {
				padding: 50px;
			}
		</style>
	</head>
	
	<body>
		<div class="container">
		<div class="row top-buffer">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<h1> Score Board </h1>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<table class="table">
					<?php
						selectScore();
					?>
				</table>
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
				<form action="index.php" method="GET">
					<button type="submit" class="btn btn-default">Back</button>
				</form>
			</div>
		</div>
		</div>
	</body>

</html>
