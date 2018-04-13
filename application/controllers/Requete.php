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
		$this->output->enable_profiler(TRUE);
		$requete = $_GET['request'];
		$sensi_count_base = 1;
		switch($requete){
			case "req1":
				$resultat = $this->requetes_model->req1();
				echo $resultat + $this->generateNoise(1);
				break;
			case "req2":
				$sensitivity = $this->requetes_model->sensitivityReq2();
				$resultat = $this->requetes_model->req2();
				echo $resultat + $this->generateNoise($sensitivity);
				break;
			case "req3":
				$sensitivity = $this->requetes_model->sensitivityReq3();
				$resultat = $this->requetes_model->req3();
				echo $resultat + $this->generateNoise($sensitivity);
				break;
		}
	}
}