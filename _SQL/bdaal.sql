-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2022 às 21:05
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
(28, 'José', '2', 'patrono', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'José3011202206115851.jpg'),
(29, 'maria', '2', 'teste', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'maria3011202207110127jpeg'),
(30, 'Joana Santos', '3', 'patrono', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Joana Santos3011202207110947.png'),
(31, 'Pedro', '4', 'patrono', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Pedro3011202207111220.jpg');

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

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`idEve`, `nomeEve`, `localEve`, `dataEve`, `horaEve`, `descricaoEve`, `imagemEve`) VALUES
(22, 'Apresentação do tcc ETEC', 'Etec Araçatuba', '2022-11-30', '19:00:00', 'Apresentação dos TCCs de ensino técnico ', '3011202208111536.jpg'),
(23, 'Apresentação', 'Etec Araçatuba', '2022-11-30', '19:10:00', 'Apresentação dos TCCs', '3011202208115819.jpg');

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

--
-- Extraindo dados da tabela `memorial`
--

INSERT INTO `memorial` (`id`, `nome`, `cadeira`, `posicao`, `sobre`, `foto`) VALUES
(3, 'Fernando Pessoa', '3', 'patrono', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 'Fernando Pessoa3011202207111628.jpg'),
(4, 'Machado De Assis', '5', 'algo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 'Machado De Assis3011202207111742.jpg');

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
(102, 'As vantagens de ser invisível', 'Stephen Chbosky', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 'As vantagens de ser invisível3011202207114942.jpg', '6555320699', '2004', '204', 'As vantagens de ser invisível3011202207114942.pdf', 'https://www.amazon.com.br/VANTAGENS-SER-INVIS%C3%8DVEL-NOVA-EDI%C3%87%C3%83O/dp/6555320699', 'Romance'),
(103, 'Por lugares incríveis', 'Jenifer niven', 'Violet Markey tinha uma vida perfeita, mas todos os seus planos deixam de fazer sentido quando ela e a irmã sofrem um acidente de carro e apenas Violet sobrevive. Sentindo-se culpada pelo que aconteceu, a garota se afasta de todos e tenta descobrir como seguir em frente. Theodore Finch é o esquisito da escola, perseguido pelos valentões e chamado de “aberração” por onde passa. Para piorar, é obrigado a lidar com longos períodos de depressão, o pai violento e a apatia do resto da família. Enquanto Violet conta os dias para o fim das aulas, quando poderá ir embora da cidadezinha onde mora, Finch pesquisa diferentes métodos de suicídio e imagina se conseguiria levar algum deles adiante. Em uma dessas tentativas, ele vai parar no alto da torre da escola e, para sua surpresa, encontra Violet, também prestes a pular. Um ajuda o outro a sair dali, e essa dupla improvável se une para fazer um trabalho de geografia: conhecer lugares incríveis do estado onde moram. Ao lado de Finch, Violet para de contar os dias e finalmente passa a vivê-los. O garoto, por sua vez, encontra alguém com quem pode ser ele mesmo, e torce para que consiga se manter desperto.\r\n\r\n“Me apaixonei por Violet e Finch antes mesmo de se apaixonarem um pelo outro. A jornada deles é adorável e inteligente e corajosa. Vai partir seu coração e relembrar o que significa estar vivo.” ― Jennifer E. Smith, autora de A probabilidade estatística do amor à primeira vista', 'Por lugares incríveis3011202207115915.jpg', '8565765571', '2003', '255', 'Por lugares incríveis3011202207115915.pdf', 'https://www.amazon.com.br/Por-lugares-incr%C3%ADveis-Jennifer-Niven/dp/8565765571/ref=d_pd_sbs_sccl_2_3/136-5443657-3885262?pd_rd_w=XtXLR&content-id=amzn1.sym.f14d3066-f640-490b-be63-642232e30730&pf_r', 'Romance'),
(104, 'Memórias póstumas de brás cubas', 'Machado de Assis', 'Não tive filhos, não transmiti a nenhuma criatura o legado da nossa miséria. Com essas palavras, o narrador de Memórias Póstumas de Brás Cubas resume a sua vida. O tom assumido na obra, bem como as técnicas empregadas na composição romanesca, são alguns dos fatores que justificam o lugar de Machado de Assis entre os maiores escritores do século XIX. Neste romance repleto de digressões filosóficas, o escritor se vale da posição privilegiada de Brás Cubas, que, como defunto autor, narra as suas desventuras e revela as contradições da sociedade brasileira do século XIX, por meio de uma análise aprofundada de seus personagens.', 'Memórias póstumas de brás cubas3011202208110318.jpg', '8594318618', '1881', '192', '', 'https://www.amazon.com.br/Mem%C3%B3rias-P%C3%B3stumas-Cubas-Machado-Assis/dp/8594318618/ref=asc_df_8594318618/?tag=googleshopp00-20&linkCode=df0&hvadid=379725131710&hvpos=&hvnetw=g&hvrand=123738544643', 'Literatura Clássica'),
(105, 'O pequeno príncipe', 'Saint-Exupéry', 'Nesta clássica história que marcou gerações de leitores em todo o mundo, um piloto cai com seu avião no deserto do Saara e encontra um pequeno príncipe, que o leva a uma jornada filosófica e poética através de planetas que encerram a solidão humana. A edição conta com a clássica tradução do poeta imortal dom Marcos Barbosa, e é a versão mais consagrada da obra, publicada no Brasil desde 1952.\r\n', 'O pequeno príncipe3011202208110713.jpg', '8778784887487', '8595081514', '96', 'O pequeno príncipe3011202208110713.pdf', 'https://www.amazon.com.br/pequeno-pr%C3%ADncipe-Antoine-Saint-Exup%C3%A9ry/dp/8595081514', 'Conto de fadas');

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
(27, 'Da felicidade', 'Mário Quintana', 'nem sei', 'Quantas vezes a gente, em busca da ventura,\r\nProcede tal e qual o avozinho infeliz:\r\nEm vão, por toda parte, os óculos procura\r\nTendo-os na ponta do nariz!', 15, 'Sim');

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

--
-- Extraindo dados da tabela `revista`
--

INSERT INTO `revista` (`id`, `edicao`, `ano`, `pdf`) VALUES
(6, '1', '2022', '13011202208111321.pdf');

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
(13, 'Sessão solene da AAL - 2022', 'Sessão Solene em comemoração aos 30 anos da Academia Araçatubense de Letras', 'https://www.youtube.com/watch?v=RqIk4o8u5Ek'),
(14, 'A importância da literatura', 'Sessão Solene em comemoração aos 30 anos da Academia Araçatubense de Letras', 'https://www.youtube.com/watch?v=gbN0IjXQh1A'),
(15, 'A quinta história (Clarice Lispector)', 'Neste vídeo, o acadêmico Carlos Eduardo Brefore Pinheiro analisa o conto \"A Quinta História\", de Clarice Lispector, constante na obra \"A Legião Estrangeira\".', 'https://www.youtube.com/watch?v=PMQbR27zxiU');

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
  MODIFY `idAcad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idEve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `historia`
--
ALTER TABLE `historia`
  MODIFY `idHis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `memorial`
--
ALTER TABLE `memorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `obra`
--
ALTER TABLE `obra`
  MODIFY `idObra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `IdPub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `revista`
--
ALTER TABLE `revista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
