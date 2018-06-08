<?php
  require_once '../controllers/bdConnection.php';
  $query = "SELECT * FROM quinta";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0 && $_SESSION['tipo_de_acesso'] == 1) {
    while( $row = mysqli_fetch_assoc($result) ) {
      echo "<tr>";
        echo "<td>" . $row['id'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['turno'] . "</td><td>" . $row['disciplina'] . "</td><td>" . $row['professor'] . "</td><td>" . $row['sala'] . "</td><td>" . $row['espaco'] . "</td>";
        echo '<td class="text-center"><a href="editaCurso.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Editar</a></td>';
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