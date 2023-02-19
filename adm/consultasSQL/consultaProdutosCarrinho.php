<?php
// Verifica se a conexão com o banco de dados foi estabelecida com sucesso
if (!isset($conn)) {
    die("Erro: Não foi possível conectar ao banco de dados.");
}

// Recupera o ID do usuário a partir da sessão ou de outra forma
$idUser = 1;

$valorTotalCarrinho = 0;
$valorFrete = 0;

// Seleciona os produtos no carrinho
$consultaCarrinho = $conn->prepare("
    SELECT tbl_carrinho.quantidade, tbl_produtos.*
    FROM tbl_carrinho
    JOIN tbl_produtos ON tbl_carrinho.produto_id = tbl_produtos.produto_id
    WHERE tbl_carrinho.usuario_id = ?
");
$consultaCarrinho->execute([$idUser]);
$exibeDadosCarrinho = $consultaCarrinho->fetchAll(PDO::FETCH_ASSOC);