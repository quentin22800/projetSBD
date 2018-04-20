<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()	{
		//chargement de la page
		$this->load->view('header.html');
		$this->load->view('login.php');
		$this->load->view('footer.html');
	}

	public function connexion() {
		$login = $_POST['loginform'];
		$pwd = $_POST['pwd'];
		$success = $this->users_model->login($login, $pwd);
		if($success) {
			//en cas de succès, on enregistre le login dans une variable de session
			$this->session->set_userdata('user', $login);
			//on redirige vers la page requete
			redirect(site_url('requete'));
		} else {
			echo "échec";
		}
	}
}
