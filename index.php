
<!DOCTYPE html>
<html>

<head>
	<title>Index</title>
</head>
<body>
	

	<form action="includes/index.inc.php" method="POST">
		<div class="textbox">
		<input type="text" name="input_number" placeholder="Enter a number" >
		</div>

		<div class="trybtn">
			<button type="submit" name="submit">Try your luck!</button>
		</div>

		<div class="displaybox">
			
		</div>
	</form>

	<form action="includes/randomnumber.inc.php" method="GET">
		<div class="generatebtn">
		<input type="submit" name="sumbit_random" value="Generate Random Number" >
		</div>
	</form>

</form>
</body>
</html>