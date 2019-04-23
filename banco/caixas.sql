-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Abr-2019 às 16:08
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caixas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `Id_Fotos` int(11) NOT NULL,
  `Imagem` varchar(100) DEFAULT NULL,
  `Id_Produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`Id_Fotos`, `Imagem`, `Id_Produto`) VALUES
(1, 'download5cb5e821af3d4.jpg', 80),
(2, 'download5cb5e821af7bc.jpg', 80),
(3, 'download5cb5e821afba4.jpg', 80),
(4, 'download5cb5e821aff8c.jpg', 80),
(9, 'caixa15cb65d05ddb605cb72550e8ecd.jpg', 81),
(10, 'york25cb72550e92b5.png', 81),
(11, 'download5cb5e821aff8c5cb72550e969d.jpg', 81),
(12, 'download5cbf0c95c7d5f.jpg', 82),
(13, 'download5cbf0c95c8147.jpg', 82),
(14, 'download5cbf0c95c852f.jpg', 82),
(15, 'download5cbf0c95c8917.jpg', 82),
(16, 'download5cbf1381e1cd6.jpg', 83),
(17, 'download5cbf1381e20be.jpg', 83),
(18, 'download5cbf1381e24a6.jpg', 83),
(19, 'download5cbf1381e288e.jpg', 83),
(20, 'download5cbf138407d06.jpg', 84),
(21, 'download5cbf1384080ee.jpg', 84),
(22, 'download5cbf1384084d7.jpg', 84),
(23, 'download5cbf1384088bf.jpg', 84),
(24, 'download5cbf13869c884.jpg', 85),
(25, 'download5cbf13869cc6c.jpg', 85),
(26, 'download5cbf13869d054.jpg', 85),
(27, 'download5cbf13869d43c.jpg', 85),
(28, 'download5cbf1389475d3.jpg', 86),
(29, 'download5cbf1389479bb.jpg', 86),
(30, 'download5cbf138947da3.jpg', 86),
(31, 'download5cbf13894818b.jpg', 86),
(32, 'download5cbf138aecabb.jpg', 87),
(33, 'download5cbf138aecea3.jpg', 87),
(34, 'download5cbf138aed28b.jpg', 87),
(35, 'download5cbf138aed673.jpg', 87),
(36, 'download5cbf138d6d439.jpg', 88),
(37, 'download5cbf138d6d821.jpg', 88),
(38, 'download5cbf138d6dc09.jpg', 88),
(39, 'download5cbf138d6dff1.jpg', 88),
(40, 'download5cbf138ed6053.jpg', 89),
(41, 'download5cbf138ed643b.jpg', 89),
(42, 'download5cbf138ed6823.jpg', 89),
(43, 'download5cbf138ed6c0b.jpg', 89),
(44, 'download5cbf1390686c3.jpg', 90),
(45, 'download5cbf139068aab.jpg', 90),
(46, 'download5cbf139068e94.jpg', 90),
(47, 'download5cbf13906927c.jpg', 90),
(48, 'download5cbf1391d709f.jpg', 91),
(49, 'download5cbf1391d7487.jpg', 91),
(50, 'download5cbf1391d786f.jpg', 91),
(51, 'download5cbf1391d803f.jpg', 91),
(52, 'download5cbf139300b2f.jpg', 92),
(53, 'download5cbf139300f17.jpg', 92),
(54, 'download5cbf1393012ff.jpg', 92),
(55, 'download5cbf1393016e7.jpg', 92),
(56, 'download5cbf139444580.jpg', 93),
(57, 'download5cbf139444968.jpg', 93),
(58, 'download5cbf139444d50.jpg', 93),
(59, 'download5cbf139445138.jpg', 93),
(60, 'download5cbf1395f3e7a.jpg', 94),
(61, 'download5cbf139600022.jpg', 94),
(62, 'download5cbf13960040a.jpg', 94),
(63, 'download5cbf1396007f2.jpg', 94),
(64, 'download5cbf13986abb6.jpg', 95),
(65, 'download5cbf13986af9e.jpg', 95),
(66, 'download5cbf13986b386.jpg', 95),
(67, 'download5cbf13986b76e.jpg', 95),
(68, 'download5cbf139a56bd3.jpg', 96),
(69, 'download5cbf139a56fbb.jpg', 96),
(70, 'download5cbf139a573a3.jpg', 96),
(71, 'download5cbf139a5778b.jpg', 96),
(72, 'download5cbf139ba5dbf.jpg', 97),
(73, 'download5cbf139ba61a7.jpg', 97),
(74, 'download5cbf139ba658f.jpg', 97),
(75, 'download5cbf139ba6977.jpg', 97),
(76, 'download5cbf139ce8488.jpg', 98),
(77, 'download5cbf139ce8870.jpg', 98),
(78, 'download5cbf139ce8c58.jpg', 98),
(79, 'download5cbf139ce9040.jpg', 98),
(80, 'download5cbf139e420ab.jpg', 99),
(81, 'download5cbf139e42493.jpg', 99),
(82, 'download5cbf139e4287b.jpg', 99),
(83, 'download5cbf139e42c63.jpg', 99),
(84, 'download5cbf139f8820d.jpg', 100),
(85, 'download5cbf139f885f5.jpg', 100),
(86, 'download5cbf139f889dd.jpg', 100),
(87, 'download5cbf139f8c08e.jpg', 100),
(88, 'download5cbf13a0e180b.jpg', 101),
(89, 'download5cbf13a0e1bf3.jpg', 101),
(90, 'download5cbf13a0e1fdb.jpg', 101),
(91, 'download5cbf13a0e23c3.jpg', 101),
(92, 'download5cbf13a2050f2.jpg', 102),
(93, 'download5cbf13a2054da.jpg', 102),
(94, 'download5cbf13a2058c2.jpg', 102),
(95, 'download5cbf13a205caa.jpg', 102),
(96, 'download5cbf13a334ed6.jpg', 103),
(97, 'download5cbf13a3352be.jpg', 103),
(98, 'download5cbf13a3356a6.jpg', 103),
(99, 'download5cbf13a335a8e.jpg', 103),
(100, 'download5cbf13a4815c9.jpg', 104),
(101, 'download5cbf13a4819b1.jpg', 104),
(102, 'download5cbf13a481d99.jpg', 104),
(103, 'download5cbf13a482181.jpg', 104),
(104, 'download5cbf13a5df9e8.jpg', 105),
(105, 'download5cbf13a5e01b9.jpg', 105),
(106, 'download5cbf13a5e05a1.jpg', 105),
(107, 'download5cbf13a5e0989.jpg', 105),
(108, 'download5cbf13a704a40.jpg', 106),
(109, 'download5cbf13a704e28.jpg', 106),
(110, 'download5cbf13a705210.jpg', 106),
(111, 'download5cbf13a7055f8.jpg', 106),
(112, 'download5cbf13bc3d556.jpg', 107),
(113, 'download5cbf13bc3d93e.jpg', 107),
(114, 'download5cbf13bc3dd26.jpg', 107),
(115, 'download5cbf13bc3e10e.jpg', 107);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `Id_Mensagem` int(11) NOT NULL,
  `Telefone` varchar(100) DEFAULT NULL,
  `Nome_Cliente` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Mensagem` varchar(2000) DEFAULT NULL,
  `Id_Produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`Id_Mensagem`, `Telefone`, `Nome_Cliente`, `Email`, `Mensagem`, `Id_Produto`) VALUES
(1, '1', 'jose', 'a@a', 'gostei', 81),
(2, '1', '1', '1@1', '1', 81);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `Id_Produto` int(11) NOT NULL,
  `Nome_Produto` varchar(100) DEFAULT NULL,
  `Altura` float DEFAULT NULL,
  `Largura` float DEFAULT NULL,
  `Cor` varchar(100) DEFAULT NULL,
  `Sobre` varchar(500) DEFAULT NULL,
  `Comprimento` float DEFAULT NULL,
  `Id_Usuario` int(11) DEFAULT NULL,
  `DATA` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`Id_Produto`, `Nome_Produto`, `Altura`, `Largura`, `Cor`, `Sobre`, `Comprimento`, `Id_Usuario`, `DATA`) VALUES
(80, '1', 1, 1, '1', 'outro panda', 1, 1, '2019-04-23 09:56:59'),
(81, 'Caixa de remédios', 15, 20, 'Branca', 'Caixa para guardar remédios com uma bandeja bla balb la', 30, 1, '2019-04-23 09:56:59'),
(82, 'pote', 18, 10, 'branco', 'pote bonito', 10, 1, '2019-04-23 10:01:09'),
(83, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:30:41'),
(84, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:30:44'),
(85, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:30:46'),
(86, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:30:49'),
(87, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:30:50'),
(88, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:30:53'),
(89, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:30:54'),
(90, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:30:56'),
(91, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:30:57'),
(92, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:30:59'),
(93, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:00'),
(94, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:02'),
(95, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:04'),
(96, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:06'),
(97, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:07'),
(98, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:08'),
(99, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:10'),
(100, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:11'),
(101, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:12'),
(102, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:14'),
(103, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:15'),
(104, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:16'),
(105, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:17'),
(106, 'panda', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:19'),
(107, 'ultimo', 0, 0, '.', '.', 0, 1, '2019-04-23 10:31:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL,
  `Senha` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `Senha`, `Email`) VALUES
(1, '0937afa17f4dc08f3c0e5dc908158370ce64df86', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`Id_Fotos`),
  ADD KEY `Id_Produto` (`Id_Produto`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`Id_Mensagem`),
  ADD KEY `Id_Produto` (`Id_Produto`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`Id_Produto`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `Id_Fotos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `Id_Mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `Id_Produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`Id_Produto`) REFERENCES `produto` (`Id_Produto`);

--
-- Limitadores para a tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD CONSTRAINT `mensagem_ibfk_1` FOREIGN KEY (`Id_Produto`) REFERENCES `produto` (`Id_Produto`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
