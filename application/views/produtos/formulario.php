<?php
$aFormulario = array('id' => '','produto' => '', 'quantidade' => '', 'valor' => '');

if(isset($oProduto)){
	$aFormulario = $oProduto;
}
?>
<div class="container-fluid">
	<div class="row justify-content-md-center">
		<div class="col col-lg-4 col-xs-12 text-center">
			<i class="fas fa-cube fa-8x" style="color: grey;"></i>

			<form name="cadastro_cliente" action="<?=site_url('add');?>" method="post" enctype='multipart/form-data'>

			<div class="input-group pt-4   col-12">
			  <input type="text" name="produto" class="form-control" placeholder="Nome Produto" aria-label="Nome Produto" aria-describedby="basic-addon1" value="<?=$aFormulario['produto']?>">
			</div>

			<div class="input-group pt-4 col-12">
			  <?=$htmlSelect?>
			</div>

			<div class="input-group pt-4  col-6">
			  <input type="text" name="quantidade" class="form-control" placeholder="Quantidade" aria-label="Quantidade" aria-describedby="basic-addon1" value="<?=$aFormulario['quantidade']?>">
			</div>

			<div class="input-group pt-4 col-6">
			  <input type="text" name="valor" class="form-control" placeholder="Valor" aria-label="Valor" aria-describedby="basic-addon1" value="<?=$aFormulario['valor']?>">
			</div>

			<div class="input-group pt-4  col-12">
			  <input type="submit" name="cadastrar" class="btn btn-primary" >
			  <input type="button" value="Cancelar" class="btn btn-danger" onclick="window.location.href='/estoque/gerenciar'" >
			</div>
		</div>
	</div>
</div>