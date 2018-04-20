<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requete extends CI_Controller {

	public function index(){
		$data['requests'] = $this->fillList();

		$this->load->view('header.html');
		$this->load->view('requeteView.php',$data);
		$this->load->view('footer.html');
		
	}

	private function fillList(){
		$requests = array(
			'count personnes divorcées' => 'req1',
			'sum capital gain' => 'req2',
			'sum capital loss' => 'req3');
		return $requests;
	}

	private function generateNoise($sensitivity) {
		//nombre aléatoire entre -0.5 et 0.5
		$random = (mt_rand() / mt_getrandmax()) - 0.5;
		$signe = 0;
		if($random > 0){ $signe = 1; }
		else if($random < 0){ $signe = -1; };
		$noise = - $sensitivity * $signe * log(1 - 2 * abs($random));
		return $noise;
	}

	public function resultat() {
		//$this->output->enable_profiler(TRUE);
		$requete = $_GET['request'];
		$sensi_count_base = 1;
		$mode = $_GET['mode'];
		switch($requete){
			case "req1":
				$resultat = $this->requetes_model->req1();
				$this->requetes_model->request_done_add('req1',$_SESSION['user']);
				if($mode=="classique"){
					$sensi = $sensi_count_base * $this->requetes_model->request_done('req1',$_SESSION['user']);
				} else {
					$sensi = $sensi_count_base;
				}
				echo $resultat + $this->generateNoise($sensi);
				break;
			case "req2":
				$sensitivity = $this->requetes_model->sensitivityReq2();
				$this->requetes_model->request_done_add('req2',$_SESSION['user']);
				if($mode=="classique"){
					$sensi = $sensitivity * $this->requetes_model->request_done('req2',$_SESSION['user']);
				} else {
					$sensi = $sensitivity;
				}
				$resultat = $this->requetes_model->req2();
				echo $resultat + $this->generateNoise($sensi);
				break;
			case "req3":
				$sensitivity = $this->requetes_model->sensitivityReq3();
				$this->requetes_model->request_done_add('req3',$_SESSION['user']);
				if($mode=="classique"){
					$sensi = $sensitivity * $this->requetes_model->request_done('req3',$_SESSION['user']);
				} else {
					$sensi = $sensitivity;
				}
				$resultat = $this->requetes_model->req3();
				echo $resultat + $this->generateNoise($sensi);
				break;
		}
	}
}