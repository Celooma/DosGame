<?php
	session_start();
	
	require_once('classes/Score.php');
	require_once('classes/Game.php');
	require_once('classes/User.php');
	require_once('classes/dbFunctions.php');
	
	$user = unserialize($_SESSION['User']);
	$game = unserialize($_SESSION['Game']);
	
	$score = new Score(0, $_SESSION['correct'], $game->getgameId(), $user->getUserid());
	
	insertScore($score->getpoints(), $score->getgameId(), $score->getUserid());
	
?>


<html>

	<head>
		<title> Score </title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
			.top-buffer { 
				margin-top:20px; 
				text-align: center;
			}
		</style>
	</head>
	
	<body>
		<div class="container">
		<div class="row top-buffer">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<h1> Your score: </h1>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8">
				<h2> You got <img src="images/score/<?php echo $_SESSION['correct']; ?>.png"></img> out of <img src="images/score/5.png"></img> correct!!! </h2>
			</div>
				<div class="col-sm-2">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<h2> Your User ID is <?php echo $score->getUserid() ?> </h2>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-2">
				<form action="score_board.php" method="GET">
					<button type="submit" class="btn btn-default">View Score Board</button>
				</form>
			</div>
			<div class="col-sm-2">
				<form action="index.php" method="GET">
					<button type="submit" class="btn btn-default">Back</button>
				</form>
			</div>
		</div>
		</div>
	</body>

</html>