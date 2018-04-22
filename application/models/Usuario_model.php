<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends MY_Model {
	public $_msg_erro;
	public $_msg;

	public function __construct()
	{
		parent::__construct();
		$this->table = 'usuario';
	}


	public function validateLogin(&$data)
	{
		if($data['login'])
		{
			$this->_msg_erro = "Informe o Login!";
			return false;
		}
		if($data['senha'])
		{
			$this->_msg_erro = "Informe o Senha!";
			return false;
		}
		return true;
	}

	public function getUserById($id)
	{
		try {
			if($id == 0) $result = $this->db->get('usuario')->result_array();
			else
				$result = $this->db->where("id = {$id}")->get('usuario')->result_array();
			
		} catch (Exception $e) {
			$this->_msg_erro = "Erro: Não foi possível encontrar o Usuário. <br> Error-Message:" . $e->getMessage();
			return false;
		}
		return $result;
	}
}