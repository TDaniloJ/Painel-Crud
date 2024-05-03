<?php 

if(isset($_POST['Entrar'])) {

    $login = $_POST['nome'];
    $senha = $_POST['senha'];

    if(empty($login) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
    }

    $sql = "SELECT * FROM usuario WHERE nome = '$login' AND senha = '$senha'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: index.php");
    } else {
        echo "Conta não cadastrada!";
    }
}

?>