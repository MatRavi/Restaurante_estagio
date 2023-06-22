-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2023 às 14:19
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbdelivery`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `codcli` int(11) UNSIGNED NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `fone` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nasc` date DEFAULT NULL,
  `CEP` varchar(9) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `numero` int(10) DEFAULT NULL,
  `complemento` varchar(15) DEFAULT NULL COMMENT 'apartamento, bloco, lote, andar, sala, casa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Acionadores `tbcliente`
--
DELIMITER $$
CREATE TRIGGER `Tgr_Clivenda_Delete` AFTER DELETE ON `tbcliente` FOR EACH ROW BEGIN
    DELETE FROM tbvenda WHERE codcli = OLD.codcli;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `id_pro` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco` float(10,2) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`id_pro`, `nome`, `descricao`, `preco`, `tipo`) VALUES
(1, 'Pizza Margherita', 'Molho de tomate, queijo mussarela, tomate e manjericão', 25.99, 'pizzas'),
(2, 'Pizza Pepperoni', 'Molho de tomate, queijo mussarela e pepperoni', 28.99, 'pizzas'),
(4, 'Pizza Frango com Catupiry', 'Molho de tomate, queijo mussarela, frango desfiado e catupiry', 27.99, 'pizzas'),
(5, 'Pizza Quatro Queijos', 'Molho de tomate, queijo mussarela, queijo prato, queijo provolone e parmesão', 29.99, 'pizzas'),
(6, 'Pizza Portuguesa', 'Molho de tomate, queijo mussarela, presunto, cebola, ovos e azeitonas', 28.99, 'pizzas'),
(7, 'Pizza Vegetariana', 'Molho de tomate, queijo mussarela, tomate, cebola, pimentão e champignon', 27.99, 'pizzas'),
(9, 'Pizza Dois Amores', 'Molho de tomate, queijo mussarela, chocolate ao leite e chocolate branco', 30.99, 'pizzas doces'),
(11, 'Pizza de Camarão', 'Molho de tomate, queijo mussarela, camarão, cebola e azeitonas', 32.99, 'pizzas'),
(13, 'Pizza de Frango com Catupiry e Milho', 'Molho de tomate, queijo mussarela, frango desfiado, catupiry e milho', 31.99, 'pizzas'),
(14, 'Pizza de Calabresa Especial', 'Molho de tomate, queijo mussarela, calabresa, cebola, pimentão e azeitonas', 32.99, 'pizzas'),
(15, 'Pizza de Bacon com Milho', 'Molho de tomate, queijo mussarela, bacon e milho', 29.99, 'pizzas'),
(18, 'Pizza de Chocolate com Morango', 'Chocolate ao leite, chocolate branco e morangos', 30.99, 'pizzas doces'),
(19, 'Pizza de Banana com Canela', 'Banana, canela e leite condensado', 28.99, 'pizzas doces'),
(27, 'Pizza de Nutella', 'Nutella, morangos e banana', 31.99, 'pizzas doces'),
(31, 'Pizza de Morango', 'Deliciosa pizza de morango com cobertura de chocolate', 15.99, 'pizzas doces'),
(32, 'Pizza de Chocolate', 'Pizza de chocolate com raspas de chocolate belga', 14.99, 'pizzas doces'),
(33, 'Pizza de Frutas Vermelhas', 'Pizza com mix de frutas vermelhas e cobertura de chantilly', 16.99, 'pizzas doces'),
(34, 'Pizza de Nutella com Marshmallow', 'Pizza de Nutella com marshmallow derretido', 17.99, 'pizzas doces'),
(35, 'Pizza de Morango com Leite Condensado', 'Pizza de morango com leite condensado', 14.99, 'pizzas doces'),
(36, 'Pizza de Doce de Leite', 'Pizza de doce de leite com cobertura de caramelo', 15.99, 'pizzas doces'),
(37, 'Coca-Cola', 'Refrigerante Coca-Cola 350ml', 3.99, 'bebidas'),
(38, 'Guaraná Antarctica', 'Refrigerante Guaraná Antarctica 350ml', 3.99, 'bebidas'),
(39, 'Sprite', 'Refrigerante Sprite 350ml', 3.99, 'bebidas'),
(40, 'Fanta Laranja', 'Refrigerante Fanta Laranja 350ml', 3.99, 'bebidas'),
(41, 'Suco de Laranja', 'Suco de laranja natural 300ml', 5.99, 'bebidas'),
(42, 'Suco de Abacaxi', 'Suco de abacaxi natural 300ml', 5.99, 'bebidas'),
(43, 'Suco de Uva', 'Suco de uva integral 300ml', 5.99, 'bebidas'),
(44, 'Água Mineral', 'Água mineral sem gás 500ml', 2.99, 'bebidas'),
(45, 'Skol', 'Skol lata 350ml', 3.99, 'bebidas'),
(46, 'Antarctica', 'Antarctica lata 470ml', 4.99, 'bebidas'),
(47, 'Salada de Alface', 'Mix de folhas de alface frescas', 7.99, 'saladas'),
(48, 'Salada Caesar', 'Alface romana, frango grelhado, croutons e molho Caesar', 9.99, 'saladas'),
(49, 'Salada Caprese', 'Tomate, muçarela de búfala, manjericão e azeite de oliva', 8.99, 'saladas'),
(50, 'Salada Grega', 'Tomate, pepino, cebola roxa, azeitonas e queijo feta', 9.99, 'saladas'),
(51, 'Salada Waldorf', 'Maçã, aipo, nozes e maionese', 8.99, 'saladas'),
(52, 'Salada de Frutas', 'Mix de frutas frescas da estação', 7.99, 'saladas'),
(53, 'Salada de Grão de Bico', 'Grão de bico, tomate, pepino e ervas', 8.99, 'saladas'),
(54, 'Salada de Quinoa', 'Quinoa, legumes e vinagrete de limão', 9.99, 'saladas'),
(55, 'Salada Caesar com Frango', 'Alface romana, frango grelhado, croutons e molho Caesar', 10.99, 'saladas'),
(56, 'Salada Mediterrânea', 'Tomate, pepino, cebola roxa, azeitonas e queijo feta', 9.99, 'saladas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvenda`
--

CREATE TABLE `tbvenda` (
  `id_venda` int(11) UNSIGNED NOT NULL,
  `codcli` int(11) NOT NULL,
  `id_pro` varchar(100) NOT NULL,
  `quantidades` varchar(100) NOT NULL,
  `data_venda` date NOT NULL,
  `hora_venda` time NOT NULL,
  `valor_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`codcli`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`id_pro`);

--
-- Índices para tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `codcli` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `id_pro` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  MODIFY `id_venda` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
