-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 24-Nov-2023 às 01:29
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nascimento` date NOT NULL,
  `cidade` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codigo`, `nome`, `email`, `senha`, `celular`, `cpf`, `rua`, `nascimento`, `cidade`, `bairro`, `numero`, `cep`, `estado`) VALUES
(4, 'Danilo', 'daniloctbarbosa@hotmail.com', '', '18996618733', '47423568880', 'IzÃ­dio Pereira dos Santos', '2005-10-28', '', 'Beija Flor', '10', '17700000', 'SP'),
(5, 'mindy', 'mindyalejandra06@gmail.com', '', '18991033567', '70739017217', 'chile', '2005-05-05', '', 'jardim bandeiras', '695', '17700000', 'SP'),
(9, ' danilo', 'danilo@hotmail.com', 'dan', '18996618733', '47423568880', 'Izidio pereira dos Santos', '2005-10-28', '', 'Beija Flor', '10', '17700000', 'SP'),
(10, 'mindy', 'mindy@gmail.com', 'mindy', '18996618733', '4742356880', 'Chile', '2005-05-05', 'Osvaldo cruz', 'Jardim bandeiras', '695', '17700000', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avaliacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metodologia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restricoes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `normatizacoes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutores` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `conteudo`, `avaliacao`, `metodologia`, `restricoes`, `normatizacoes`, `tutores`) VALUES
(1, 'An quando honestatis um', '<p>Conteudo An quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri graeci m', '<p>Avaliacao Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, vel por', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores Id eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad pau'),
(2, 'Falli persecuti deseruisse dois', '<p>Conteudo An quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri graeci m', '<p>Avaliacao Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, vel por', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores Id eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad pau'),
(3, 'Ne sit pericula sententiae tres', '<p>Conteudo tresAn quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri grae', '<p>Avaliacao tres Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, ve', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores tresId eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad'),
(4, 'An quando honestatis um', '<p>Conteudo An quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri graeci m', '<p>Avaliacao Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, vel por', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores Id eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad pau'),
(5, 'Falli persecuti deseruisse dois', '<p>Conteudo An quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri graeci m', '<p>Avaliacao Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, vel por', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores Id eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad pau'),
(6, 'Ne sit pericula sententiae tres', '<p>Conteudo tresAn quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri grae', '<p>Avaliacao tres Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, ve', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores tresId eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad'),
(7, 'An quando honestatis um', '<p>Conteudo An quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri graeci m', '<p>Avaliacao Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, vel por', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores Id eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad pau'),
(8, 'Falli persecuti deseruisse dois', '<p>Conteudo An quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri graeci m', '<p>Avaliacao Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, vel por', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores Id eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad pau'),
(9, 'Ne sit pericula sententiae tres', '<p>Conteudo 9 tresAn quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri gr', '<p>Avaliacao tres Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, ve', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores tresId eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad'),
(10, 'An quando honestatis um', '<p>Conteudo An quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri graeci m', '<p>Avaliacao Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, vel por', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores Id eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad pau'),
(11, 'Falli persecuti deseruisse dois', '<p>Conteudo An quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri graeci m', '<p>Avaliacao Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, vel por', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores Id eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad pau'),
(12, 'Ne sit pericula sententiae tres', '<p>Conteudo tresAn quando honestatis sed, nec simul vivendo cu. Vis accommodare complectitur et, mazim option perfecto at mei. Ne epicuri expetendis eum. Ea has dicta explicari. Mei sapientem quaerendum eu, alterum tacimates mediocritatem nam ut, pri grae', '<p>Avaliacao tres Et mel epicuri efficiantur, nam id veri meis oratio. Integre aliquam sit ad. Id laoreet intellegebat sea. Paulo civibus deserunt id qui. Dicit accusam adolescens nam eu.\r\n</p><p>\r\nEros tempor fierent sea ne, per ad utamur appellantur, ve', '<p>Metodologia Natum imperdiet mnesarchum ad est, atomorum constituto per ad. Eos ad elit electram. Nostro putant vocent per ex, assum insolens cum ei. In iudico propriae antiopam mea, eos et solum soleat detracto.\r\n<p></p>\r\nProbatus petentium forensibus ', '<p>restricoes An pro case animal, et tale mundi utamur vim, cu vero aperiri apeirian eos. Iudico cetero conceptam nam an. Cu mutat partem vim. Eu cum periculis temporibus, eum tamquam lobortis in. Stet aliquid cum ne, maiorum principes consequat mel ut.\r\n', '<p>Normatizacoes Ut tritani virtute utroque vim, aeque dolores mea ad. At impedit deleniti neglegentur nec. Eligendi insolens postulant duo in. Augue suscipit sea id, ex iusto everti quo, nam animal disputando no. Id pro salutandi repudiare accommodare, i', '<p>Tutores tresId eruditi docendi expetenda qui, sit te labores suscipit iracundia. Ei per choro meliore, labore dolorem id usu. Mea ea erat vitae, ne eam adhuc laboramus. Mel vocent voluptua ad. Nam eius omnes expetenda ne, eam alienum epicuri ex. Mel ad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `nm_produ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produ` int(255) NOT NULL AUTO_INCREMENT,
  `estoque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_produ`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`nm_produ`, `id_produ`, `estoque`, `preco`, `descricao`, `img`) VALUES
('Agenda Verde 2024', 10, '30', '20', 'Agenda Verde 2024, 15x10cm ', 'ed889001e3de3def9af0d9b7075a60491.jpg'),
('Kit Binder 4 Cores', 11, '100', '25', 'Kit de 20 Binders 4 cores: Azul, Rosa, Amarelo e Ciano ', '69ca2cd54899ddeff3e8da78ef7f4480r.jpg'),
('Kit 4 Cadernos de Estudos ', 12, '50', '120', 'Kit 4 Cadernos 1 linha', '6658a9e52fd7da4cecd7f6c0560564331.jpg'),
('Calculadora Preta PadrÃ£o', 13, '70', '15', 'Calculadora Preta de escritÃ³rio', 'cf59180b6893194686eb3d2bc5e76419l.jpg'),
('Kit 2 Calculadoras Coloridas', 14, '75', '30', 'Kit 2 Calculadoras Escolares Coloridas: Rosa e Azul', '94c31381a5cb2ec90cdb85392fe3077e2.jpg'),
('Kit 3 Canetas transparentes', 15, '150', '2', 'Kit 3 canetas transparentes tinta Preta, Vermelha e Azul', '2dc5c75e7f315d8df86b09430b30ca991.jpg'),
('Kit 6 Canetas EsferogrÃ¡ficas ', 16, '50', '37.9', 'Kit 6 Canetas esferogrÃ¡ficas Coloridas: Preto, Azul, Celeste, Vermelho, Verde e Cinza', '3b057a74b61e2b3a04877d9abd70be15s.jpg'),
('Caixa de Clips ', 17, '80', '40', 'Caixa de 24 Canetinhas Faber-Castell', '391abffc2c81f17f199dcd618a424b0cs.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
