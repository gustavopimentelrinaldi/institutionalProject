<?php
$pdo = new PDO("mysql:host=localhost;dbname=Quadro", "root", "");
 
if (!$pdo) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
echo "Conexão com o BD estabelecida!";
?>