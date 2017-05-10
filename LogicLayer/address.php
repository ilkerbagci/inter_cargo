<?php 
	class address 
	{

		private $ID;
		private $Country;
		private $City;
	

		
		function __construct($ID = NULL, $Country = NULL, $City = NULL) 
		{
			$this->ID = $ID;
			$this->Country = $Country;
			$this->City = $City;
		}
		/*
		public function getID() {
			return $this->id;
		}
		
		public function getName() {
			return $this->name;
		}
		
		public function getPhoneNumber() {
			return $this->phoneNumber;	
		}*/
	}
?>	