<?php

	class Evenement{
	
		private $libele_even;
		private $date_even;
			
		
		public function __construct(){
		
		}
		
		
		
	/////////////////////////// Accesseur ////////////////////////////
	////////// GET //////////
		public function getLibele_even(){
			return $this->libele_even;
		}
		public function getDate_even(){
			return $this->date_even;
		}
			////////// GET //////////
		public function setLibele_even($newLibele_even){
			$this->libele_even = $newLibele_even;
		}
		public function setDate_even($newDate_even){
			$this->date_even = $newDate_even;
		}	
	}

?>