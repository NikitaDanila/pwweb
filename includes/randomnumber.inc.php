<?php 
		session_start();
		$_SESSION['randomNumber'] = rand(0,50);

		header("Location: ../index.php?random=success");