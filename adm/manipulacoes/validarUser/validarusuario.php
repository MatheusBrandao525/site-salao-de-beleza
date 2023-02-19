<?php
session_start();
require '../../config/conexao.php';

// verifica se houve requisição via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // obtém os dados do formulário via POST e os filtra
    $nome = filter_var($_POST['loginNome'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sobrenome = filter_var($_POST['loginSobrenome'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['loginEmail'], FILTER_SANITIZE_EMAIL);
    $senha = filter_var($_POST['loginSenha'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // verifica se os dados estão preenchidos
    if (!empty($nome) && !empty($sobrenome) && !empty($email) && !empty($senha)) {
        // prepara a query para verificar se o cliente já existe na tabela
        $stmt = $conn->prepare("SELECT * FROM tbl_cliente WHERE nome = :nome AND Sobrenome = :sobrenome AND email = :email AND senha = :senha");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        // conta o número de linhas afetadas pela consulta
        $numRows = $stmt->rowCount();

        // verifica se o cliente já existe
        if ($numRows == 1) {
            // armazena o cliente_id na sessão
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['usuario_id'] = $result['usuario_id'];

            // redireciona para a página de boas-vindas
            header('Location: ../../../public/index.php');
            exit();
        } else {
            // cliente não existe
            echo "Cliente não encontrado";
        }
    } else {
        echo "Preencha todos os campos";
    }
}
