
<!--Abri uma session para poder chamar a variavel global do php-->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD - CADASTRAR</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <!-- isset Vou chamar o metodo-->
    <!-- echo  Vou imprimir a mensagem-->
    <!-- unset Vou destrui o metodo -->
    <?php
    if(isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    ?>

    <!-- FORMULARIO vai enviar para a pagina processa -->
    <form method="POST" action="processa.php">

       
    <label>Nome: </label>
    <input type="text" name="nome" placeholder="Digite o nome completo">
    <br><br>

    <label>Senha: </label>
    <input type="password" name="senha" placeholder="Digite sua senha">
    <br><br>    

    <label>Email: </label>
    <input type="email" name="email" placeholder="Digite seu E-mail">
    <br><br>    

    <label>Telefone: </label>
    <input type="test" name="telefone" placeholder="Digite seu número">
    <br><br>

    <!--Botão para enviar os dados-->
    <input type="submit" value="Cadastrar">
    <br><br>    

    </form>
</body>
</html>