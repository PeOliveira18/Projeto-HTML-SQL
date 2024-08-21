<?php
    if(isset($_POST['submit']))
    {
        /* print_r('Nome:' .  $_POST['nome']);
        print_r('<br>');
        print_r('Email:' . $_POST['email']);
        print_r('<br>');
        print_r('Senha:' . $_POST['senha']); */

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method ="POST">
        <div class='app-container'>
            <div register-container>
                <h1 class='register-title'>Cadastro</h1>
                <input type="text" name='nome' placeholder='Nome' class='register-input'/>
                <input type="text" name='email' placeholder='Email' class='register-input'>
                <input type="password" name='senha' placeholder='Senha' class='register-input'/>
                <input type = "submit" name = "submit"  id = "submit"></input>
    </form>
</body>
</html>