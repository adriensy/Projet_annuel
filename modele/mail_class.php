<?php

	class Mail{
	
		private $contenu_mail;
		private $expediteur_mail;
		private $objet_mail;
		private $date_envoi_mail;	
		
		public function __construct(){
		
		}
		
		
		
	/////////////////////////// Accesseur ////////////////////////////
	////////// GET //////////
		public function getContenu_mail(){
			return $this->contenu_mail;
		}
		public function getExpediteur_mail(){
			return $this->expediteur_mail;
		}
		public function getObjet_mail(){
			return $this->objet_mail;
		}
		public function getDateEnvoi_mail(){
			return $this->date_envoi_mail;
		}
		
		
		
		
			////////// GET //////////
		public function setContenu_mail($newCOntenu_mail){
			$this->contenu_mail = $newCOntenu_mail;
		}
		public function setExpediteur_mail($newExpediteur_mail){
			$this->expediteur_mail = $newExpediteur_mail;
		}
		public function setObjet_mail($newObjet_mail){
			$this->objet_mail = $newObjet_mail;
		}
		public function setDateEnvoi_mail($newDateEnvoi_mail){
			$this->date_envoi_mail = $newDateEnvoi_mail;
		}
		
		
		
			
	}

?>