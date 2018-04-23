<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto_model extends CI_Model {
	public $_msg_erro;

	public function __construct()
	{
		parent::__construct();
		$this->table = 'tb_produto';
	}

	public function listaProdutos()
	{
		$result = $this->db->get('tb_produto')->result_array();
		return $result;
	
	}


	public function validateAdd(&$data)
	{
		if($data['produto'] == "")
		{
			$this->_msg_erro = "Informe o Nome do Produto!";
			return false;
		}
		if($data['quantidade'] == "")
		{
			$this->_msg_erro = "Informe a Quantidade!";
			return false;
		}
		if($data['valor'] == "")
		{
			$this->_msg_erro = "Informe o Valor do Produto!";
			return false;
		} else {
			$data['valor'] = str_replace(',','.',$data['valor']);	
		}

		unset($data['cadastrar']);		
		return true;
	}

	public function getProdutoEstoqueById($id)
	{
		$result = $this->db->where('id', $id)->get('tb_produto')->row_array();
		return $result;
	}

	public function add($data)
	{
		try {
			$this->db->insert('tb_produto', $data);
		} catch (Exception $e) {
			$this->_msg_erro = "Erro." . $e->getMessage();
			return false;
		}
		return true;
	}

	public function getSelectCategoria($id_categoria = null)
	{
		$html = '<select name="id_categoria" class="form-control">
				<option value="">Categoria...</option>
					';

		$categorias = $this->db->get('tb_categoria')->result();

		if($categorias)
		{
			foreach ($categorias as $oCategoria) {
				$select = ($oCategoria->id = $id_categoria)? 'selected': '';
				$html .= "<option value='{$oCategoria->id}' {$select}>{$oCategoria->nome}</option>";
			}

			$html .= "</select>";
			return $html;
		}
	}
}