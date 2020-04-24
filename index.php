<?php 
session_start();
$gut = $_SESSION["gut"];
echo $_SESSION['randomNumber'];
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
	  left: 50%;

	}
	button{
		width: 300px;
  		padding: 12px 20px;
	    margin: auto;
	    /*display: inline-block;*/
	    border: 1px solid #ccc;
	    /*box-sizing: border-box;*/
	}
	.rules{
		align-self: right;
	}
	/*.container {
  		padding: 16px;
	}*/
	.image{
		width: 300px;
		height: 300px;
	}
	.generatebtn{
		width: 300px;
		margin: auto;
	}
	.trybtn{
		width: 300px;
		margin: auto;
	}
	.displaybox{
		/*background-color: orange;*/

		width: 500px;
		height: 350px;
		border: 1px solid black;
		margin: auto;
		/*align-content: center;*/
		text-align: center;
	}
	.rules{
		position: absolute;
		width: 300px;
		height: 350px;
		border: 1px solid black;
		margin: auto;
		left: 80%;
	}
	div.textbox{
		/*position: absolute;*/
		width: 300px;
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
		<form action="includes/randomnumber.inc.php" method="POST">
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
			<div class="rules">
				<ul  style=list-style-type:none;>
						How to play:
							<li>1. Press "Generate Random Number"</li>
							<li>2. Enter a number</li>
							<li>3. Press "Try your luck"</li>
							<li>4. Have fun!!</li>
				</ul>'
			</div>
			<div class="displaybox">
				<?php
					if($gut == "hot"){
						echo '<img src="images/fire.png" alt="Fire" class="image">
						<div class="textfire">HOT!!</div>';
					}else if($gut == "cold"){
						echo '<img src="images/ice.png" alt="cold" class="image">
						<div class="textice">COLD!!</div>';
					}else if($gut == "won"){
						echo '<img src="images/trophy.png" alt="won" class="image">
						<div class="texttrophy">YOU WON!!</div>';
					}
				?>

			</div>
			
			<div class="trybtn">
				<button type="submit" name="submit">Try your luck!</button>
			</div>

			
		</form>

		<!-- <form action="includes/randomnumber.inc.php" method="POST">
		<button type="submit" name="clear">Clear</button>
		</form> -->
	</div>
	
</body>
</html>