<?php 
		session_start();

		$randomNumber = $_SESSION['randomNumber'];
		$myNumber = $_POST['input_number'];

		$range = ($randomNumber * 40)/100;

		if($randomNumber == -1){
			$_SESSION["start"] = 0;
		}
		if($myNumber == $randomNumber){
			$_SESSION["gut"] = 'won';
			$_SESSION["start"] = 1;
			// $_SESSION["won"] += 1;
			// $_SESSION["tries"] = 0;

			header("Location: ../index.php");
		}else if($myNumber <= ($randomNumber + $range) && $myNumber >= ($randomNumber - $range)) {
				$_SESSION["gut"] = "hot";
				$_SESSION["start"] = 1;
				// $_SESSION["tries"] += 1;

				header("Location: ../index.php");
			}else{
				$_SESSION["gut"] = "cold";
				$_SESSION["start"] = 1;
				// $_SESSION["tries"] += 1;

				header("Location: ../index.php");

			}