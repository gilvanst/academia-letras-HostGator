-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Ago-2022 às 22:04
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
-- Banco de dados: `bdaal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `academicos`
--

CREATE TABLE `academicos` (
  `idAcad` int(11) NOT NULL,
  `nomeAcad` varchar(150) NOT NULL,
  `cadeiraAcad` varchar(10) NOT NULL,
  `posicaoAcad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `idEve` int(11) NOT NULL,
  `nomeEve` varchar(150) NOT NULL,
  `localEve` varchar(250) NOT NULL,
  `dataEve` date NOT NULL,
  `horaEve` time NOT NULL,
  `descricaoEve` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obra`
--

CREATE TABLE `obra` (
  `idObra` int(11) NOT NULL,
  `tituloObra` varchar(250) NOT NULL,
  `autoresObra` text NOT NULL,
  `sinopseObra` text NOT NULL,
  `imagemObra` varchar(200) NOT NULL,
  `isbnObra` varchar(30) NOT NULL,
  `anoObra` varchar(40) NOT NULL,
  `paginasObra` varchar(5) NOT NULL,
  `pdfObra` varchar(200) NOT NULL,
  `linkObra` varchar(200) NOT NULL,
  `generoObra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `obra`
--

INSERT INTO `obra` (`idObra`, `tituloObra`, `autoresObra`, `sinopseObra`, `imagemObra`, `isbnObra`, `anoObra`, `paginasObra`, `pdfObra`, `linkObra`, `generoObra`) VALUES
(1, 'Harry Potter e a Pedra Filosofal', 'J.K rowling', 'Harry Potter é um garoto órfão que vive infeliz com seus tios, os Dursleys. Ele recebe uma carta contendo um convite para ingressar em Hogwarts, uma famosa escola especializada em formar jovens bruxos. Inicialmente, Harry é impedido de ler a carta por seu tio, mas logo recebe a visita de Hagrid, o guarda-caça de Hogwarts, que chega para levá-lo até a escola. Harry adentra um mundo mágico que jamais imaginara, vivendo diversas aventuras com seus novos amigos, Rony Weasley e Hermione Granger.', '', '8532511015', '2000', '264', '', 'https://www.amazon.com.br/Harry-Potter-Pedra-Filosofal-Rowling/dp/8532511015', 'Aventura e fantasia'),
(2, 'algma', 'fsdsfd', '', '', '1201453', '210', '31235', 'Harry-Potter-e-a-pedra-filosofal.pdf', '', 'dfsdfsf'),
(3, 'dsiclasjif', 'dfpifipsdk', '', 'harry2.jpg', '545215', '3512', '54534', '', '', 'fsjdksdf'),
(4, 'fadsdfds', 'aadss', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes`
--

CREATE TABLE `publicacoes` (
  `IdPub` int(11) NOT NULL,
  `tituloPub` varchar(250) NOT NULL,
  `autoresPub` text NOT NULL,
  `generoPub` varchar(20) NOT NULL,
  `textoPub` text NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`IdPub`, `tituloPub`, `autoresPub`, `generoPub`, `textoPub`, `id_usuario`) VALUES
(11, 'zfssdfs', 'fdssf', 'fdsfdsf', 'dfsfds', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `telefone`, `senha`) VALUES
(11, 'adm', 'adm@adm', 123, '123'),
(12, 'adm1', 'adm1@adm', 0, '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `academicos`
--
ALTER TABLE `academicos`
  ADD PRIMARY KEY (`idAcad`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idEve`);

--
-- Índices para tabela `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`idObra`);

--
-- Índices para tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`IdPub`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `academicos`
--
ALTER TABLE `academicos`
  MODIFY `idAcad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idEve` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `obra`
--
ALTER TABLE `obra`
  MODIFY `idObra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `IdPub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
