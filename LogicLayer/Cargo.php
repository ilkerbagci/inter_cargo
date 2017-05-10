<?php 
	class Cargo 
	{
		private $senderName;
		private $senderSurname;
		private $senderCountry;
		private $senderCity;
		private $receiverName;
		private $receiverSurname;
		private $receiverCountry;
		private $receiverCity;
		private $cweight;	
		private $cvolume;	

		
		function __construct( $receiverName = NULL,$senderName = NULL, $receiverSurname = NULL, $senderSurname = NULL,
	 $receiverCountry = NULL, $senderCountry = NULL, $receiverCity = NULL,	$senderCity = NULL,$cweight = NULL,$cvolume = NULL) 
		{
			$this->senderName = $senderName;
			$this->senderSurname = $senderSurname;
			$this->senderCountry = $senderCountry;
			$this->senderCity = $senderCity;
			$this->receiverName = $receiverName;
			$this->receiverSurname = $receiverSurname;
			$this->receiverCountry = $receiverCountry;
			$this->receiverCity = $receiverCity;
			$this->cweight = $cweight;
			$this->cvolume = $cvolume;
		}
		
		public function getsenderName() {
			return $this->senderName;
		}
		public function getsenderSurname() {
			return $this->senderSurname;
		}
		public function getsenderCountry() {
			return $this->senderCountry;
		}
		public function getsenderCity() {
			return $this->senderCity;
		}
		public function getreceiverName() {
			return $this->receiverName;
		}
		public function getreceiverSurname() {
			return $this->receiverSurname;
		}
		public function getreceiverCountry() {
			return $this->receiverCountry;
		}
		public function getreceiverCity() {
			return $this->receiverCity;
		}	
		public function getcweight() {
			return $this->cweight ;
		}	
		public function getcvolume () {
			return $this->cvolume ;
		}
		/*
		public function getName() {
			return $this->name;
		}
		
		public function getPhoneNumber() {
			return $this->phoneNumber;	
		}*/
	}
?>