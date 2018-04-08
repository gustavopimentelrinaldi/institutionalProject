<?php
	session_start();
	require_once '../models/init.php';
	require '../controllers/check.php';
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
<body>
	<nav class="navbar navbar-findcond">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Grade Horária</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-fw fa-bell-o"></i> Acesso 
							<span class="badge">
								<?php if($_SESSION['tipo_de_acesso'] == 1){ echo $_SESSION['tipo_de_acesso']; } else{ header('Location: index.php?erro=1'); }?>
							</span>
						</a>
					</li>
					<li class="active"><a href="#"><?php echo $_SESSION['user_name']; ?></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="well">
		<center><h1>Você está no painel <small>Direção</small></h1>
		<p>Bem-vindo ao seu painel, <?php echo $_SESSION['user_name']; ?> | <a href="../controllers/logout.php">Sair</a></p></center>
	</div>
	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
						<nav class="dropdown">
							<h1 class="panel-title dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Quadro de Horários <small><i class="glyphicon glyphicon-triangle-bottom"></i></small></h1>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a href="#">Segunda</a></li>
								<li><a href="#">Terça</a></li>
								<li><a href="#">Quarta</a></li>
								<li><a href="#">Quinta</a></li>
								<li><a href="#">Sexta</a></li>
								<li><a href="#">Sábado</a></li>
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
						<table class="table table-hover" id="dev-table">
							<thead>
								<tr>
									<th>#</th>
									<th>Curso</th>
									<th>Semestre</th>
									<th>Disciplina</th>
									<th>Turno</th>
									<th>Professor</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Kilgore</td>
									<td>Trout</td>
									<td>kilgore</td>
									<td>boblahblah</td>
									<td>boblahblah</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Bob</td>
									<td>boblahblah</td>
									<td>Loblaw</td>
									<td>boblahblah</td>
									<td>boblahblah</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Holden</td>
									<td>boblahblah</td>
									<td>Caulfield</td>
									<td>boblahblah</td>
									<td>penceyreject</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="js/bootstrap-3.1.0.min.js"></script>
	<script src="js/index.js">
	</script>
	<script>
		$('.dropdown-toggle').dropdown()
	</script>
</body>
</html>