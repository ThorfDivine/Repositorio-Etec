-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para bartohelp
CREATE DATABASE IF NOT EXISTS `bartohelp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bartohelp`;

-- Copiando estrutura para tabela bartohelp.competencia
CREATE TABLE IF NOT EXISTS `competencia` (
  `id_competencia` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(35) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_competencia`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela bartohelp.competencia: ~17 rows (aproximadamente)
INSERT INTO `competencia` (`id_competencia`, `tipo`, `descricao`) VALUES
	(1, 'Comunicação', 'É ter a capacidade de se expressar, dizer o que pensa e ter confiança ao falar e se relacionar com outras pessoas.'),
	(2, 'Criatividade', 'É a capacidade de uma pessoa de imaginar, criar, produzir ou inventar conceitos e coisas inéditas.'),
	(3, 'Pensamento crítico', 'É quando, antes de ter uma reação a alguma situação, é realizado um julgamento dos fatos para a resposta ser a melhor para a situação.'),
	(4, 'Flexibilidade', 'Significa estar aberto a novas idéias e apto a responder prontamente por mudanças.'),
	(5, 'Autoconfiança', 'É possuir a convicção de ser capaz de realizar algo e ter confiança nas próprias habilidades, qualidades e julgamentos.'),
	(6, 'Liderança', 'É a habilidade de comandar, motivar, orientar e inspirar pessoas de forma positiva em direção a uma meta compartilhada.'),
	(7, 'Planejamento', 'Ela está relacionada à capacidade de pensar no futuro. '),
	(8, 'Organização', 'Essas são habilidades que permitem que você use seus recursos de forma eficiente e eficaz.'),
	(9, 'Proatividade', 'Geralmente, as pessoas provagaativas têm uma boa visão de futuro, identificando necessidades e antecipando problemas, o que confere vantagens para sua equipe e empresa.'),
	(10, 'Negociação', 'Tem a ver com capacidades diversas como comunicação eficiente e assertiva, planejamento, organização, disciplina, determinação, inovação e flexibilidade.'),
	(11, 'Determinação', 'É a capacidade de persistir em uma tarefa, mesmo quando ela é desafiadora, e de manter o foco naquilo que se deseja alcançar.'),
	(12, 'Tolerância', 'Se relaciona ao controle de estresse em situações difíceis, como, por exemplo, ao ouvir feedbacks negativos.'),
	(13, 'Poder de persuasão', 'É o ato de convencer alguém a realizar alguma ação utilizando recursos comunicacionais lógicos e racionais.'),
	(14, 'Adaptabilidade', 'Pode ser definida como a capacidade de se adaptar a novas situações, circunstâncias e necessidades.'),
	(15, 'Relacionamento interpessoal', 'O relacionamento interpessoal é o processo de conhecer, interagir e criar laços com indivíduos ou um grupo.'),
	(16, 'Inteligência emocional', 'Trata-se de uma habilidade específica para identificar e gerenciar emoções, seja do próprio indivíduo ou das pessoas ao seu redor, e a capacidade de expressá-las de maneira clara e consciente.'),
	(17, 'Gerenciamento de riscos', 'O gerenciamento de riscos é o processo de identificar, analisar e controlar (ou minimizar) os riscos do negócio. Trata-se de, sistematicamente, avaliar as incertezas sobre o que a empresa pensa sobre o mundo — no que diz respeito ao seu mercado — e, especialmente, o futuro.');

-- Copiando estrutura para tabela bartohelp.competencia_usuario
CREATE TABLE IF NOT EXISTS `competencia_usuario` (
  `id_competencia_usuario` int NOT NULL AUTO_INCREMENT,
  `cpf_usuario` varchar(12) DEFAULT NULL,
  `id_competencia` int DEFAULT NULL,
  PRIMARY KEY (`id_competencia_usuario`),
  KEY `cpf_usuario` (`cpf_usuario`),
  KEY `id_competencia` (`id_competencia`),
  CONSTRAINT `competencia_usuario_ibfk_1` FOREIGN KEY (`cpf_usuario`) REFERENCES `usuario` (`cpf`),
  CONSTRAINT `competencia_usuario_ibfk_2` FOREIGN KEY (`id_competencia`) REFERENCES `competencia` (`id_competencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela bartohelp.competencia_usuario: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela bartohelp.competencia_vaga
CREATE TABLE IF NOT EXISTS `competencia_vaga` (
  `id_competencia_vaga` int NOT NULL AUTO_INCREMENT,
  `id_vaga` int DEFAULT NULL,
  `id_competencia` int DEFAULT NULL,
  PRIMARY KEY (`id_competencia_vaga`),
  KEY `id_vaga` (`id_vaga`),
  KEY `id_competencia` (`id_competencia`),
  CONSTRAINT `competencia_vaga_ibfk_1` FOREIGN KEY (`id_vaga`) REFERENCES `vaga` (`id_vaga`),
  CONSTRAINT `competencia_vaga_ibfk_2` FOREIGN KEY (`id_competencia`) REFERENCES `competencia` (`id_competencia`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela bartohelp.competencia_vaga: ~14 rows (aproximadamente)
INSERT INTO `competencia_vaga` (`id_competencia_vaga`, `id_vaga`, `id_competencia`) VALUES
	(1, 5, 1),
	(37, 5, 3),
	(38, 5, 4),
	(39, 5, 2),
	(40, 6, 1),
	(41, 6, 1),
	(42, 6, 2),
	(43, 6, 2),
	(44, 6, 4),
	(45, 6, 3),
	(46, 6, 4),
	(47, 7, 1),
	(48, 7, 3),
	(49, 7, 2);

-- Copiando estrutura para tabela bartohelp.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `cnpj` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `gmail` varchar(100) DEFAULT NULL,
  `senha` varchar(80) DEFAULT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`cnpj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela bartohelp.empresa: ~0 rows (aproximadamente)
INSERT INTO `empresa` (`cnpj`, `nome`, `gmail`, `senha`, `telefone`, `logo`, `descricao`) VALUES
	('213-5', 'gustavo batista de oliveira santos ThorfDivine', 'gustavobatistabos.td@gmail.com', 'MTIzNDVHb2pvVVNvbGEkJA==', '93951-8083', '../../contents/logo/dell.png', NULL);

-- Copiando estrutura para tabela bartohelp.escolaridade
CREATE TABLE IF NOT EXISTS `escolaridade` (
  `id_esc` int NOT NULL AUTO_INCREMENT,
  `cpf_cliente` varchar(12) DEFAULT NULL,
  `instituicao` varchar(255) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `concluido` tinyint(1) NOT NULL,
  `data_inicio` varchar(8) NOT NULL,
  `data_final` varchar(8) NOT NULL,
  PRIMARY KEY (`id_esc`),
  KEY `cpf_cliente` (`cpf_cliente`),
  CONSTRAINT `escolaridade_ibfk_1` FOREIGN KEY (`cpf_cliente`) REFERENCES `usuario` (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela bartohelp.escolaridade: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela bartohelp.experiencia
CREATE TABLE IF NOT EXISTS `experiencia` (
  `id_exp` int NOT NULL AUTO_INCREMENT,
  `cpf_cliente` varchar(12) DEFAULT NULL,
  `tipo` varchar(255) NOT NULL,
  `instituicao` varchar(255) DEFAULT NULL,
  `descricao` text,
  `ano_inicio` varchar(4) DEFAULT NULL,
  `ano_conclusao` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id_exp`),
  KEY `cpf_cliente` (`cpf_cliente`),
  CONSTRAINT `experiencia_ibfk_1` FOREIGN KEY (`cpf_cliente`) REFERENCES `usuario` (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela bartohelp.experiencia: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela bartohelp.idiomas
CREATE TABLE IF NOT EXISTS `idiomas` (
  `id_linguagem` int NOT NULL AUTO_INCREMENT,
  `cpf_cliente` varchar(12) DEFAULT NULL,
  `idioma` varchar(50) NOT NULL,
  `nivel` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_linguagem`),
  KEY `cpf_cliente` (`cpf_cliente`),
  CONSTRAINT `idiomas_ibfk_1` FOREIGN KEY (`cpf_cliente`) REFERENCES `usuario` (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela bartohelp.idiomas: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela bartohelp.interesse
CREATE TABLE IF NOT EXISTS `interesse` (
  `id_interesse` int NOT NULL AUTO_INCREMENT,
  `id_usuario` varchar(12) DEFAULT NULL,
  `id_vaga` int DEFAULT NULL,
  `interessado` tinyint(1) DEFAULT NULL,
  `aprovacao` double(5,2) DEFAULT NULL,
  PRIMARY KEY (`id_interesse`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_vaga` (`id_vaga`),
  CONSTRAINT `interesse_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`cpf`),
  CONSTRAINT `interesse_ibfk_2` FOREIGN KEY (`id_vaga`) REFERENCES `vaga` (`id_vaga`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela bartohelp.interesse: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela bartohelp.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `email` varchar(255) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `telefone` varchar(18) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `nascimento` varchar(12) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `bairro_cidade` varchar(255) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela bartohelp.usuario: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela bartohelp.vaga
CREATE TABLE IF NOT EXISTS `vaga` (
  `id_vaga` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `requisitos` text,
  `responsabilidades` text,
  `beneficios` text,
  `data_pub` varchar(20) DEFAULT NULL,
  `data_max` varchar(20) DEFAULT NULL,
  `aberta` tinyint(1) DEFAULT NULL,
  `cnpj_empresa` varchar(20) DEFAULT NULL,
  `salario` varchar(20) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_vaga`),
  KEY `cnpj_empresa` (`cnpj_empresa`),
  CONSTRAINT `vaga_ibfk_1` FOREIGN KEY (`cnpj_empresa`) REFERENCES `empresa` (`cnpj`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela bartohelp.vaga: ~4 rows (aproximadamente)
INSERT INTO `vaga` (`id_vaga`, `titulo`, `requisitos`, `responsabilidades`, `beneficios`, `data_pub`, `data_max`, `aberta`, `cnpj_empresa`, `salario`, `cep`) VALUES
	(1, 'Programador jr.', NULL, 'noções minimas  de: back-end, php, mysqli, ajax;', 'vale transportes, vale alimentação, saúde;', '21/10/2023', '2028-10-03', 1, '213-5', '2300', '06535160'),
	(4, 'programador pleno', NULL, 'tudo', 'vale transporte, vale saúde, vale alimentação', '24/10/2023', '2029-12-03', 1, '213-5', '2.800,00', '06535160'),
	(5, 'Programador senior', NULL, 'programar em js; programar em php; programar em react;', 'varios vales', '24/10/2023', '2028-02-03', 1, '213-5', '3.500,00', '06535160'),
	(6, 'Auxiliar de logistica', NULL, 'carregar caixa', 'nada', '24/10/2023', '2024-10-03', 1, '213-5', '2.500', '06535160'),
	(7, 'Auxiliar de RH', NULL, 'papelada', 'nenhum mesmo\r\n', '24/10/2023', '2029-10-03', 1, '213-5', '1.130,00', '06535160');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
