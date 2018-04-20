<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()	{
		/*$users = $this->users_model->getUsers();
		foreach ($users as $user)
		{
			echo $user->id;
			echo " ";
			echo $user->login;
		}*/
		$this->load->view('header.html');
		$this->load->view('login.php');
		$this->load->view('footer.html');
	}

	public function connexion() {
		$login = $_POST['loginform'];
		$pwd = $_POST['pwd'];
		$success = $this->users_model->login($login, $pwd);
		if($success) {
			$this->session->set_userdata('user', $login);
			redirect(site_url('requete'));
		} else {
			echo "échec";
		}
	}
}
