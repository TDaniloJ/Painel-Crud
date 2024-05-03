<?php

require('config.php');

if (isset($_POST['registro'])) {
    $nome           = $_POST['nome'];
    $email          = $_POST['email'];
    $senha          = $_POST['senha'];
    $confirmaSenha  = $_POST['confirmaSenha'];

    if(empty($nome) || empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, insira um email válido.";
    }

    if ($senha != $confirmaSenha) {
        echo "As senhas não correspondem.";
    }

    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if (mysqli_query($con, $sql)) {
        header("Location: login.php");
        session_start();
        $_SESSION['nome'] = $nome;
        
    }
}

?>