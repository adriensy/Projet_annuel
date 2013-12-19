<?php

	class Status{
	
		private $libele_sta;
			
		
		public function __construct(){
		
		}
		
		
		
	/////////////////////////// Accesseur ////////////////////////////
	////////// GET //////////
		public function getLibele_sta(){
			return $this->libele_sta;
		}
			////////// GET //////////
		public function setLibele_sta($newLibele_sta){
			$this->libele_sta = $newLibele_sta;
		}	
	}

?>