<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {

		$this->load->template("login/login");
	}

	public function acesso() {
		$this->load->template("login/login");
	}

}
