<?php
	session_start();
	if(!$_SESSION['tipo_de_acesso'] == 1){ header('Location: index.php'); }
	include('../controllers/bdConnection.php');
	include('../models/functions.php');
	include('../controllers/editaCurso_controller.php');
?>

<!DOCTYPE HTML>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrar ~ Quadro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="index">
	<nav class="navbar navbar-findcond">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar glyphicon glyphicon-option-vertical"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Grade Horária</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="quadro.php">voltar</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<i class="fa fa-fw fa-bell-o"></i> acesso 
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

	<nav class="navigation">
		<div class="container">
			<header class="py-2">
	      <div class="row flex-nowrap justify-content-between align-items-center">
	        <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 text-center">
	          <img class="img-fluid" src="img/logo_escola.png" alt=""/>
	        </div>
	        <div class="col-4 d-flex justify-content-end align-items-center">
	          <a class="btn btn-sm btn-outline-info" href="index.php">Usuário</a>
	        </div>
	      </div>
	    </header>
	  </div>
	</nav>

	<section class="register">
		<?php
			// if delete button was submitted
			if(isset($_POST['delete'])){
				echo "<div class='alert alert-danger alert-dismissible' style='text-align: center;'>
								<h3>Você tem certeza de que quer excluir esse curso?</h3><br>
								<form action='". htmlspecialchars( $_SERVER["PHP_SELF"] ) ."?id=$cursoID' method='post'>
									<input type='submit' class='btn btn-danger' name='confirm-delete' value='Sim!'>
									<a type='button' class='btn btn-default' href='quadro.php'>Oops, não!</a>
								</form>
							</div>";
			}
		?>
		
		<div class="container">
			<div class="card card-container">
				<img class="profile-img-card" src="img/logo_escola.png" />
				<p id="profile-name" class="profile-name-card"></p>
				<form class="form-signin" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $cursoID; ?>" method="post">
					<span id="reauth-email" class="reauth-email"></span>
						<input type="text" id="inputCurso" class="form-control" placeholder="Curso" name="nome" value="<?php echo $nome; ?>" required/>
						<input type="text" id="inputTurno" class="form-control" placeholder="Turno" name="turno" value="<?php echo $turno; ?>" required/>
						<input type="text" id="inputEspaco" class="form-control" placeholder="Espaço(P12, P13)" name="espaco" value="<?php echo $espaco; ?>" required/>
						<input type="text" id="inputDisciplina" class="form-control" placeholder="Disciplina" name="disciplina" value="<?php echo $disciplina; ?>" required/>
						<input type="text" id="inputSala" class="form-control" placeholder="Sala" name="sala" value="<?php echo $sala; ?>" required/>
						<input type="text" id="inputProfessor" class="form-control" placeholder="Professor" name="professor" value="<?php echo $professor; ?>" required/>
					<button class="btn btn-info btn-block" type="submit" name="update">Atualizar</button>
					<button class="btn btn-danger btn-block" type="submit" name="delete">Deletar</button>
				</form><!-- /form -->
			</div><!-- /card-container -->
		</div><!-- /container -->
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
	<script>
		$('.close').click(function(){
			$('.alert').fadeOut();
		});
	</script>
</body>
</html>