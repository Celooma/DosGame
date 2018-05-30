<?php
	session_start();

	require_once('classes/Game.php');
		
?>

<html>

	<head>
		<title> MATHS is FUN </title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
			img {
				width: 70%;
				height: 30%;
			}
			
			.top-buffer { 
				margin-top:20px; 
				text-align: center;
			}
			
			input, button {
				width: 50%;
				height: 10%;
			}
			h1 {
				text-align: center;
			}
			

		</style>
	</head>
	
	<body>
		<div class="container">
		
<?php

if(!isset($_SESSION['operator']))
{
	$_SESSION['operator'] = $_GET['operator'];
}

if(!isset($_SESSION['end']))
{
	$_SESSION['end'] = '';
}

if(!isset($_SESSION['correct']))
{
	$_SESSION['correct'] = 0;
}

if($_SESSION['operator'])
{
	if($_SESSION['operator'] === "plus")
	{
		plus();
	}
	else if($_SESSION['operator'] === "minus")
	{
		minus();
	}
	else if($_SESSION['operator'] === "multiplication")
	{
		multiplication();
	}
	else if($_SESSION['operator'] === "division")
	{
		division();
	}
}

function plus()
{
	
		if(isset($_GET['answer']))
		{
			
			if((int)$_GET['answer'] == (int)$_SESSION['answer2'])
			{
				$_SESSION['correct'] += 1;
			}
			
			$_SESSION['end'] += 1;
		}	
		
		$number = rand(1, 10);
		$number2 = rand(1, 10);
			
		$_SESSION['answer2'] = $number + $number2;
		
	if((int)$_SESSION['end'] < 5)
	{	
	?>
	<form method="GET" action="start_game.php"> 
		<div class="row top-buffer">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8">
				<h1> Question <?php echo $_SESSION['end'] + 1; ?></h1>
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-4">
				<img src="images/numbers/<?php echo $number; ?>.png"></img>
			</div>
			<div class="col-sm-4">
				<img src="images/operators/plus.png"></img>
			</div>
			<div class="col-sm-4">
				<img src="images/numbers/<?php echo $number2; ?>.png"></img>
			</div>
		</div>
		<div class="row top-buffer align">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<input name="answer"></input>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
		<div class="row top-buffer align">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<button type="submit">SUBMIT</button>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
	</form>
<?php
	}
	else
	{
		header("Location: score_results.php");
		exit;
	}
}

function minus()
{
	
		if(isset($_GET['answer']))
		{
			
			if((int)$_GET['answer'] == (int)$_SESSION['answer2'])
			{
				$_SESSION['correct'] += 1;
			}
			
			$_SESSION['end'] += 1;
		}	
		
		$number = rand(1, 10);
		$number2 = rand(1, 10);
			
		if($number < $number2)
		{
			$tempNumber = $number;
			$number = $number2;
			$number2 = $tempNumber;
		}	
		
		$_SESSION['answer2'] = $number - $number2;
		
	if((int)$_SESSION['end'] < 5)
	{	
	?>
	<form method="GET" action="start_game.php"> 
		<div class="row top-buffer">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8">
				<h1> Question <?php echo $_SESSION['end'] + 1; ?></h1>
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-4">
				<img src="images/numbers/<?php echo $number; ?>.png"></img>
			</div>
			<div class="col-sm-4">
				<img src="images/operators/minus.png"></img>
			</div>
			<div class="col-sm-4">
				<img src="images/numbers/<?php echo $number2; ?>.png"></img>
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8">
				<input name="answer"></input>
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8">
				<button type="submit">SUBMIT</button>
			</div>
			<div class="col-sm-2">
			</div>
		</div>
	</form>
<?php
	}
	else
	{
		header("Location: score_results.php");
		exit;
	}
}

function multiplication()
{
	
		if(isset($_GET['answer']))
		{
			
			if((int)$_GET['answer'] == (int)$_SESSION['answer2'])
			{
				$_SESSION['correct'] += 1;
			}
			
			$_SESSION['end'] += 1;
		}	
		
		$number = rand(1, 10);
		$number2 = rand(1, 10);
		
		$_SESSION['answer2'] = $number * $number2;
		
	if((int)$_SESSION['end'] < 5)
	{	
	?>
	<form method="GET" action="start_game.php"> 
		<div class="row top-buffer">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8">
				<h1> Question <?php echo $_SESSION['end'] + 1; ?></h1>
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-4">
				<img src="images/numbers/<?php echo $number; ?>.png"></img>
			</div>
			<div class="col-sm-4">
				<img src="images/operators/multiplication.png"></img>
			</div>
			<div class="col-sm-4">
				<img src="images/numbers/<?php echo $number2; ?>.png"></img>
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<input name="answer"></input>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<button type="submit">SUBMIT</button>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
	</form>
<?php
	}
	else
	{
		header("Location: score_results.php");
		exit;
	}
}

function division()
{
	
		if(isset($_GET['answer']))
		{
			
			if((int)$_GET['answer'] == (int)$_SESSION['answer2'])
			{
				$_SESSION['correct'] += 1;
			}
			
			$_SESSION['end'] += 1;
		}	
		
		$number = rand(1, 10);
		$number2 = rand(1, 10);
			
		while($number % $number2 > 0)
		{
			$number = rand(1, 10);
			$number2 = rand(1, 10);
		}
		
		if($number < $number2)
		{
			$tempNumber = $number;
			$number = $number2;
			$number2 = $tempNumber;
		}
		
		$_SESSION['answer2'] = $number / $number2;
		
	if((int)$_SESSION['end'] < 5)
	{	
	?>
	<form method="GET" action="start_game.php"> 
		<div class="row top-buffer">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8">
				<h1> Question <?php echo $_SESSION['end'] + 1; ?></h1>
			</div>
			<div class="col-sm-2">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-4">
				<img src="images/numbers/<?php echo $number; ?>.png"></img>
			</div>
			<div class="col-sm-4">
				<img src="images/operators/division.png"></img>
			</div>
			<div class="col-sm-4">
				<img src="images/numbers/<?php echo $number2; ?>.png"></img>
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<input name="answer"></input>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
		<div class="row top-buffer">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<button type="submit">SUBMIT</button>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
	</form>
<?php
	}
	else
	{
		header("Location: score_results.php");
		exit;
	}
}

?>
	</div>
	</body>
</html>