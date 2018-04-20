<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requete extends CI_Controller {

	public function index(){
		//données qui rempliront une liste déroulante
		$data['requests'] = $this->fillList();

		//chargement de la page
		$this->load->view('header.html');
		$this->load->view('requeteView.php', $data);
		$this->load->view('footer.html');
		
	}

	//retourne un tableau avec les différentes requêtes
	private function fillList(){
		$requests = array(
			'Count personnes divorcées' => 'req1',
			'Sum capital gain' => 'req2',
			'Sum capital loss' => 'req3'
		);
		return $requests;
	}

	//fonction qui génère le bruit en fonction de la sensibilité
	private function generateNoise($sensitivity) {
		//nombre aléatoire entre -0.5 et 0.5
		$random = (mt_rand() / mt_getrandmax()) - 0.5;

		//défini le signe
		$signe = 0;
		if($random > 0){ $signe = 1; }
		else if($random < 0){ $signe = -1; };

		//calcul du bruit avec la fonction de Laplace avec pour paramètres 0 et sensibilité/espilon (on a pris epsilon=1)
		$noise = - $sensitivity * $signe * log(1 - 2 * abs($random));
		return $noise;
	}

	//fonction qui renvoie un résultat à l'utilisateur
	public function resultat() {
		$requete = $_GET['request'];
		$sensi_count_base = 1;
		$mode = $_GET['mode'];
		switch($requete){
			case "req1":
				//si mode classique
				if($mode=="classique"){
					//on enregistre la requête que l'utilisateur vient de faire
					$this->requetes_model->request_done_add('req1', $_SESSION['user']);
					//on multiplie la sensibilité par le nombre de fois que l'utilisateur a fait cette requête
					$sensi = $sensi_count_base * $this->requetes_model->request_done('req1', $_SESSION['user']);
				}
				//sinon 
				else {
					//on garde la sensibilité de base
					$sensi = $sensi_count_base;
				}
				//resultat de la requête
				$resultat = $this->requetes_model->req1();
				//résultat + bruit
				$data['resultatFinal'] = $resultat + $this->generateNoise($sensi);
				break;
			case "req2":
				//sensibilité pour cette requête sum
				$sensitivity = $this->requetes_model->sensitivityReq2();
				//si mode classique
				if($mode=="classique"){
					//on enregistre la requête que l'utilisateur vient de faire
					$this->requetes_model->request_done_add('req2', $_SESSION['user']);
					//on multiplie la sensibilité par le nombre de fois que l'utilisateur a fait cette requête
					$sensi = $sensitivity * $this->requetes_model->request_done('req2', $_SESSION['user']);
				}
				//sinon 
				else {
					//on garde la sensibilité de base
					$sensi = $sensitivity;
				}
				//resultat de la requête
				$resultat = $this->requetes_model->req2();
				//résultat + bruit
				$data['resultatFinal'] = $resultat + $this->generateNoise($sensi);
				break;
			case "req3":
				//sensibilité pour cette requête sum
				$sensitivity = $this->requetes_model->sensitivityReq3();
				//si mode classique
				if($mode=="classique"){
					//on enregistre la requête que l'utilisateur vient de faire
					$this->requetes_model->request_done_add('req3', $_SESSION['user']);
					//on multiplie la sensibilité par le nombre de fois que l'utilisateur a fait cette requête
					$sensi = $sensitivity * $this->requetes_model->request_done('req3', $_SESSION['user']);
				}
				//sinon 
				else {
					//on garde la sensibilité de base
					$sensi = $sensitivity;
				}
				//resultat de la requête
				$resultat = $this->requetes_model->req3();
				//résultat + bruit
				$data['resultatFinal'] = $resultat + $this->generateNoise($sensi);
				break;
		}

		//chargement de la page
		$this->load->view('header.html');
		$this->load->view('resultat.php', $data);
		$this->load->view('footer.html');
	}
}