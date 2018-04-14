<?php
	session_start();
	require_once '../controllers/bdConnection.php';
	$query = "SELECT * FROM curso";
	$result = mysqli_query( $conn, $query );
	mysqli_close($conn);
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
				<?php if($_SESSION['tipo_de_acesso'] == 1){ echo "<li><a href='cadastro.php'>Cadastrar Curso</a></li>"; }?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-fw fa-bell-o"></i> Acesso 
							<span class="badge">
								<?php echo $_SESSION['tipo_de_acesso']; ?>
							</span>
						</a>
					</li>
					<li class="active"><a href="#"><?php echo $_SESSION['user_name']; ?></a></li>
					<li><a href='../controllers/logout.php'>Sair</a></li>
				</ul>
			</div>
		</div>
	</nav>

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
									<th>Turno</th>
									<th>Disciplina</th>
									<th>Professor</th>
									<th>Sala</th>
									<th>espaco</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							<?php
								if(mysqli_num_rows($result) > 0 && $_SESSION['tipo_de_acesso'] == 1) {
									while( $row = mysqli_fetch_assoc($result) ) {
										echo "<tr><td>" . $row['id'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['turno'] . "</td><td>" . $row['disciplina'] . "</td><td>" . $row['professor'] . "</td><td>" . $row['sala'] . "</td><td>" . $row['espaco'] . "</td><td><a href='editaCurso.php' class='btn btn-primary btn-md'>Editar</a></td></tr>";
									}
								} else if(mysqli_num_rows($result) > 0 && $_SESSION['tipo_de_acesso'] == 0){
									while( $row = mysqli_fetch_assoc($result) ) {
										echo "<tr><td>" . $row['id'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['turno'] . "</td><td>" . $row['disciplina'] . "</td><td>" . $row['professor'] . "</td><td>" . $row['sala'] . "</td><td>" . $row['espaco'] . "</td><td></td></tr>";
									}
								}else {
										echo "<div class='alert alert-warning container'>Nenhum cadastro para mostrar!</div>";
								}
								?>
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