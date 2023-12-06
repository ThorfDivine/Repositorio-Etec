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


-- Copiando estrutura do banco de dados para crm
CREATE DATABASE IF NOT EXISTS `crm` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `crm`;

-- Copiando estrutura para tabela crm.funcionarios
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `idfuncionarios` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `formacao` varchar(45) DEFAULT NULL,
  `setor` varchar(45) DEFAULT NULL,
  `telefone_setor` varchar(11) DEFAULT NULL,
  `celular` varchar(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `salario` decimal(6,2) DEFAULT NULL,
  `carteira` varchar(15) DEFAULT NULL,
  `data_adm` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idfuncionarios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela crm.funcionarios: ~0 rows (aproximadamente)
INSERT INTO `funcionarios` (`idfuncionarios`, `nome`, `endereco`, `formacao`, `setor`, `telefone_setor`, `celular`, `email`, `salario`, `carteira`, `data_adm`) VALUES
	(1, 'Ayton de Paula', 'Rua dos Bosques, 45, Vila Santana, Barueri', 'Cientista da Computação', 'TI', '1145963214', '1199876541', 'ayrton.paula@empresa.com', 4590.00, '56781234', '2023-11-21');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
