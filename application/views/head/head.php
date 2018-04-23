<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Estoque Unama</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
	<link rel="stylesheet"  href="<?= base_url("dist/css/bootstrap.min.css") ?>">
	<script rel="stylesheet" src="<?= base_url("dist/fontAwesome/js/fontawesome-all.js") ?>"></script>
	
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="<?=site_url('gerenciar')?>">Estoque <i class="fas fa-cube"></i></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	   <div class="collapse navbar-collapse" id="navbarNav">	   	
	    <?php if($this->session->userdata("usuario_logado")) { ?>
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Dashboard</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Estoque</a>
	      </li>
	    </ul>
	    <ul class="navbar-nav my-2 my-lg-0">
	    	<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <?=$this->session->usuario_logado['nome']?>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Meus Dados</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="<?=site_url('logout')?>">Sair</a>
		        </div>
		     </li>
	    </ul>
	    <?php } ?>
	  </div> 
	</nav>

<?php if($this->session->flashdata("success")) { ?>
	<div class="alert alert-success text-center" role="alert">
		<strong> <?= $this->session->flashdata("success") ?> </strong>
	</div>
<?php } ?>

<?php if($this->session->flashdata("danger")) { ?>
	<div class="alert alert-danger text-center" role="alert">
		<strong> <?= $this->session->flashdata("danger") ?> </strong>
	</div>
<?php } ?>