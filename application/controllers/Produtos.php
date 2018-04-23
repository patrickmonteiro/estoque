<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Produto_model','produto_model',true);
	}

	public function gerenciar() {

		$produtos = $this->produto_model->listaProdutos();
		$dados = array("produtos" => $produtos);

		$this->load->template("produtos/gerenciar", $dados);
	}

	public function formulario($id = null) 
	{
		$id_categoria = null;	
		if($id)
		{
			$dados['oProduto'] = $this->produto_model->getProdutoEstoqueById($id);	
			$id_categoria = $dados['oProduto']['id_categoria'];	
		}

		$htmlSelect = $this->produto_model->getSelectCategoria($id_categoria);
		$dados['htmlSelect'] = $htmlSelect;

		$this->load->template("produtos/formulario", $dados);
	}

	public function add()
	{
		$dados = $this->input->post();

		if($dados)
		{
			if(!$this->produto_model->validateAdd($dados))
				echo "<script>alert('{$this->produto_model->_msg_erro}');history.back();</script>"; 
			else {	
				$return = $this->produto_model->add($dados);
				if($return)
				{
					echo '<script>alert("Produto Cadastrado com Sucesso!");</script>';
					redirect('gerenciar');
				}
			}
		}
	}
}