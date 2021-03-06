<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Estoque Unama</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
	<link rel="stylesheet"  href="<?= base_url("dist/css/bootstrap.min.css") ?>">
	<script rel="stylesheet"   src="<?= base_url("dist/fontAwesome/js/fontawesome-all.js") ?>"></script>
	
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Estoque <i class="fas fa-cube"></i></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Dashboard</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Estoque</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<div class="container-fluid">
			<br>
			<div style="padding-left:15%;">
				<a class="btn btn-success" href="<?=site_url('gerenciar/add')?>">+ Cadastrar</a>
			</div>
			<br>
		<div class="row justify-content-md-center">
			<table class="table table-condensed table-bordered table-stripted col-8">
				<thead>
					<th>Produto</th>
					<th>Quantidade</th>
					<th>Valor</th>
					<th>Ações</th>
				</thead>
				<tbody>
					<?php
					if($aProdutos){
						foreach ($aProdutos as $oProduto) {
							?>
							<tr>
								<td><?=$oProdutos->nome?></td>
								<td><?=$oProdutos->quantidade?></td>
								<td><?=$oProdutos->valor?></td>
								<td>
									<a href="<?site_url('gerenciar/edit')?>/<?=$oProduto->id?>">
										<button class="btn btn-primary"><i class="icon icon-edit"></i> Editar</button>
									</a>
									<a href="<?site_url('gerenciar/delete')?>/<?=$oProduto->id?>">
										<button class="btn btn-primary"><i class="icon icon-trash"></i> Excluir</button>
									</a>
								</td>
							</tr>

							<?php
						}
					}
					?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

	<script src="<?= base_url("dist/js/bootstrap.min.js")?>"></script>


</body>
</html>