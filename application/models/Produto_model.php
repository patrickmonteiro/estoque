<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto_model extends CI_Model {
	public $_msg_erro;

	public function __construct()
	{
		parent::__construct();
		$this->table = 'tb_produto';
	}

	public function getAll()
	{
		$result = $this->db->get('tb_produto')->result();

		if($result)
		{
			return $result;
		}
	}


	public function validateAdd(&$data)
	{
		if($data['nome'])
		{
			$this->_msg_erro = "Informe o Nome do Produto!";
			return false;
		}
		if($data['quantidade'])
		{
			$this->_msg_erro = "Informe a Quantidade!";
			return false;
		}
		return true;
	}

	public function getProdutoEstoqueById($id)
	{
		try {
			if($id == 0) $result = $this->db->where("id = {$id}")->get('produto')->result();
			else
				$result = $this->db->where("id = {$id}")->get('usuario')->result_array();
			
		} catch (Exception $e) {
			$this->_msg_erro = "Erro: Não foi possível encontrar o Usuário. <br> Error-Message:" . $e->getMessage();
			return false;
		}
		return $result;
	}

	public function add($data)
	{
		try {
			$this->db->insert('produto', $data);
		} catch (Exception $e) {
			$this->_msg_erro = "Erro." . $e->getMessage();
			return false;
		}
		return true;
	}

	public function getSelectCategoria()
	{
		$html = '<select name="id_categoria" class="form-control">
				<option value="">Categoria...</option>
					';

		$categorias = $this->db->get('tb_categoria')->result();

		if($categorias)
		{
			foreach ($categorias as $oCategoria) {
				$html .= "<option value='{$oCategoria->id}'>{$oCategoria->nome}</option>";
			}

			$html .= "</select>";
			return $html;
		}
	}
}