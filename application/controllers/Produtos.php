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

	public function formulario() {
		$htmlSelect = $this->produto_model->getSelectCategoria();
		$dados = array("htmlSelect" => $htmlSelect);

		$this->load->template("produtos/formulario", $dados);
	}
}