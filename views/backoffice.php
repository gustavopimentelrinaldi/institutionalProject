<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title>Backoffice ~ Quadro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body class="adms">
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

	<section class="adm mt-5">
		<div class="container">
			<div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 alert alert-light alert-dismissible mx-auto" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Atenção!</strong> Você está na tela de login da Direção!
			</div>
			<div class="row justify-content-center">
				<div class="card col-11 col-sm-10 col-md-8 col-lg-5 col-xl-5">
					<img class="img-fluid mx-auto mt-3" src="img/logo_escola.png"/>
				  <form method="post" action="../controllers/backoffice_controller.php">
			      <div class="form-label-group mt-4 mx-auto col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			        <input type="email" id="email" class="form-control" name="email" placeholder="Email"/>
			      </div>

			      <div class="form-label-group mx-auto col-12 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			        <input type="password" id="senha" class="form-control" name="senha" placeholder="Senha"/>
			      </div>

			      <div class="form-label-group mx-auto col-12 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			       	<button id="log" class="btn btn-primary btn-block" name="entrar" type="submit">Entrar</button>
			       	<?php
								if($erro == 1){
									echo '<p class="mt-3" style="color: #FF0000;">Usuário e ou senha inválido(s)</p>';
								}
							?>
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