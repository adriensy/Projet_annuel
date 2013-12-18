<?php

	class News{
	
		private $titre;
		private $contenu;
		private $date_ajout;
		private $date_modif;
		private $etat;
		private $mini_contenu;
		private $dossier_image;
		private $dossier_page;
	
		
		public function __construct(){
		
		}
		
		
		
	/////////////////////////// Accesseur ////////////////////////////
	////////// GET //////////
		public function getTitre(){
			return $this->titre;
		}
		public function getContenu(){
			return $this->contenu;
		}
		public function getDateAjout(){
			return $this->date_ajout;
		}
		public function getDateModif(){
			return $this->date_modif;
		}
		public function getEtat(){
			return $this->etat;
		}
		public function getMiniContenu(){
			return $this->mini_contenu;
		}
		public function getDossierImage(){
			return $this->dossier_image;
		}
		public function getDossierPage(){
			return $this->dossier_page;
		}
	////////// GET //////////
		public function setTitre($newTitre){
			$this->titre = $newTitre;
		}
		public function setContenu($newContenu){
			$this->contenu = $newContenu;
		}
		public function setDateAjout($newDateAjout){
			$this->date_ajout = $newDateAjout;
		}
		public function setDateModif($newDateModif){
			$this->date_modif = $newDateModif;
		}
		public function setEtat($newEtat){
			$this->etat = $newEtat;
		}
		public function setMiniContenu($newMiniContenu){
			$this->mini_contenu = $newMiniContenu;
		}
		public function setDossierImage($newDossierImage){
			$this->dossier_image = $newDossierImage;
		}
		public function setDossierPage($newDossierPage){
			$this->dossier_page = $newDossierPage;
		}	
	}

?>