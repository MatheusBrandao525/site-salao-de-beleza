<?php
session_start();
require_once('../../config/conexao.php'); // inclua o arquivo de configuração com a conexão ao banco de dados

// Verifica se o ID do produto foi enviado
if (isset($_GET['idProduto']) && !empty($_GET['idUsuario'])) {
    $id_produto = $_GET['idProduto'];

    // Prepara a instrução SQL para deletar o produto
    $sql = "DELETE FROM tbl_carrinho WHERE produto_id = :id_produto";
    $deletarProduto = $conn->prepare($sql);
    $deletarProduto->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);

    // Executa a instrução SQL
    try {
        $deletarProduto->execute();
        echo "Produto deletado com sucesso.";
        header('location:../../../app/pages/carrinho/carrinho.php');
    } catch (PDOException $e) {
        echo "Erro ao deletar produto: " . $e->getMessage();
    }
} else {
    echo "ID do produto não enviado.";
}
?>
