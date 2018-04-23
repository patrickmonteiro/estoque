<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Usuario_model','usuario_model',true);
	}
	
	public function index()
	{
		redirect('welcome/index');
	}

	public function loginSubmit() {
		$dados = array('login'=> trim($this->input->post('login')),
					   'senha'=> sha1($this->input->post('senha')));

		if($dados) {
			$usuario = $this->usuario_model->login($dados);
			
			if($usuario) {
				$this->session->set_userdata("usuario_logado", array('nome'=> $usuario->nome,
												   'login'=> $usuario->login,
												   'ativo'=> $usuario->ativo,
												   'logado'=> 1,
													));
				redirect('gerenciar');
			} else {

				$this->session->flashdata("Usuário ou Senha incorreto!");
				redirect('acesso');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("usuario_logado");
		redirect('acesso');
	}
}
