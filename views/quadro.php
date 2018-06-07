<?php
	session_start();
	if($_SESSION['tipo_de_acesso'] == null){ header('Location: index.php?erro=1'); }
	$update = isset($_GET['update']) ? $_GET['update'] : 0;
	$delete = isset($_GET['delete']) ? $_GET['delete'] : 0;
	$create = isset($_GET['create']) ? $_GET['create'] : 0;
?>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Quadro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="quadro">
	<nav class="navigation">
		<div class="container">
			<header class="py-2">
	      <div class="row flex-nowrap justify-content-between align-items-center">
	        <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 text-center">
	          <img class="img-fluid" src="img/logo_escola.png" alt=""/>
	        </div>
	        <div class="col-4 d-flex justify-content-end align-items-center">
	          <a class="btn btn-sm btn-outline-secondary" href="#">Acesso <?php echo $_SESSION['tipo_de_acesso']; ?></a>
	        </div>
	      </div>
	    </header>
		  <div class="nav-scroller py-1 mb-2">
		    <nav class="nav d-flex justify-content-end">
		    	<a class="p-2 text-muted mr-auto" href="#"><?php echo $_SESSION['user_name']; ?></a>
		      <?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<a class='p-2 text-muted' href='cadastro.php''>Cadastrar</a>"; }?>
		      <a class="p-2 text-muted" href="../controllers/logout_controller.php">Sair</a>
		    </nav>
		  </div>
	  </div>
  </nav>

	<section class="content">
		<?php
			include('../controllers/alert_controller.php');
		?>
		<div class="mx-auto mb-5 mt-5 col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
			<div class="card">
			  <div class="card-header">
			    <div class="btn-group">
					  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Dia da semana
					  </button>
					  <div class="dropdown-menu">
					  	<li class="segunda"><a class="dropdown-item" href="#">Segunda</a></li>
					    <li class="terca"><a class="dropdown-item" href="#">Terça</a></li>
					    <li class="quarta"><a class="dropdown-item" href="#">Quarta</a></li>
					    <li class="quinta"><a class="dropdown-item" href="#">Quinta</a></li>
					    <li class="sexta"><a class="dropdown-item" href="#">Sexta</a></li>
					    <li class="sabado"><a class="dropdown-item" href="#">Sábado</a></li>
					  </div>
					</div>
			  </div>
			  <div class="card-body">
			  	<input id="dev-table-filter" class="form-control form-control-dark w-100" type="text" placeholder="Procurar" aria-label="Search" data-action="filter" data-filters="#dev-table">
			    <div class="table-responsive" id="dev-table">
					  <table class="table table-bordered tabela1">
					    <thead>
						    <tr>
						    	<th scope="col">Segunda</th>
									<th scope="col">Curso</th>
									<th scope="col">Turno</th>
									<th scope="col">Disciplina</th>
									<th scope="col">Professor</th>
									<th scope="col">Sala</th>
									<th scope="col">espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
						    </tr>
						  </thead>
						  <tbody>
						   <?php
									include('../controllers/table/segunda_controller.php');
								?>
						  </tbody>
					  </table>
					  <!-- segunda --> 
					  <table class="table table-bordered tabela2">
					    <thead>
						    <tr>
						    	<th scope="col">Terça</th>
									<th scope="col">Curso</th>
									<th scope="col">Turno</th>
									<th scope="col">Disciplina</th>
									<th scope="col">Professor</th>
									<th scope="col">Sala</th>
									<th scope="col">espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
						    </tr>
						  </thead>
						  <tbody>
						   <?php
									include('../controllers/table/terca_controller.php');
								?>
						  </tbody>
					  </table>
					  <!-- terca --> 
					  <table class="table table-bordered tabela3">
					    <thead>
						    <tr>
						    	<th scope="col">Quarta</th>
									<th scope="col">Curso</th>
									<th scope="col">Turno</th>
									<th scope="col">Disciplina</th>
									<th scope="col">Professor</th>
									<th scope="col">Sala</th>
									<th scope="col">espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
						    </tr>
						  </thead>
						  <tbody>
						   <?php
									include('../controllers/table/quarta_controller.php');
								?>
						  </tbody>
					  </table>
					  <!-- quarta --> 
					  <table class="table table-bordered tabela4">
					    <thead>
						    <tr>
						    	<th scope="col">Quinta</th>
									<th scope="col">Curso</th>
									<th scope="col">Turno</th>
									<th scope="col">Disciplina</th>
									<th scope="col">Professor</th>
									<th scope="col">Sala</th>
									<th scope="col">espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
						    </tr>
						  </thead>
						  <tbody>
						   <?php
									include('../controllers/table/quinta_controller.php');
								?>
						  </tbody>
					  </table>
					  <!-- quinta --> 
					  <table class="table table-bordered tabela5">
					    <thead>
						    <tr>
						    	<th scope="col">Sexta</th>
									<th scope="col">Curso</th>
									<th scope="col">Turno</th>
									<th scope="col">Disciplina</th>
									<th scope="col">Professor</th>
									<th scope="col">Sala</th>
									<th scope="col">espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
						    </tr>
						  </thead>
						  <tbody>
						   <?php
									include('../controllers/table/sexta_controller.php');
								?>
						  </tbody>
					  </table>
					  <!-- sexta --> 
					  <table class="table table-bordered tabela6">
					    <thead>
						    <tr>
						    	<th scope="col">Sábado</th>
									<th scope="col">Curso</th>
									<th scope="col">Turno</th>
									<th scope="col">Disciplina</th>
									<th scope="col">Professor</th>
									<th scope="col">Sala</th>
									<th scope="col">espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
						    </tr>
						  </thead>
						  <tbody>
						   <?php
									include('../controllers/table/sabado_controller.php');
								?>
						  </tbody>
						  
					  </table>
					  <!-- sábado -->
					</div>
			  </div>
		  <div class="card-footer text-muted">
		    Copyright
		  </div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/popper.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/index.js"></script>
	<script src="js/table.js"></script>
</body>
</html>
