<?php

$servidor = "localhost"; // esse é o servidor
$usuario = "root";       // root é padrao
$senha = "";             // não tem senha
$dbname = "bd";          // nome da base de dados, não do banco !


// Criar Conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

?>