<?php
	$cursoID = $_GET['id'];
	$query = "SELECT * FROM curso WHERE id='$cursoID'";
	$result = mysqli_query($conn, $query);
	
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
    $query = "UPDATE curso
							SET nome = '$nome',
							turno = '$turno',
							espaco = '$espaco',
							disciplina = '$disciplina',
							sala = '$sala',
							professor = '$professor'
							WHERE id = '$cursoID'";
    
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
		$query = "DELETE FROM curso WHERE id='$cursoID'";
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