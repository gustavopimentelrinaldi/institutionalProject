<?php
	session_start();
	if(!$_SESSION['tipo_de_acesso'] == 1){ header('Location: index.php'); }
	include('../controllers/bdConnection.php');
	include('../models/functions.php');

	if( isset( $_POST['add'] ) ) {
   
    $nome = $turno = $espaco = $disciplina = $sala = $professor = "";
    
    $nome         = htmlspecialchars( $_POST["nome"] );
    $turno        = htmlspecialchars( $_POST["turno"] );
    $espaco       = htmlspecialchars( $_POST["espaco"] );
    $disciplina   = htmlspecialchars( $_POST["disciplina"] );
    $sala         = htmlspecialchars( $_POST["sala"] );
    $professor    = htmlspecialchars( $_POST["professor"] );
    
    if($nome) {
			$query = "INSERT INTO curso (id, nome, turno, espaco, disciplina, sala, professor) VALUES (default, '$nome', '$turno', '$espaco', '$disciplina', '$sala', '$professor')";
			$result = mysqli_query( $conn, $query );

			if($result) {
				header("Location: quadro.php");
			} else {
				echo "Error: ". $query ."<br>" . mysqli_error($conn);
			}
	}
}
mysqli_close($conn);
?>

<html lang="PT-BR">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrar ~ Quadro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<nav class="navbar navbar-findcond navbar-fixed-top">
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
				<li class="active"><a href="quadro.php">Voltar</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-fw fa-bell-o"></i> Acesso 
							<span class="badge">
								<?php if($_SESSION['tipo_de_acesso'] == 1){ echo $_SESSION['tipo_de_acesso']; }?>
							</span>
						</a>
					</li>
					<li class="active"><a href="#"><?php echo $_SESSION['user_name']; ?></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="register">
		<div class="container">
			<div class="card card-container">
				<img class="profile-img-card" src="img/logo_escola.png" />
				<p id="profile-name" class="profile-name-card"></p>
				<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" class="form-signin">
					<span id="reauth-email" class="reauth-email"></span>
						<input type="text" id="inputCurso" class="form-control" placeholder="Curso" name="nome" required/>
						<input type="text" id="inputTurno" class="form-control" placeholder="Turno" name="turno" required/>
						<input type="text" id="inputEspaco" class="form-control" placeholder="Espaço(P12, P13)" name="espaco" required/>
						<input type="text" id="inputDisciplina" class="form-control" placeholder="Disciplina" name="disciplina" required/>
						<input type="text" id="inputSala" class="form-control" placeholder="Sala" name="sala" required/>
						<input type="text" id="inputProfessor" class="form-control" placeholder="Professor" name="professor" required/>
	
					<button type="submit" name="add" class="btn btn-lg btn-primary btn-block btn-signin">Cadastrar</button>
				</form><!-- /form -->
			</div><!-- /card-container -->
		</div><!-- /container -->
	</section>
</body>
</html>