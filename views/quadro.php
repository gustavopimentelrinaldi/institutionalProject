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
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="index">
	<nav class="navbar navbar-findcond">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar glyphicon glyphicon-option-vertical"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Grade Horária</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
					<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<li><a href='cadastro.php'>Cadastrar Curso</a></li>"; }?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-fw fa-bell-o"></i> acesso 
							<span class="badge">
								<?php echo $_SESSION['tipo_de_acesso']; ?>
							</span>
						</a>
					</li>
					<li class="active"><a href="#"><?php echo $_SESSION['user_name']; ?></a></li>
					<li><a href='../controllers/logout_controller.php'>sair</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="content">
		<?php
			include('../controllers/alert_controller.php');
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<nav class="dropdown">
								<h1 class="panel-title dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Quadro de Horários <small><i class="glyphicon glyphicon-triangle-bottom"></i></small></h1>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li class="segunda"><a href="#">Segunda</a></li>
									<li class="terca"><a href="#">Terça</a></li>
									<li class="quarta"><a href="#">Quarta</a></li>
									<li class="quinta"><a href="#">Quinta</a></li>
									<li class="sexta"><a href="#">Sexta</a></li>
									<li class="sabado"><a href="#">Sábado</a></li>
								</ul>
							</nav>
						
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Filtrar" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtrar" />
					</div>
					<div class="table-responsive" id="dev-table">
						<table class="table table-hover table-bordered table-striped tabela1">
							<thead class='align'>
								<tr class='align'>
									<th class='align'>Segunda</th>
									<th class='align'>Curso</th>
									<th class='align'>Turno</th>
									<th class='align'>Disciplina</th>
									<th class='align'>Professor</th>
									<th class='align'>Sala</th>
									<th class='align'>espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
								</tr>
							</thead>
							<tbody>
							<?php
								include('../controllers/table/segunda_controller.php');
							?>
							</tbody>
						</table>

						<table class="table table-hover table-bordered table-striped tabela2">
							<thead>
								<tr class='align'>
									<th class='align'>Terça</th>
									<th class='align'>Curso</th>
									<th class='align'>Turno</th>
									<th class='align'>Disciplina</th>
									<th class='align'>Professor</th>
									<th class='align'>Sala</th>
									<th class='align'>espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
								</tr>
							</thead>
							<tbody>
							<?php
								include('../controllers/table/terca_controller.php');
							?>
							</tbody>
						</table>

						<table class="table table-hover table-bordered table-striped tabela3">
							<thead>
								<tr class='align'>
									<th class='align'>Quarta</th>
									<th class='align'>Curso</th>
									<th class='align'>Turno</th>
									<th class='align'>Disciplina</th>
									<th class='align'>Professor</th>
									<th class='align'>Sala</th>
									<th class='align'>espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
								</tr>
							</thead>
							<tbody>
							<?php
								include('../controllers/table/quarta_controller.php');
							?>
							</tbody>
						</table>

						<table class="table table-hover table-bordered table-striped tabela4">
							<thead>
								<tr class='align'>
									<th class='align'>Quinta</th>
									<th class='align'>Curso</th>
									<th class='align'>Turno</th>
									<th class='align'>Disciplina</th>
									<th class='align'>Professor</th>
									<th class='align'>Sala</th>
									<th class='align'>espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
								</tr>
							</thead>
							<tbody>
							<?php
								include('../controllers/table/quinta_controller.php');
							?>
							</tbody>
						</table>

						<table class="table table-hover table-bordered table-striped tabela5">
							<thead>
								<tr class='align'>
									<th class='align'>Sexta</th>
									<th class='align'>Curso</th>
									<th class='align'>Turno</th>
									<th class='align'>Disciplina</th>
									<th class='align'>Professor</th>
									<th class='align'>Sala</th>
									<th class='align'>espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
								</tr>
							</thead>
							<tbody>
							<?php
								include('../controllers/table/sexta_controller.php');
							?>
							</tbody>
						</table>

						<table class="table table-hover table-bordered table-striped tabela6">
							<thead>
								<tr class='align'>
									<th class='align'>Sábado</th>
									<th class='align'>Curso</th>
									<th class='align'>Turno</th>
									<th class='align'>Disciplina</th>
									<th class='align'>Professor</th>
									<th class='align'>Sala</th>
									<th class='align'>espaco</th>
									<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<th></th>"; } ?>
								</tr>
							</thead>
							<tbody>
							<?php
								include('../controllers/table/sabado_controller.php');
								mysqli_close($conn);
							?>
							</tbody>
						</table>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="js/bootstrap-3.1.0.min.js"></script>
	<script src="js/index.js"></script>
	<script src="js/table.js"></script>
</body>
</html>
