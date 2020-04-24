<?php
include_once 'includes/newgame.inc.php';
session_start();
$uid = $_SESSION['uid'];
$best = $_SESSION['best'];
$total = $_SESSION['total'];
?>

<!DOCTYPE html>
<html>
<style>
	button{
		position: absolute;
		top: 40%;
		left: 40%;
		width: 300px;
		height: 50px;
		padding: 12px 20px;
		font-family: Impact, Charcoal, sans-serif;
		font-size: 20px;
	}
	form{
		text-align: center;
	}
	div{
		text-align: auto;
	}
	.wrapper{
		text-align: center;
	}
	.display{
		top: 25%;
		text-transform: center;
		position: absolute;
		left: 40%;
	}
	.uid{
		width: 300px;
		height: 30px;
		border: 1px solid black;
		margin-top: 10px;
		align-self: center;
	}
	
	.best{
		width: 300px;
		height: 30px;
		border: 1px solid black;
		margin-top: 10px;
		align-self: center;
	}
	.total{
		width: 300px;
		height: 30px;
		border: 1px solid black;
		margin-top: 10px;
		align-self: center;
	}
</style>
<head>
	<title>New Game</title>
</head>
<body>
	<div class="container">
		<div class="display">
			<div class="uid">
				USER: <?php echo $uid;?>
			</div>
			<div class="best">
				BEST: <?php echo $best;?>
			</div>
			<div class="total">
				TOTAL: <?php echo $total;?>
			</div>
		</div>
		<div class="wrapper">
			<form action="index.php">
				<button type="submit">NEW GAME</button>
			</form>
		</div>
	</div>
</body>
</html>