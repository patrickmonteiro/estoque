	<div class="container-fluid">
		<div class="row justify-content-md-center pt-4">

			<div class="col col-lg-8">
				<a class="btn btn-primary mb-2" style="float: right" href="<?=site_url('gerenciar/formulario')?>" ><i class="fa fa-plus"></i> 
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
					    	<td><?= $produto['nome']?></td>
					      <td><?= $produto['quantidade']?></td>
					      <td><?= $produto['vl_produto']?></td>
					      <td width="30%">
					      	<button class="btn btn-danger" style="float:right"> <i class="fa fa-trash"></i> Excluir</button>
					      	<button class="btn btn-primary" style="float:right"> <i class="fa fa-cog"></i> Editar</button>
					      </td>
					    </tr>
					  <?php } ?> 

				  </tbody>
				</table>
			</div>
		</div>
	</div>
	
	