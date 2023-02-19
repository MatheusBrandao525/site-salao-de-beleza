CREATE DATABASE banco_salao CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

/* Tabela para armazenar os horarios marcados */
CREATE TABLE tbl_horarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  data DATE NOT NULL,
  horario TIME NOT NULL,
  servico VARCHAR(255) NOT NULL,
  cliente VARCHAR(255) NOT NULL,
  telefone VARCHAR(15) NOT NULL,
  email VARCHAR(255) NOT NULL,
  observacoes VARCHAR(255) DEFAULT NULL,
  status ENUM('Confirmado', 'Cancelado') NOT NULL DEFAULT 'Confirmado'
);


/* Tabela para armazenar produtos */
CREATE TABLE tbl_produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  descricao TEXT NOT NULL,
  tipo ENUM('Shampoo', 'Condicionador', 'Máscara', 'Tratamento', 'Outro') NOT NULL,
  preco DECIMAL(10,2) NOT NULL,
  quantidade INT NOT NULL,
  imagem VARCHAR(255) DEFAULT NULL
);

/* Tabela de clientes */
CREATE TABLE tbl_cliente (
  usuario_id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  senha VARCHAR(100) NOT NULL,
  tipo ENUM ('ADMIN', 'COMUM') NOT NULL DEFAULT 'COMUM',
  telefone VARCHAR(15) NOT NULL,
  endereco VARCHAR(100) NOT NULL,
  cidade VARCHAR(100) NOT NULL,
  estado VARCHAR(100) NOT NULL,
  cep VARCHAR(10) NOT NULL,
  data_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)DEFAULT CHARACTER charset=utf8mb4;

/* Tabela de pedidos */
CREATE TABLE tbl_pedido (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_cliente INT NOT NULL,
  data_pedido DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  preco_total DECIMAL(10,2) NOT NULL,
  forma_pagamento ENUM('cartao', 'boleto', 'dinheiro') NOT NULL,
  status ENUM('pendente', 'pago', 'entregue') NOT NULL DEFAULT 'pendente',
  FOREIGN KEY (id_cliente) REFERENCES tbl_cliente (id)
);


/* tabela de produtos por pedido */
CREATE TABLE tbl_pedido_produto (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_pedido INT NOT NULL,
  id_produto INT NOT NULL,
  quantidade INT NOT NULL,
  preco DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (id) REFERENCES tbl_pedido (id),
  FOREIGN KEY (id) REFERENCES tbl_produtos (id)
);


/* Consulta para calcular o valor total do carrinho com o preço atalizado */
SELECT c.id, c.id_produto, c.quantidade, p.preco * c.quantidade AS subtotal, c.id_usuario, c.data
FROM carrinho c
JOIN produtos p ON c.id_produto = p.id

/* Tabela para carrinho de compras */
CREATE TABLE tbl_carrinho (
  id INT NOT NULL AUTO_INCREMENT,
  usuario_id INT NOT NULL,
  produto_id INT NOT NULL,
  quantidade INT NOT NULL,
  data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  FOREIGN KEY (usuario_id) REFERENCES tbl_cliente(usuario_id),
  FOREIGN KEY (produto_id) REFERENCES tbl_produtos(produto_id)
);



CREATE TABLE HorarioSalao (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    dia DATE NOT NULL,
    hora TIME NOT NULL,
    tipoServico VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);
