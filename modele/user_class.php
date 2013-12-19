<?php
	
	class User{
	
		private $nom_user;
		private $prenom_user;
		private $email_user;
		private $speudo_user;
		private $password_user;
		private $date_new_user;
		private $date_modif_user;
		private $etat_user;
	
		
		public function __construct(){
		
		}
		
		
		
	/////////////////////////// Accesseur ////////////////////////////
	////////// GET //////////
		public function getNomUser(){
			return $this->nom_user;
		}
		public function getPrenomUser(){
			return $this->prenom_user;
		}
		public function getDateNewUser(){
			return $this->date_new_user;
		}
		public function getDateModifUser(){
			return $this->date_modif_user;
		}
		public function getEtatUser(){
			return $this->etat_user;
		}
		public function getEmailUser(){
			return $this->email_user;
		}
		public function getSpeudoUser(){
			return $this->speudo_user;
		}
		public function getPasswordUser(){
			return $this->password_user;
		}
	////////// GET //////////
		public function setNomUser($newNomUser){
			$this->nom_user = $newNomUser;
		}
		public function setPrenomUser($newPrenomUser){
			$this->prenom_user = $newPrenomUser;
		}
		public function setDateNewUser($newDateNewUser){
			$this->date_new_user = $newDateNewUser;
		}
		public function setDateModifUser($newDateModifUser){
			$this->date_modif_user = $newDateModifUser;
		}
		public function setEtatUser($newEtatUser){
			$this->etat_user = $newEtatUser;
		}
		public function setEmailUser($newEmailUser){
			$this->email_user = $newEmailUser;
		}
		public function setSpeudoUser($newSpeudoUser){
			$this->speudo_user = $newSpeudoUser;
		}
		public function setPasswordUser($newPasswordUser){
			$this->password_user = $newPasswordUser;
		}	
	}

?>