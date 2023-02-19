<?php
session_start();

if (isset($_SESSION['usuario_id'])) {
    $usuario_id = $_SESSION['usuario_id'];
    
    // Query para obter o nome e tipo do usuário logado
    $stmt = $conn->prepare("SELECT nome, tipo FROM tbl_cliente WHERE usuario_id = :usuario_id");
    $stmt->bindParam(':usuario_id', $usuario_id);
    $stmt->execute();

    // Obtém o resultado da consulta
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se o usuário é comum ou admin
    if ($result['tipo'] === 'ADMIN') {
        $nomeUsuarioLogado = 'ADMIM';
        // Exibe opções adicionais de menu ou ações disponíveis para administradores
    } else {
        $nomeUsuarioLogado =  $result['nome'];
        // Exibe opções de menu ou ações disponíveis para usuários comuns
    }
}