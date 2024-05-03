<?php 

// Configurações do servidor
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "painelcrud";

$con = mysqli_connect($host, $user, $pass, $db) or die("Erro: ".mysqli_connect_error());

// Configurações do site
$titulo = "Painel de Controle";
$descricao = "painel em progresso";

?>