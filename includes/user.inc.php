<?php
	session_start();
	$user = $_SESSION["user"];
	//echo $user;

	class User{
		var $bestRun;
		var $newBest;
		var $timesWon;

		public function __construct(){
			$this->bestRun = 0;
			$thid->timesWon = 0;
		}

		public function _bestRun($newBest){
			if($newBest < $this->bestRun){
				$this->bestRun = $newBest;
			}
		}
		public function _timesWon($_SESSION["won"]){
			$this->timesWon = $_SESSION["won"];
		}
	}