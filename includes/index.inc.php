<?php 
	// include_once "randomnumber.inc.php";
		session_start();
		$randomNumber = $_SESSION['randomNumber'];
		//echo $randomNumber;
		$myNumber = $_POST['input_number'];
		//echo $myNumber;
		$numberOfTries;
		$range = ($randomNumber * 40)/100;

			if($myNumber == $randomNumber){

				//echo "YOU WIN!!";
				$_SESSION["gut"] = 'won';
				//header('Refresh: 1; url=http://127.0.0.1/edsa-pwweb-pc/index.php');
				header("Location: ../index.php");

			}else if($myNumber <= ($randomNumber + $range) && $myNumber >= ($randomNumber - $range)) {
					$_SESSION["gut"] = "hot";
					header("Location: ../index.php");
				}else{
					$_SESSION["gut"] = "cold";
					header("Location: ../index.php");

				}
				//echo "try one more time";
				
				
				//header('Refresh: 3; url=http://127.0.0.1/edsa-pwweb-pc/index.php');

