-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: influenciadosgames
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tabela_de_pedidos`
--

DROP TABLE IF EXISTS `tabela_de_pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tabela_de_pedidos` (
  `idtabela_de_pedidos` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` int NOT NULL,
  `produto` varchar(45) NOT NULL,
  `valorunit` decimal(8,2) NOT NULL,
  `quantidade` int NOT NULL,
  `valortot` decimal(8,2) NOT NULL,
  PRIMARY KEY (`idtabela_de_pedidos`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabela_de_pedidos`
--

LOCK TABLES `tabela_de_pedidos` WRITE;
/*!40000 ALTER TABLE `tabela_de_pedidos` DISABLE KEYS */;
INSERT INTO `tabela_de_pedidos` VALUES (1,'Marcelo Rufino','Rua A, 110 - Centro/RJ',2147483647,'Monitor Gamer Ultrawide Curvo 49\" Asus',9800.00,1,9800.00),(2,'Miguel Rufino','Rua B, 220 - Centro/RJ',2147483647,'PlayStation 4 1TB + Controle',2990.00,1,2990.00),(3,'Jessica Rufino','Rua C, 330 - Centro/RJ',2147483647,'Nintendo Switch Azul e Vermelho',3400.00,1,3400.00),(4,'Manoela Rufino','Rua D, 440 - Centro/RJ',2147483647,'Headset Gamer Warrior Straton',269.00,1,269.00),(5,'Marcia','Rua T',2147483647,'Teclado Mecânico Redragon',250.00,1,250.00);
/*!40000 ALTER TABLE `tabela_de_pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabela_de_produtos`
--

DROP TABLE IF EXISTS `tabela_de_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tabela_de_produtos` (
  `idtabela_de_produtos` int NOT NULL AUTO_INCREMENT,
  `categorias` varchar(45) NOT NULL,
  `Descrição` varchar(100) NOT NULL,
  `Preço` decimal(8,2) NOT NULL,
  `Imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtabela_de_produtos`),
  UNIQUE KEY `Nome da Imagem_UNIQUE` (`Imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabela_de_produtos`
--

LOCK TABLES `tabela_de_produtos` WRITE;
/*!40000 ALTER TABLE `tabela_de_produtos` DISABLE KEYS */;
INSERT INTO `tabela_de_produtos` VALUES (1,'videogames','Nintendo Switch Azul e Vermelho',3400.00,'imagens/Console%20NSwitch.png'),(2,'videogames','PlayStation 4 1TB + Controle',2990.00,'imagens/Console%20PS4.png'),(3,'videogames','Xbox One 1TB + Controle',2499.00,'imagens/Console%20Xbox.png'),(4,'controles','Controle PlayStation 4 - Preto - Sem fio',219.00,'imagens/Controle%20PS4.png'),(5,'controles','Controle Xbox One - Preto - Sem fio',400.00,'imagens/controle%20xbox.png'),(6,'jogos','Jogo Injustice 2 - PlayStation 4',89.00,'imagens/Injustice%202%20PS4.png'),(7,'jogos','Jogo GTA V - Xbox One',149.00,'imagens/GTA%20Xbox.png'),(8,'jogos','Jogo Mario Kart - Nintendo Switch',360.00,'imagens/Mario%20Kart%20NSwitch.png'),(9,'fone','Headset Gamer Warrior Straton',269.00,'imagens/Headset%20gamer.png'),(10,'teclado','Teclado Mecânico Redragon',250.00,'imagens/Teclado%20mec%C3%A2nico.png'),(11,'mouse','Mouse Gamer Logitech',190.00,'imagens/mouse%20gamer.png'),(12,'monitor','Monitor Gamer Ultrawide Curvo 49\" Asus',9800.00,'imagens/monitor%20gamer.png');
/*!40000 ALTER TABLE `tabela_de_produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-03 23:28:40
