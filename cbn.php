<?php

	// interface ATM
	interface ATM {
		public function withdrawal();
		public function transfer();
		public function deposit();
		public function buyairtime();
		public function billspayment();
	}

	//interface FastTrack
	interface FastTrack {
		public function quickwithdrawal();
		public function quickdeposit();
	}


	// first bank class

	class FirstBank implements ATM{

		// member  variables
		public $balance;


		public function withdrawal(){
			$this->balance = 3500;

			return $this->balance;
		}

		public function transfer(){
			$this->balance = 3500;

			return $this->balance;
		}

		public function deposit(){
			$this->balance = 3500;

			return $this->balance;
		}

		public function buyairtime(){
			$this->balance = 3500;

			return $this->balance;
		}

		public function billspayment(){
			$this->balance = 3500;

			return $this->balance;
		}

	}

	class GTBank implements FastTrack{

		// member  variables
		public $balance;

		// member functions
		public function quickwithdrawal(){
			$this->balance = 3500;

			return $this->balance;
		}

		public function quickdeposit(){
			$this->balance = 3500;

			return $this->balance;
		}
	}



?>