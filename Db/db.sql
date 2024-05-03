CREATE database painelcrud;
use painelcrud;

CREATE TABLE `usuario` {
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `senha` varchar(255) NOT NULL
}

CREATE TABLE `tarefas` {
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` varchar(255) NOT NULL,
    `descricao` varchar(255) NOT NULL,
    `status` varchar(255) NOT NULL
}

CREATE TABLE `produtos` {
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` varchar(255) NOT NULL,
    `descricao` varchar(255) NOT NULL,
    `preco` varchar(255) NOT NULL,
    'quantidade' int NOT NULL
}

