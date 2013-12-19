<?php

	class Categorie{
	
		private $libele_cat;
			
		
		public function __construct(){
		
		}
		
		
		
	/////////////////////////// Accesseur ////////////////////////////
	////////// GET //////////
		public function getLibele_cat(){
			return $this->libele_cat;
		}
			////////// GET //////////
		public function setLibele_cat($newLibele_cat){
			$this->libele_cat = $newLibele_cat;
		}	
	}

?>