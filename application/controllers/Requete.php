<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requete extends CI_Controller {

	public function index(){
		$data['requests'] = $this->fillList();

		echo $this->generateNoise(1);

		$this->load->view('header.html');
		$this->load->view('requeteView.php',$data);
		$this->load->view('footer.html');
		
	}

	private function fillList(){
		$requests = array(
			'req1',
			'req2',
			'req3');
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
}