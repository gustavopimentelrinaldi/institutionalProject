<?php
  if($update == 1){
    echo 
    '<div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Atualizado!</strong>
    </div>';
  }
?>

<?php
  if($delete == 1){
    echo 
    '<div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Excluido!</strong>
    </div>';
  }
?>

<?php
  if($create == 1){
    echo 
    '<div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Adicionado!</strong>
    </div>';
  }
?>