-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Nov-2022 às 20:58
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
(23, '', '', 'rei do mundo', 'simplesmente o cara mais foda, amo ele ', 'Vovô lee0911202206112032.jpg');

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
(19, 'AADSASDA', 'ASDASDA', '0000-00-00', '03:21:00', '1ASDCAS DADSDSAXDSAXSAZDCA', 'AADSASDA0911202201115900.jpg'),
(20, 'festa', 'sei la', '3233-03-22', '03:32:00', 'blabla.klklskalkd', 'festa1411202207115432.jpg');

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

--
-- Extraindo dados da tabela `obra`
--

INSERT INTO `obra` (`idObra`, `tituloObra`, `autoresObra`, `sinopseObra`, `imagemObra`, `isbnObra`, `anoObra`, `paginasObra`, `pdfObra`, `linkObra`, `generoObra`, `id_usuario`) VALUES
(83, 'As vantagens de ser invisível', 'Sthephen Chobsky', '\"O LIVRO QUE INSPIROU O FILMENOVA EDIÇÃO COM TRECHO INÉDITO Manter-se à margem oferece uma única e passiva perspectiva. Mas, de uma hora para outra, sempre chega o momento de encarar a vida do centro dos holofotes. Mais íntimas do que um diário, as cartas de Charlie são estranhas e únicas, hilárias e devastadoras. Não se sabe onde ele mora. Não se sabe para quem ele escreve. Tudo o que se conhece é o mundo que ele compartilha com o leitor. Estar encurralado entre o desejo de viver sua vida e fugir dela o coloca num novo caminho através de um território inexplorado. Um mundo de primeiros encontros amorosos, dramas familiares e novos amigos. Um mundo de sexo, drogas e rock’n’roll, quando o que todo mundo quer é aquela música certa que provoca o impulso perfeito para se sentir infinito. A luta entre apatia e entusiasmo marca o fim da adolescência de Charlie nesta história divertida e ao mesmo tempo instigante.\"', 'As vantagens de ser invisível1010202208105903.jpg', '9786555320695', '2014', '293', 'As vantagens de ser invisível1010202208105903.pdf', 'https://www.amazon.com.br/VANTAGENS-SER-INVIS%C3%8DVEL-NOVA-EDI%C3%87%C3%83O/dp/6555320699', 'romance, drama', 15),
(86, 'Harry Potter e a pedra filosofal', 'J.K rowlling', 'Harry Potter é um garoto cujos pais, feiticeiros, foram assassinados por um poderosíssimo bruxo quando ele ainda era um bebê. Ele foi levado, então, para a casa dos tios que nada tinham a ver com o sobrenatural. Pelo contrário. Até os 10 anos, Harry foi uma espécie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha óculos remendados e era tratado como um estorvo. No dia de seu aniversário de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no país das maravilhas, que o conduz a um mundo mágico. Descobre sua verdadeira história e seu destino: ser um aprendiz de feiticeiro até o dia em que terá que enfrentar a pior força do mal, o homem que assassinou seus pais. O menino de olhos verde, magricela e desengonçado, tão habituado à rejeição, descobre, também, que é um herói no universo dos magos. Potter fica sabendo que é a única pessoa a ter sobrevivido a um ataque do tal bruxo do mal e essa é a causa da marca em forma de raio que ele carrega na testa. Ele não é um garoto qualquer, ele sequer é um feiticeiro qualquer ele é Harry Potter, símbolo de poder, resistência e um líder natural entre os sobrenaturais. A fábula, recheada de fantasmas, paredes que falam, caldeirões, sapos, unicórnios, dragões e gigantes, não é, entretanto, apenas um passatempo.', 'Harry Potter e a pedra filosofal1710202205102033.jpg', '345644563456', '2004', '208', 'Harry Potter e a pedra filosofal1710202205102033.pdf', 'https://www.amazon.com.br/Harry-Potter-Pedra-Filosofal-Rowling/dp/8532530788', 'aventura', 15),
(87, 'O pequeno príncipe', 'Antoíne de Saint-Exupery', 'Nesta clássica história que marcou gerações de leitores em todo o mundo, um piloto cai com seu avião no deserto do Saara e encontra um pequeno príncipe, que o leva a uma jornada filosófica e poética através de planetas que encerram a solidão humana. A edição conta com a clássica tradução do poeta imortal dom Marcos Barbosa, e é a versão mais consagrada da obra, publicada no Brasil desde 1952.', 'O pequeno príncipe1710202210101058.jpg', '8595081514', '2018', '96', 'O pequeno príncipe1710202210101058.pdf', 'https://www.amazon.com.br/pequeno-pr%C3%ADncipe-Antoine-Saint-Exup%C3%A9ry/dp/8595081514', 'ficção ciêntifica', 16),
(88, 'Memórias póstumas de Brás Cubas', 'Machado De Assis', 'Não tive filhos, não transmiti a nenhuma criatura o legado da nossa miséria. Com essas palavras, o narrador de Memórias Póstumas de Brás Cubas resume a sua vida. O tom assumido na obra, bem como as técnicas empregadas na composição romanesca, são alguns dos fatores que justificam o lugar de Machado de Assis entre os maiores escritores do século XIX. Neste romance repleto de digressões filosóficas, o escritor se vale da posição privilegiada de Brás Cubas, que, como defunto autor, narra as suas desventuras e revela as contradições da sociedade brasileira do século XIX, por meio de uma análise aprofundada de seus personagens.', 'Memórias póstumas de Brás Cubas1810202206103036.jpg', '9788594318619', '1881', '192', 'Memórias póstumas de Brás Cubas1810202206103036.pdf', 'https://www.amazon.com.br/Mem%C3%B3rias-P%C3%B3stumas-Cubas-Machado-Assis/dp/8594318618/ref=d_pd_sbs_sccl_2_2/131-3698504-9154808?pd_rd_w=2JWqM&content-id=amzn1.sym.077f096c-3881-4160-87ce-2fdca6e1052', 'Literatura clássica', 15),
(89, 'A metamorfose', 'Franz Kafka', 'A metamorfose é a mais célebre novela de Franz Kafka e uma das mais importantes de toda a história da literatura. Sem a menor cerimônia, o texto coloca o leitor diante de um caixeiro-viajante - o famoso Gregor Samsa - transformado em inseto monstruoso. A partir daí, a história é narrada com um realismo inesperado que associa o inverossímil e o senso de humor ao que é trágico, grotesco e cruel na condição humana - tudo no estilo transparente e perfeito desse mestre inconfundível da ficção universal.\r\n', 'A metamorfose1810202206104543.jpg', '139788571646858', '1915', '104', 'A metamorfose1810202206104543.pdf', 'https://www.amazon.com.br/metamorfose-Franz-Kafka/dp/8571646856', 'Ficçao absurdista', 15),
(90, 'Aurora ', 'Friedrich Nietizche', 'Publicado em 1881, Aurora prossegue no estilo aforístico da filosofia de Friedrich Nietzsche (1844-1900), inaugurado com Humano, demasiado humano (1878). Em 575 aforismos - cuja extensão varia de duas linhas a algumas páginas -, Nietzsche elabora sua crítica da moral cristã-ocidental e dos conceitos a ela associados, como \"alma\", \"Deus\", \"pecado\", \"sujeito\" e \"livre-arbítrio\", que segundo o filósofo seriam ficções prejudiciais à vida. No subtítulo do livro, a palavra \"preconceito\" é usada no sentido filosófico de concepção formada antes do julgamento (um \"pré-juízo\"). A epígrafe (\"Há tantas auroras que não brilharam ainda\", extraído das escrituras hindus) explica o título e traduz a esperança nietzscheana de um mundo novo, livre das ilusões religiosas, morais e intelectuais criticadas pelo filósofo. Essa edição inclui o importante prólogo acrescentado em 1886 e, num apêndice bilíngüe, o grupo de poemas intitulados \"Idílios de Messina\", de 1882.', 'Aurora 1810202206105809.jpg', '8535928189', '1881', '312', 'Aurora 1810202206105809.pdf', 'https://www.amazon.com.br/Aurora-Friedrich-Nietzsche/dp/8535928189', 'Filosofia', 15),
(93, 'algum', 'algum', 'Ao acordar, certa manhã, de sonhos inquietos, Gregor Samsa se deu conta de que havia se metamorfoseado num gigantesco inseto. Estava deitado na cama, sobre as costas, que eram tão duras que pareciam uma armadura de metal e, ao levantar um pouco a cabeça, visualizou a barriga marrom e arredondada, dividida em arcos rígidos, sobre a qual a coberta não conseguia permanecer, estando a ponto de escorregar e cair a qualquer momento. Possuía inúmeras pernas, que eram desproporcionalmente finas em relação ao resto do corpo e elas se agitavam desesperadamente diante de seus olhos. Publicada pela primeira vez em 1915, esta narrativa breve e intensa é caracterizada como um dos maiores clássicos da literatura universal.\r\n', 'algum2710202208103600.jpg', '134653453152', '2002', '202', 'algum2710202208103600.pdf', 'http://localhost/academia-letras/modulos/obras/inserir.php', 'algum', 15);

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
  MODIFY `idAcad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idEve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `historia`
--
ALTER TABLE `historia`
  MODIFY `idHis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
