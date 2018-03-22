<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requete extends CI_Controller {

	public function index(){
		$data['requests'] = $this->fillList();
		$this->load->view('header.html');
		$this->load->view('requeteView.php',$data);
		$this->load->view('footer.html');
		
	}

	public function fillList(){
		$requests = array(
			'req1',
			'req2',
			'req3');
		return $requests;
	}
}