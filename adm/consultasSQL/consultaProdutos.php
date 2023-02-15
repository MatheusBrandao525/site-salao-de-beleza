<?php

// Verifica se a conexão com o banco de dados foi estabelecida com sucesso
if (!isset($conn)) {
    die("Erro: Não foi possível conectar ao banco de dados.");
}

try {
    // Executa a consulta com um limite de 100 registros
    $consultaProdutos = $conn->prepare("SELECT * FROM tbl_produtos LIMIT 100");
    $consultaProdutos->execute();

    // Recupera os resultados da consulta como um array associativo
    $exibeProdutos = $consultaProdutos->fetchAll(PDO::FETCH_ASSOC);

    // Exibe os dados na tela de forma organizada e segura
/*     echo "<table>";
    echo "<tr><th>Id</th><th>Nome</th><th>Descrição</th><th>Preço</th></tr>";
    foreach ($exibeProdutos as $produto) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($produto['id']) . "</td>";
        echo "<td>" . htmlspecialchars($produto['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($produto['descricao']) . "</td>";
        echo "<td>" . htmlspecialchars($produto['preco']) . "</td>";
        echo "</tr>";
    }
    echo "</table>"; */

} catch (PDOException $e) {
    // Trata erros de consulta com PDOException
    die("Erro: " . $e->getMessage());
}

