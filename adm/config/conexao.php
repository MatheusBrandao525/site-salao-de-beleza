<?php

$servername = "localhost"; // nome do servidor
$username = "root"; // nome do usuário
$password = "1exagon1@"; // senha do usuário
$dbname = "banco_salao"; // nome do banco de dados

// Cria uma conexão com o banco de dados
$conn = new PDO("mysql:host=$servername;port=3307;dbname=$dbname", $username, $password);

// Verifica se houve algum erro na conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Se chegou aqui, a conexão foi bem-sucedida
/* echo "Conexão bem-sucedida"; */
?>