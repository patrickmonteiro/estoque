<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerenciar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Produto_model','produto_model',true);
	}

	public function index()
	{
		$aProdutos = $this->produto_model->getAll();
		$this->load->view('gerenciar',array('aProdutos'=>$aProdutos));
	}

	public function add()
	{
		if(!empty($_POST))
		{
			$dados = $this->input->post();

			if($dados)
			{
				$return = $this->produto_model->add($dados);
				if($return)
				{
					echo '<script>alert("Produto Cadastrado com Sucesso!");</script>';
					redirect('gerenciar','location',200);
				}
			}
		} else{
			$data['htmlSelect'] = $this->produto_model->getSelectCategoria();
			$this->load->view('add_produto',$data);		
		}
	}

	public function addSubmit()
	{
		
	}

	public function edit($id)
	{
		$usuario = $this->produto_model->getProdutoEstoqueById($id);
		$this->load->view('add',$usuario);
	}

	public function editSubmit()
	{
		
	}

	public function delete($id)
	{
		
	}
}
