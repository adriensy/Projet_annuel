<?php

	class Commentaire{
	
		private $comm;
		private $date_ajout_comm;
		private $date_modif_comm;
		private $etat_comm;	
		
		public function __construct(){
		
		}
		
		
		
	/////////////////////////// Accesseur ////////////////////////////
	////////// GET //////////
		public function getComm(){
			return $this->comm;
		}
		public function getDateAjout_comm(){
			return $this->date_ajout_comm;
		}
		public function getDateModif_comm(){
			return $this->date_modif_comm;
		}
		public function getEtat_comm(){
			return $this->etat_comm;
		}
		
		
		
		
			////////// GET //////////
		public function setComm($newComm){
			$this->comm = $newComm;
		}
		public function setDateAjout_comm($newDateAjout_comm){
			$this->date_ajout_comm = $newDateAjout_comm;
		}
		public function setDateModif_comm($newDateModif_comm){
			$this->date_modif_comm = $newDateModif_comm;
		}
		public function setEtat_comm($newEtat_comm){
			$this->etat_comm = $newEtat_comm;
		}
		
		
		
			
	}

?>