<?php
session_start();

require '../../config/conexao.php';

$idProduto = $_POST['numeroid'];
$quantidade = $_POST['quantidade'];

$consultaUser = $conn->prepare("SELECT * FROM tbl_cliente WHERE usuario_id = 1");
$consultaUser->execute();

$exibedadosUser = (int)$consultaUser->fetch(PDO::FETCH_ASSOC);

$idUser = $exibedadosUser;

// Verifica se o produto já existe na tabela de carrinho
$consultaCarrinho = $conn->prepare("SELECT * FROM tbl_carrinho WHERE produto_id = ? AND usuario_id = ?");
$consultaCarrinho->execute([$idProduto, $idUser]);

// Recupera os resultados da consulta como um array associativo
$exibeDadosCarrinho = $consultaCarrinho->fetchAll(PDO::FETCH_ASSOC);

// Verifica se a consulta retornou algum resultado
if ($exibeDadosCarrinho) {
    // O produto já existe no carrinho, atualiza a quantidade
    $idCarrinho = $exibeDadosCarrinho[0]['id'];
    $quantidadeCarrinho = $exibeDadosCarrinho[0]['quantidade'] + $quantidade;
    
    // Verifica se a quantidade de produtos solicitados é menor ou igual à quantidade de produtos em estoque
    $consultaProduto = $conn->prepare("SELECT * FROM tbl_produtos WHERE produto_id = ?");
    $consultaProduto->execute([$idProduto]);
    $exibeDadosProduto = $consultaProduto->fetchAll(PDO::FETCH_ASSOC);
    $quantidadeEstoque = $exibeDadosProduto[0]['quantidade'];
    
    if ($quantidadeCarrinho <= $quantidadeEstoque) {
        $update_query = "UPDATE tbl_carrinho SET quantidade = $quantidadeCarrinho WHERE id = $idCarrinho";
        $stmt = $conn->prepare($update_query);
        $stmt->execute();
    
        // Mensagem de sucesso
        echo "Quantidade do produto atualizada com sucesso!";
        header('location:../../../public/index.php');
    } else {
        // Mensagem de erro
        echo "Não há produtos suficientes em estoque.";
    }
} else {
    // O produto não existe no carrinho, insere um novo registro
    // Verifica se a quantidade de produtos solicitados é menor ou igual à quantidade de produtos em estoque
    $consultaProduto = $conn->prepare("SELECT * FROM tbl_produtos WHERE produto_id = ?");
    $consultaProduto->execute([$idProduto]);
    $exibeDadosProduto = $consultaProduto->fetchAll(PDO::FETCH_ASSOC);
    $quantidadeEstoque = $exibeDadosProduto[0]['quantidade'];
    
    if ($quantidade <= $quantidadeEstoque) {
        $stmt = $conn->prepare("INSERT INTO tbl_carrinho (usuario_id, produto_id, quantidade) VALUES (?, ?, ?)");
        $stmt->execute([$idUser, $idProduto, $quantidade]);
      
        // Mensagem de sucesso
        echo "Produto adicionado ao carrinho com sucesso!";
        header('location:../../../public/index.php');
    } else {
        // Mensagem de erro
        echo "Não há produtos suficiente";
    }
}