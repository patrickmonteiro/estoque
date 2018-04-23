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

	public function buscaId($id) {
				  $this->db->where('id', $id);
		$result = $this->db->get('tb_produto')->row_array();
		return $result;
	}

	public function salva($data) {
		try {
			$this->db->insert('tb_produto', $data);
		} catch (Exception $e) {
			$this->_msg_erro = "Erro." . $e->getMessage();
			return false;
		}
		return true;
	}

	public function atualiza($produto) {
		try {
			$this->db->where('id', $produto['id'] );
			$this->db->update('tb_produto', $produto);
		} catch (Exception $e) {
			$this->_msg_erro = "Erro." . $e->getMessage();
			return false;
		}
		return true;
	}

	public function listaCategorias() {

		return $this->db->get('tb_categoria')->result_array();
	}

	public function deleta($idProduto) {
		
			$this->db->where('id', $idProduto);
		if( !$this->db->delete('tb_produto') ) {
			return false;
		}else {
			return $this->db->affected_rows();
		}
	}
}