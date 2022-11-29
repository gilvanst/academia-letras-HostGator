-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 20:29
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
  `posicaoAcad` varchar(50) NOT NULL,
  `sobreAcad` text NOT NULL,
  `fotoAcad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `academicos`
--

INSERT INTO `academicos` (`idAcad`, `nomeAcad`, `cadeiraAcad`, `posicaoAcad`, `sobreAcad`, `fotoAcad`) VALUES
(27, 'dsas', '242', '23', 'dfsvsc', 'dsas2911202208112302.jpg');

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
  `descricaoEve` varchar(300) NOT NULL,
  `imagemEve` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historia`
--

CREATE TABLE `historia` (
  `idHis` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historia`
--

INSERT INTO `historia` (`idHis`, `texto`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quo incidunt, aliquam odio accusantium repellendus reiciendis minima tempora eveniet qui illum nostrum eos labore laudantium vel ducimus expedita! Consequuntur, cumque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quo incidunt, aliquam odio accusantium repellendus reiciendis minima tempora eveniet qui illum nostrum eos labore laudantium vel ducimus expedita! Consequuntur, cumque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quo incidunt, aliquam odio accusantium repellendus reiciendis minima tempora eveniet qui illum nostrum eos labore laudantium vel ducimus expedita! Consequuntur, cumque!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `memorial`
--

CREATE TABLE `memorial` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cadeira` varchar(10) NOT NULL,
  `posicao` varchar(50) NOT NULL,
  `sobre` text NOT NULL,
  `foto` varchar(200) NOT NULL
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
  `generoObra` varchar(20) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id_usuario` int(11) NOT NULL,
  `poema` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`IdPub`, `tituloPub`, `autoresPub`, `generoPub`, `textoPub`, `id_usuario`, `poema`) VALUES
(15, 'O Menino Azul', 'Cecília Meireles', 'Poemas', 'O menino quer um burrinho\r\npara passear.\r\nUm burrinho manso,\r\nque não corra nem pule,\r\nmas que saiba conversar.\r\n\r\nO menino quer um burrinho\r\nque saiba dizer\r\no nome dos rios,\r\ndas montanhas, das flores,\r\n– de tudo o que aparecer.\r\n\r\nO menino quer um burrinho\r\nque saiba inventar histórias bonitas\r\ncom pessoas e bichos\r\ne com barquinhos no mar.\r\n\r\nE os dois sairão pelo mundo\r\nque é como um jardim\r\napenas mais largo\r\ne talvez mais comprido\r\ne que não tenha fim.\r\n\r\n(Quem souber de um burrinho desses,\r\npode escrever\r\npara a Ruas das Casas,\r\nNúmero das Portas,\r\nao Menino Azul que não sabe ler.)', 16, 'Sim'),
(25, 'agua', 'desconhecido', 'crônicas', 'De água e luz ele faz seu esplendor; seu grande mistério é a simplicidade. Considerei, por fim, que assim é o amor, oh! minha amada; de tudo que ele suscita e esplende e estremece e delira em mim existem apenas meus olhos recebendo a luz de teu olhar. Ele me cobre de glórias e me faz magnífico.', 16, 'Não'),
(27, 'Da felicidade', 'Mário Quintana', 'nem sei', 'Quantas vezes a gente, em busca da ventura,\r\nProcede tal e qual o avozinho infeliz:\r\nEm vão, por toda parte, os óculos procura\r\nTendo-os na ponta do nariz!', 15, 'Sim'),
(28, 'Mitada', 'Jair bolsonaro', 'reflexão', 'Podemos viver sem oxigênio.\r\nMas jamais sem liberdade de expressão!!\r\nPois eu sou IMBROXAVELL!!!', 15, 'Sim'),
(33, 'saddsa', 'asdda', 'assadsaa', 'adsdsassaads', 15, 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `revista`
--

CREATE TABLE `revista` (
  `id` int(11) NOT NULL,
  `edicao` varchar(30) NOT NULL,
  `ano` varchar(5) NOT NULL,
  `pdf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `telefone`, `senha`, `tipo`) VALUES
(15, 'adm', 'adm@adm', 123, '123', 'administrador'),
(16, 'adm', 'adm1@adm', 123, '123', 'autor'),
(23, 'gilvan', 'adm5@adm', 123, '123', 'autor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `sobre` text NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `nome`, `sobre`, `link`) VALUES
(3, 'fut', 'dasljdslsajdsa', 'https://www.youtube.com/watch?v=ntKeSghZyag&ab_channel=iLance7i'),
(4, 'Joji - 1AM FREESTYLE', 'melhor musica do album SMITHEREENS', 'https://www.youtube.com/watch?v=QTxMAycHnos&ab_channel=Joji'),
(5, 'Joji - Nectar (Full Album)', 'album lindo', 'https://www.youtube.com/watch?v=5eDk-kTE9DI&ab_channel=SOULDEEP');

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
-- Índices para tabela `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`idHis`);

--
-- Índices para tabela `memorial`
--
ALTER TABLE `memorial`
  ADD PRIMARY KEY (`id`);

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
-- Índices para tabela `revista`
--
ALTER TABLE `revista`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `academicos`
--
ALTER TABLE `academicos`
  MODIFY `idAcad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idEve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `historia`
--
ALTER TABLE `historia`
  MODIFY `idHis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `memorial`
--
ALTER TABLE `memorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `obra`
--
ALTER TABLE `obra`
  MODIFY `idObra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT de tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `IdPub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `revista`
--
ALTER TABLE `revista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
