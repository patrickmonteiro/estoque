<div class="container-fluid">
	<div class="row justify-content-md-center">
		<div class="col col-lg-4 col-xs-12 text-center">

			<form name="cadastro_cliente" action="<?=site_url('cadastrar');?>" method="post">

				<div class="input-group pt-4   col-12">
				  <input type="text" name="produto" class="form-control" placeholder="Nome Produto" value="<?= $produto['produto']?>" required autofocus>
				</div>

				<div class="input-group pt-4 col-12">
				  <select class="custom-select" name="id_categoria" required>
					  <option value="" selected>SELECIONE UMA CATEGORIA</option>
					  <?php foreach($categorias as $categoria) { ?>
					  	<option value="<?=$categoria['id']?>" <?= ($categoria['id'] == $produto['id_categoria']) ? "selected" : "" ?>><?= $categoria['nome'] ?></option>
					  <?php } ?>
					</select>
				</div>

				<div class="input-group pt-4  col-6">
				  <input type="text" name="quantidade" class="form-control" placeholder="Quantidade" value="<?= $produto['quantidade']?>" required>
				</div>

				<div class="input-group pt-4 col-6">
				  <input type="text" name="valor" class="form-control" placeholder="Valor" value="<?= $produto['valor']?>" required>
				</div>

				<input type="hidden" name="id" value="<?= $produto['id']?>">

				<div class="input-group pt-4  col-12">
				  <input type="button" value="Cancelar" class="btn btn-outline-secondary" onclick="window.location.href='/estoque/gerenciar'" style="width: 50%">
				  <input type="submit" name="cadastrar" class="btn btn-primary"  style="width: 50%">
				  
				</div>

			</form>
		</div>
	</div>
</div>