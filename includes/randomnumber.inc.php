<?php 
		session_start();
		$_SESSION['randomNumber'] = 10 ;//rand(0,10);

		header("Location: ../index.php?random=success");