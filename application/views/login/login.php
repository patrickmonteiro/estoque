	<div class="container-fluid">
		<div class="row justify-content-md-center">
			<div class="col col-lg-4 col-xs-12 text-center">
				<i class="fas fa-cube fa-8x" style="color: grey;"></i>
				<h3>Login Estoque</h3>
				<form method="post" action="<?=site_url('auth/loginSubmit')?>" method="post" enctype='multipart/form-data'>
					<div class="input-group pt-4 input-group-lg">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
					  </div>

					  <input type="email" name="login" class="form-control" placeholder="Email" autofocus required="" >
					</div>

					<div class="input-group pt-4 input-group-lg">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-lock"></i></span>
					  </div>

					  <input type="password" name="senha" class="form-control" placeholder="Senha" required="">
					</div>

					<input type="submit" class="btn btn-dark btn-block btn-lg mt-3">Logar</button>
				</form>
			</div>
		</div>
	</div>
	
	