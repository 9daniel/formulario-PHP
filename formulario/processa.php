<?php

//Para chamar o metodo global
session_start();

//vou incluir a conexao de outra pagina
include_once("conexao.php");

//as variaveis vão receber os valores inseridos no formulario
$nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha    = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

// Sò para fazer teste para ver se tava funcionando !!
//echo "Nome: $nome";
//echo "<br>";

//echo "Senha: $senha";
//echo "<br>";

//echo "Email: $email";
//echo "<br>";

//echo "Telefone: $telefone";
//echo "<br>";
//Fim teste

//vai passar o conteudo das variaveis para o banco 
//now() vai pegar a hora e a data de agora 
// não esquecer as aspas simples nas variaveis !!

$result_usuario = "INSERT INTO usuarios (nome, senha, email, telefone, created) values ('$nome', '$senha', '$email', '$telefone', now())";
//vou execultar ela depois de pronto (vou passar a conexão e depois o result_usuario)
$resultado_usuario = mysqli_query($conn, $result_usuario);

// se a conexão retorna um id foi com sucesso
if(mysqli_insert_id($conn)){

    $_SESSION['msg'] = "<p style='color:green;'> Usuário cadastrado com sucesso</p>";
    //header vai voltar para a pagina inicial
    header("Location: index.php");
}

// se não retorna, não foi cadastrado
else{
    $_SESSION['msg'] = "<p style='color:red;'> Usuário não foi cadastrado</p>";
    //header vai voltar para a pagina inicial
    header("Location: index.php");
}



?>