-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: fullstackeletro
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` int(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `msg` text NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` VALUES (1,'Luciana Oliveira da Cunha',0,'','Testando...','2020-11-03 17:07:01'),(5,'Vania Nunes',0,'','Testando 2','2020-11-03 17:21:50'),(7,'Pedro Carvalho',0,'','Testando 123','2020-11-03 17:23:22'),(8,'Luiza Sousa',2112345689,'lulusousa@hotmail.com','oioi','2020-11-03 17:26:51'),(9,'Luiza Sousa',2112345689,'lulusousa@hotmail.com','oioi','2020-11-03 17:33:59');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `nomecliente` varchar(30) NOT NULL,
  `endereço` text NOT NULL,
  `telefone` int(12) NOT NULL,
  `nomeproduto` varchar(50) NOT NULL,
  `preço` decimal(8,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valortotal` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `valorunit_idx` (`preço`),
  KEY `in_nomeproduto` (`nomeproduto`) USING BTREE,
  CONSTRAINT `fk_nomeproduto` FOREIGN KEY (`nomeproduto`) REFERENCES `produtos` (`nomeproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_preço` FOREIGN KEY (`preço`) REFERENCES `produtos` (`preço`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (2,'Rita Sousa','Rua dos pássaros, 12',12345678,'Micro-ondas Electrolux',847.97,2,NULL),(3,'Rita Sousa','Rua dos pássaros, 12',12345678,'Micro-ondas Electrolux',847.97,2,NULL);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `idprodut` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(200) NOT NULL,
  `nomeproduto` varchar(50) NOT NULL,
  `descrição` text NOT NULL,
  `preço` decimal(8,2) NOT NULL,
  `preço_venda` decimal(10,2) NOT NULL,
  `nomeimagem` varchar(100) NOT NULL,
  PRIMARY KEY (`idprodut`),
  KEY `preço_idx` (`preço`),
  KEY `nomeproduto_idx` (`nomeproduto`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'fogao','Fogão 4 Bocas Electrolux Preto - ','Acendimento Automático 52LPV',1499.00,1187.10,'img/fogaoelectrolux.jpg'),(2,'fogao','Fogão 5 Bocas Consul CFS5 VAR',' Acendimento Automático Inox',1999.90,1439.10,'img/fogaoconsul.jpg'),(3,'geladeira','Geladeira Brastemp','Frost Free Evox',9519.90,4949.10,'img/geladeirabrastemp.jpg'),(4,'geladeira','Refrigerador Consul Domest','2 Portas 437 Litros Platinum Frost Free 220v',3999.00,3039.05,'img/geladeiraconsul.jpg'),(5,'geladeira','Geladeira Continental','Geladeira/Refrigerador  Frost Free',2899.00,1880.10,'img/geladeiracontinental.jpg'),(6,'microondas','Micro-ondas Brastemp',' 20 Litros com Funções Pré-preparo Inox Espelhado',599.02,539.12,'img/microBrastemp.jpg'),(7,'microondas','Micro-ondas Electrolux',' com Painel Integrado 31L MI41S - 220 Volts',847.97,763.17,'img/microEletrolux.jpg'),(8,'microondas','Micro-ondas LG Solo',' 30 Litros Prata MS3095 110V',625.96,539.10,'img/microLG.jpg'),(9,'lavalouca','Lava Louças Brastemp','8 Serviços Compacta Prata com Ciclo Pesado',2899.00,1880.10,'img/lavaloucasBrastemp.jpg'),(10,'lavalouca','Lava louças philco','Lava louças Philco - 8 Serviços.',2599.00,1844.91,'img/lavaloucasPhilco.jpg'),(11,'lavadora','Lavadora de Roupas Brastemp BWK12A9 ','12Kg - Cesto Inox 12 Programas de Lavagem',2599.00,1853.10,'img/lavadoraBrastemp.jpg'),(12,'lavadora','Lavadora de Roupas Midea Storm Wash','LFA11X1 - Inverter 11kg Cesto Inox 16 Programas de Lavagem',3499.00,2699.10,'img/lavadoraMidea.jpg'),(13,'aspirador','Aspirador de pó Vertical Philco 1000W','com Filtro Hepa Ph1100 Rapid Turbo Pas02c',200.00,170.91,'img/aspirador2.jpg'),(14,'aspirador','Aspirador de pó Britânia','1250W BAS1430',249.90,189.90,'img/aspirador1.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-03 17:48:06
