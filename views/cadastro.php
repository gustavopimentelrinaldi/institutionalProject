<?php
	session_start();
	if(!$_SESSION['tipo_de_acesso'] == 1){ header('Location: index.php'); }
	include('../models/functions.php');
	include('../controllers/cadastro_controller.php');
?>

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
		      <a class="p-2 text-muted" href="quadro.php">Voltar</a>
		      <a class="p-2 text-muted" href="../controllers/logout_controller.php">Sair</a>
		    </nav>
		  </div>
	  </div>
  </nav>


	<section class="cadastro mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="card col-11 col-sm-10 col-md-8 col-lg-5 col-xl-5">
					<img class="img-fluid mx-auto mt-3" src="img/logo_escola.png"/>
				  <form method="post" action="../controllers/cadastro_controller.php">
			      <div class="form-label-group mt-4 mx-auto col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			      	<label class="cad" for="inputCurso">Curso:</label>
			        <input type="text" id="inputCurso" class="form-control" placeholder="TADS" name="nome" required/>
			      </div>
	
			      <div class="form-label-group mx-auto col-12 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			      	<label class="cad" for="inputTurno">Turno:</label>
			        <input type="text" id="inputTurno" class="form-control" placeholder="NOT" name="turno" required/>
			      </div>

			      <div class="form-label-group mx-auto col-12 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			      	<label class="cad" for="inputEspaco">Espaço:</label>
			        <input type="text" id="inputEspaco" class="form-control" placeholder="P12, P13" name="espaco" required/>
			      </div>

			      <div class="form-label-group mx-auto col-12 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			      	<label class="cad" for="inputDisciplina">Disciplina:</label>
			        <input type="text" id="inputDisciplina" class="form-control" placeholder="Banco de Dados" name="disciplina" required/>
			      </div>

			      <div class="form-label-group mx-auto col-12 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			      	<label class="cad" for="inputSala">Sala:</label>
			        <input type="text" id="inputSala" class="form-control" placeholder="1, 2, 3..." name="sala" required/>
			      </div>

			      <div class="form-label-group mx-auto col-12 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			      	<label class="cad" for="inputProfessor">Professor:</label>
			        <input type="text" id="inputProfessor" class="form-control" placeholder="Professor" name="professor" required/>
			      </div>

			      <div class="form-label-group mx-auto col-12 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			      	<hr>
			       	<button id="log" name="add" class="btn btn-primary btn-block" type="submit">Cadastrar</button>
			      </div>
			      <p class="mt-3 text-muted text-center">&copy; 2018</p>
			    </form>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script>
		$('.close').click(function(){
			$('.alert').fadeOut();
		});
	</script>
</body>
</html>