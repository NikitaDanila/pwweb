<?php 
	// include_once "randomnumber.inc.php";
		session_start();
		$randomNumber = $_SESSION['randomNumber'];
		//echo $randomNumber;
		$myNumber = $_POST['input_number'];
		//echo $myNumber;
		$numberOfTries;

			if($myNumber == $randomNumber){
				echo "is the same number";
			}else{
				echo "try one more time";
				header('Refresh: 5; url=http://127.0.0.1/edsa-pwweb-pc/index.php');
			}
		

