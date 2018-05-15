<?php
  require_once '../controllers/bdConnection.php';
  if( isset( $_POST['add'] ) ) {
    $nome = $turno = $espaco = $disciplina = $sala = $professor = "";
    $nome         = htmlspecialchars( $_POST["nome"] );
    $turno        = htmlspecialchars( $_POST["turno"] );
    $espaco       = htmlspecialchars( $_POST["espaco"] );
    $disciplina   = htmlspecialchars( $_POST["disciplina"] );
    $sala         = htmlspecialchars( $_POST["sala"] );
    $professor    = htmlspecialchars( $_POST["professor"] );
    
    if($nome) {
      $query = "INSERT INTO segunda (id, nome, turno, espaco, disciplina, sala, professor) VALUES (default, '$nome', '$turno', '$espaco', '$disciplina', '$sala', '$professor')";
      $result = mysqli_query( $conn, $query );

      if($result) {
        header("Location: ../views/quadro.php?create=1");
      } else {
        echo "Error: ". $query ."<br>" . mysqli_error($conn);
      }
    }
  }
  mysqli_close($conn);
?>