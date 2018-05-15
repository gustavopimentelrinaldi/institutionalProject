<?php
	$cursoID = $_GET['id'];
	$query = "(SELECT * FROM segunda WHERE id='$cursoID')
						UNION 
						(SELECT * FROM terca WHERE id='$cursoID')
						UNION 
						(SELECT * FROM quarta WHERE id='$cursoID')
						UNION 
						(SELECT * FROM quinta WHERE id='$cursoID')
						UNION 
						(SELECT * FROM sexta WHERE id='$cursoID')
						UNION 
						(SELECT * FROM sabado WHERE id='$cursoID')";
  
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			$nome         = $row['nome'];
			$turno        = $row['turno'];
			$espaco       = $row['espaco'];
			$disciplina   = $row['disciplina'];
			$sala         = $row['sala'];
			$professor    = $row['professor'];
		}
	}

	if( isset($_POST['update']) ){
    // set variables
    $nome         = validateFormData( $_POST["nome"] );
    $turno        = validateFormData( $_POST["turno"] );
    $espaco       = validateFormData( $_POST["espaco"] );
    $disciplina   = validateFormData( $_POST["disciplina"] );
    $sala         = validateFormData( $_POST["sala"] );
    $professor    = validateFormData( $_POST["professor"] );
    
    // new database query & result
    $query = "UPDATE segunda, terca, quarta, quinta, sexta, sabado
							SET segunda.nome = '$nome',
							segunda.turno = '$turno',
							segunda.espaco = '$espaco',
							segunda.disciplina = '$disciplina',
							segunda.sala = '$sala',
							segunda.professor = '$professor',

							terca.nome = '$nome',
							terca.turno = '$turno',
							terca.espaco = '$espaco',
							terca.disciplina = '$disciplina',
							terca.sala = '$sala',
							terca.professor = '$professor',

							quarta.nome = '$nome',
							quarta.turno = '$turno',
							quarta.espaco = '$espaco',
							quarta.disciplina = '$disciplina',
							quarta.sala = '$sala',
							quarta.professor = '$professor',

							quinta.nome = '$nome',
							quinta.turno = '$turno',
							quinta.espaco = '$espaco',
							quinta.disciplina = '$disciplina',
							quinta.sala = '$sala',
							quinta.professor = '$professor',

							sexta.nome = '$nome',
							sexta.turno = '$turno',
							sexta.espaco = '$espaco',
							sexta.disciplina = '$disciplina',
							sexta.sala = '$sala',
							sexta.professor = '$professor',

							sabado.nome = '$nome',
							sabado.turno = '$turno',
							sabado.espaco = '$espaco',
							sabado.disciplina = '$disciplina',
							sabado.sala = '$sala',
							sabado.professor = '$professor'

							WHERE segunda.id = '$cursoID' AND terca.id = '$cursoID' AND quarta.id = '$cursoID'
							AND quinta.id = '$cursoID' AND sexta.id = '$cursoID' AND sabado.id = '$cursoID'";
    
    $result = mysqli_query($conn, $query);
    
    if($result) {
      // redirect to client page with query string
			header("Location: quadro.php?update=1");
    } else {
      echo "Error updating record: " . mysqli_error($conn); 
    }
	}

	// if confirm delete button was submitted
	if(isset($_POST['confirm-delete'])){
		// new database query & result
		$query = "DELETE FROM segunda WHERE id='$cursoID'";
		$result = mysqli_query($conn, $query);
		
		if($result) {
			// redirect to client page with query string
			header("Location: quadro.php?delete=1");
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}
	}
  mysqli_close($conn);
?>