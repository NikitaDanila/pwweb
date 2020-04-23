<?php
	session_start();
	$user = $_SESSION["user"];
	$won = $_SESSION["won"];
	//echo $user;

	class User{
		var $userId;
		var $bestRun;
		var $newBest;
		var $timesWon;

		public function __construct(){
			$this->userId = $user;
			$this->bestRun = 0;
			$this->timesWon = 0;
		}

		// public function _construct($user){
		// 	$this->userId = $user;
		// 	$this->bestRun = 0;
		// 	$this->timesWon = 0;
		// }

		public function _getId(){
			return $this->userId;
		}

		public function _getBestRun(){
			return $this->bestRun;
		}

		public function _getTimesWon(){
			return $this->timesWon;
		}

		public function _bestRun($newBest){
			if($newBest < $this->bestRun){
				$this->bestRun = $newBest;
			}
		}

		public function _timesWon($won){
			$this->timesWon = $won;
		}
	}

	function _autocall(){
		$userList = array();
		$userList[] = new User($user);
		echo $userList[0]->_getId();
	}