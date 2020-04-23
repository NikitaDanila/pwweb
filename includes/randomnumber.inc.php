<?php 
		session_start();
		$_SESSION['randomNumber'] = rand(0,5);

		header("Location: ../index.php?random=success");