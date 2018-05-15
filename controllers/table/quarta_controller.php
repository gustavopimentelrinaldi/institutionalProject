<?php
  require_once '../controllers/bdConnection.php';
  $query = "SELECT * FROM quarta";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0 && $_SESSION['tipo_de_acesso'] == 1) {
    while( $row = mysqli_fetch_assoc($result) ) {
      echo "<tr class='align'>";
        echo "<td>" . $row['id'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['turno'] . "</td><td>" . $row['disciplina'] . "</td><td>" . $row['professor'] . "</td><td>" . $row['sala'] . "</td><td>" . $row['espaco'] . "</td>";
        echo '<td><a href="editaCurso.php?id=' . $row['id'] . '" class="btn btn-warning btn-md">Editar</a></td>';
      echo "</tr>";
    }
  } else if(mysqli_num_rows($result) > 0 && $_SESSION['tipo_de_acesso'] == 0){
    while( $row = mysqli_fetch_assoc($result) ) {
      echo "<tr><td>" . $row['id'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['turno'] . "</td><td>" . $row['disciplina'] . "</td><td>" . $row['professor'] . "</td><td>" . $row['sala'] . "</td><td>" . $row['espaco'] . "</td></tr>";
    }
  }else {
      echo "<div class='alert alert-warning container'>Nenhum cadastro para mostrar!</div>";
  }
?>