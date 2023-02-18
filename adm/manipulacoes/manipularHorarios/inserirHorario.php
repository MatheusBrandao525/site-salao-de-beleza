<?php
session_start();
require '../../config/conexao.php';

// Verifica se a conexão com o banco de dados foi estabelecida com sucesso
if (!isset($conn)) {
    die("Erro: Não foi possível conectar ao banco de dados.");
}

// Definir valores para inserir na tabela
$nome = $_POST['nomecliente'];
$email = $_POST['emailcliente'];
$dia = $_POST['diaservico'];
$hora = $_POST['horaservico'];
$tipoServico = $_POST['selecionarservico'];

// Verificar se o horário já existe na tabela
$stmt = $conn->prepare("SELECT * FROM horariosalao WHERE dia = :dia AND hora = :hora");
$stmt->bindParam(':dia', $dia);
$stmt->bindParam(':hora', $hora);
$stmt->execute();

// Se o horário já existir, exibir mensagem de erro e encerrar o script
if ($stmt->rowCount() > 0) {
    header("Location:../../../public/index.php?mensagem=Este horario já esta marcado!#marcarHorario");
    exit();
}

// Tentar inserir na tabela, e redirecionar para a página principal com uma mensagem de sucesso caso funcione
try {
    // Preparar a instrução SQL com marcadores de posição
    $inserirHorario = $conn->prepare("INSERT INTO horariosalao (nome, email, dia, hora, tipoServico) VALUES (:nome, :email, :dia, :hora, :tipoServico)");

    // Vincular valores aos marcadores de posição com bindParam
    $inserirHorario->bindParam(':nome', $nome);
    $inserirHorario->bindParam(':email', $email);
    $inserirHorario->bindParam(':dia', $dia);
    $inserirHorario->bindParam(':hora', $hora);
    $inserirHorario->bindParam(':tipoServico', $tipoServico);
    $inserirHorario->execute();

    header("Location:../../../public/index.php?mensagem=Horário inserido com sucesso!#marcarHorario");
} catch (Exception $e) {
    echo 'Erro: ' . $e->getMessage();
    header("Location:../../../public/index.php?mensagem=Ocorreu um erro ao inserir o horário.#marcarHorario");
}






