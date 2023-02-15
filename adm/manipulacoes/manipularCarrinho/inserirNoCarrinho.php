<?php
session_start();

require '../../config/conexao.php';

$idProduto = $_POST['numeroid'];
$quantidade = $_POST['quantidade'];

$consultaUser = $conn->prepare("SELECT * FROM tbl_cliente WHERE usuario_id = 1");
$consultaUser->execute();

$exibedadosUser = (int)$consultaUser->fetch(PDO::FETCH_ASSOC);

$idUser = $exibedadosUser;
echo $exibedadosUser;


$consultaProduto = $conn->prepare("SELECT * FROM tbl_produtos WHERE produto_id = {$idProduto}");

$consultaProduto->execute();

// Recupera os resultados da consulta como um array associativo
$exibeDadosProduto = $consultaProduto->fetchAll(PDO::FETCH_ASSOC);

// Verifica se a consulta retornou algum resultado
if ($exibeDadosProduto) {
    // Insere o registro na tabela de carrinho
    $stmt = $conn->prepare("INSERT INTO tbl_carrinho (usuario_id, produto_id, quantidade) VALUES (?, ?, ?)");
    $stmt->execute([$idUser, $idProduto, $quantidade,]);
  
    // Mensagem de sucesso
    echo "Produto adicionado ao carrinho com sucesso!";
    header('location:../../../public/index.php');
  } else {
    // Mensagem de erro
    echo "Produto não encontrado.";
  }