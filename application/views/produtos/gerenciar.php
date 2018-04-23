	<div class="container-fluid">
		<div class="row justify-content-md-center pt-4">

			<div class="col col-lg-8">
				<a class="btn btn-primary mb-2" style="float: right" href="<?=site_url('formulario')?>" ><i class="fa fa-plus"></i> 
				Cadastrar </a>

				<table class="table table-hover table-bordered">
				  <thead class="thead-light">
				    <tr>
				      	<th>Produto</th>
							<th>Quantidade</th>
							<th>Valor</th>
							<th>Ações</th>
				    	</tr>
				  </thead>

				  <tbody>
				  	<?php foreach($produtos as $produto) {?>
					    <tr>
					      <td><?= $produto['produto']?></td>
					      <td><?= $produto['quantidade']?></td>
					      <td><?= str_replace('.',',',$produto['valor'])?></td>
					      <td width="30%">
					      	<a class="btn btn-danger" style="float:right" onclick="return confirm('Tem Ceterza que deseja Excluir?')" href="<?= site_url("excluir/{$produto['id']}")?>"> <i class="fa fa-trash"></i> Excluir</a>
					      	<a href="<?=site_url('editar')?>/<?=$produto['id']?>" class="btn btn-primary" style="float:right"><i class="fa fa-cog"></i> Editar</a>
					      </td>
					    </tr>
					  <?php } ?> 

				  </tbody>
				</table>
			</div>
		</div>
	</div>
	
	