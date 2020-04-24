<?php 
session_start();
$gut = $_SESSION["gut"];
?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}
	input[type=text] {
	  width: 300px;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  box-sizing: border-box;
	}
	button{
		width: 300px;
  		padding: 12px 20px;
	    margin: auto;
	    /*display: inline-block;*/
	    border: 1px solid #ccc;
	    /*box-sizing: border-box;*/
	}

	.container {
  		padding: 16px;
	}

	.generatebtn{
		/*width: auto;*/
		padding: 10px 18px;
		background-color: #f44336;
	}
	.displaybox{
		/*background-color: orange;*/
		width: 300px;
		height: 350px;
		border: 1px solid black;
		margin: auto;
	}
	div.textfire{
		color: orange;
		text-align: center;
		font-family: Impact, Charcoal, sans-serif;
		font-style: bold;
	}
	div.textice{
		color: blue;
		text-align: center;
		font-family: Impact, Charcoal, sans-serif;
		font-style: bold;
	}
	div.texttrophy{
		color: 	#e6e600;
		text-align: center;
		font-family: Impact, Charcoal, sans-serif;
		font-style: bold;
	}
</style>
<head>
	<title>Index</title>
</head>
<body>
	<div class="container">
		<form action="includes/randomnumber.inc.php" method="GET">
			<div class="generatebtn">
				<button type="submit" name="sumbit_random">
					Generate Random Number
				</button>
			</div>
		</form>
	</div>
	<div class="container">
		<form action="includes/index.inc.php" method="POST">
			<div class="textbox">
			<input type="text" name="input_number" placeholder="Enter a number" required>
			</div>

			<div class="displaybox">
				<?php
					if($gut == "hot"){
						echo '<img src="images/fire.png" alt="Fire" class="image" height="300" width="300">
						<div class="textfire">HOT!!</div>';
					}else if($gut == "cold"){
						echo '<img src="images/ice.png" alt="Fire" class="image" height="300" width="300">
						<div class="textice">COLD!!</div>';
					}else if($gut == "won"){
						echo '<img src="images/trophy.png" alt="Fire" class="image" height="300" width="300">
						<div class="texttrophy">YOU WON!!</div>';
					}
				?>
			</div>

			<div class="trybtn">
				<button type="submit" name="submit">Try your luck!</button>
			</div>

			
		</form>
	</div>
	
</body>
</html>