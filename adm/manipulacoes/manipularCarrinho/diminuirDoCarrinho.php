<?php
session_start();

require '../../config/conexao.php';

$idProduto = $_GET['idProduto'];

// Recupera o ID do usuário a partir da sessão ou de outra forma
$idUser = 1;

// Verifica se o produto já existe no carrinho
$consultaCarrinho = $conn->prepare("SELECT * FROM tbl_carrinho WHERE usuario_id = ? AND produto_id = ?");
$consultaCarrinho->execute([$idUser, $idProduto]);
$exibeDadosCarrinho = $consultaCarrinho->fetch(PDO::FETCH_ASSOC);

if ($exibeDadosCarrinho) {
    // Recupera a quantidade atual do produto no carrinho
    $quantidadeAtual = $exibeDadosCarrinho['quantidade'];

    // Calcula a nova quantidade do produto no carrinho
    $novaQuantidade = $quantidadeAtual - 1;

    if ($novaQuantidade >= 1) {
        // Atualiza a quantidade do produto no carrinho
        $atualizaCarrinho = $conn->prepare("UPDATE tbl_carrinho SET quantidade = ? WHERE usuario_id = ? AND produto_id = ?");
        $atualizaCarrinho->execute([$novaQuantidade, $idUser, $idProduto]);
        echo "Quantidade do produto atualizada com sucesso!";
        header('location:../../../app/pages/carrinho/carrinho.php');
    } else {
        // Remove o produto do carrinho
        $removeCarrinho = $conn->prepare("DELETE FROM tbl_carrinho WHERE usuario_id = ? AND produto_id = ?");
        $removeCarrinho->execute([$idUser, $idProduto]);
        echo "Produto removido do carrinho!";
        header('location:../../../app/pages/carrinho/carrinho.php');
    }
} else {
    echo "Produto não encontrado no carrinho.";
}