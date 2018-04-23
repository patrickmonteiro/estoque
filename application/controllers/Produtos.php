<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {
public $produto;

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Produto_model');
		$this->produto = array(
			"id"					 => "",
			"produto" 		 => "",
			"id_categoria" => "",
			"quantidade"	 => "",
			"valor"		 	   => ""
		);

$this->output->enable_profiler(TRUE);
	}

	public function gerenciar() {

		$produtos = $this->Produto_model->listaProdutos();
		$dados = array("produtos" => $produtos);

		$this->load->template("produtos/gerenciar", $dados);
	}


	public function formulario() {

		$categorias = $this->Produto_model->listaCategorias();
		$dados = array("categorias" => $categorias, "produto" => $this->produto);

		$this->load->template("produtos/formulario", $dados);
	}

	public function editar($id) {

		$categorias = $this->Produto_model->listaCategorias();
		$produto = $this->Produto_model->buscaId($id);

		$dados = array("categorias" => $categorias, "produto" => $produto);

		$this->load->template("produtos/formulario", $dados);
	}


	public function cadastrar() {
		// $dados = $this->input->post();
		if( !$this->input->post("id") )
			$produto = array(
				"produto" 		=> $this->input->post("produto"),
				"id_categoria"	=> $this->input->post("id_categoria"),
				"quantidade"	=> $this->input->post("quantidade"),
				"valor"			=> str_replace(',', '.', $this->input->post("valor"))
			);

			if($produto) {
				if( !$this->Produto_model->salva($produto) ) {
					echo "<script> alert('Erro ao salvar');window.history.back();</script>";
				}else{
					redirect("produtos/gerenciar");
				}

			}
		else{
			$this->atualizar();
		}
	}

	public function atualizar() {
		$produto = array(
				"id"					=> $this->input->post("id"),
				"produto" 		=> $this->input->post("produto"),
				"id_categoria"	=> $this->input->post("id_categoria"),
				"quantidade"	=> $this->input->post("quantidade"),
				"valor"			=> str_replace(',', '.', $this->input->post("valor"))
			);

		if($produto) {
			if( !$this->Produto_model->atualiza($produto) ) {
				$this->session->set_flashdata("danger", "Erro ao atualizar Produto");
			}else{
				$this->session->set_flashdata("success", "Produto atualizado com Sucesso");
				redirect("produtos/gerenciar");
			}
		}
	}

	public function excluir($idProduto) {

		if( !$this->Produto_model->deleta($idProduto) ) {
			$this->session->set_flashdata("danger", "Erro ao excluir Produto");
		}else {
			$this->session->set_flashdata("success", "Produto excluído com Sucesso");
		}
		redirect("gerenciar");
	}
}