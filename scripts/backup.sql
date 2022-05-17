-- MariaDB dump 10.19  Distrib 10.7.3-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: inmobiliaria
-- ------------------------------------------------------
-- Server version	10.7.3-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `arrendador`
--

DROP TABLE IF EXISTS `arrendador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arrendador` (
  `ide_ard` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_ard` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_ard` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_ard` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ide_pre` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ide_ard`),
  KEY `ide_pre` (`ide_pre`),
  CONSTRAINT `arrendador_ibfk_1` FOREIGN KEY (`ide_pre`) REFERENCES `predio` (`ide_pre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arrendador`
--

LOCK TABLES `arrendador` WRITE;
/*!40000 ALTER TABLE `arrendador` DISABLE KEYS */;
INSERT INTO `arrendador` VALUES
('10544098','Victor Rendon','victor@gmail.com','3132901009','0002'),
('10544308','Ruben Sanchez','schezrbn@gmail.com','3140868247','0008'),
('3176292','Carlos Sicard','sicardcarl@gmail.com','3159740229','0009'),
('34536646','Graciela Reyes','reyesgracie@gmail.com','3009979913','0006'),
('66767305','Isabel Rivera','isavera@gmail.com','3017687273','0003'),
('76307332','William Herrera','whrrea@gmail.com','3108347328','0000');
/*!40000 ALTER TABLE `arrendador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `arrendatario`
--

DROP TABLE IF EXISTS `arrendatario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arrendatario` (
  `ide_art` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_art` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_art` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_art` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ide_pre` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ide_art`),
  KEY `ide_pre` (`ide_pre`),
  CONSTRAINT `arrendatario_ibfk_1` FOREIGN KEY (`ide_pre`) REFERENCES `predio` (`ide_pre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arrendatario`
--

LOCK TABLES `arrendatario` WRITE;
/*!40000 ALTER TABLE `arrendatario` DISABLE KEYS */;
INSERT INTO `arrendatario` VALUES
('0','NULL','NULL','NULL','NULL'),
('10528372','Mario Gomez Sanchez','MGS@gmail.com','3101993475','0009'),
('10545286','Franco Garcia','fcga@gmail.com','3135174715','0006'),
('16274195','Ana Carmen Ramirez','anacarez@gmail.com','3115291367','0002'),
('34572691','Hernesto Pumarejo','hpumarjo@gmail.com','3004622551','0000'),
('65067823','Diana Maria Martinez','DMM@gmail.com','3051801019','0008'),
('76306776','Mauricio OrdoÃ±ez','mordonez@gmail.com','3188270395','0003');
/*!40000 ALTER TABLE `arrendatario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comprador`
--

DROP TABLE IF EXISTS `comprador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comprador` (
  `ide_com` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_com` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_com` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_com` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ide_pre` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ide_com`),
  KEY `ide_pre` (`ide_pre`),
  CONSTRAINT `comprador_ibfk_1` FOREIGN KEY (`ide_pre`) REFERENCES `predio` (`ide_pre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comprador`
--

LOCK TABLES `comprador` WRITE;
/*!40000 ALTER TABLE `comprador` DISABLE KEYS */;
INSERT INTO `comprador` VALUES
('0','NULL','NULL','NULL','NULL'),
('10523300','Humberto Palechor','palecho@gmail.com','3172727033','0001'),
('10546658','Javier Chamorro','chamorroj@gmail.com','3147850235','0007'),
('1467487','Carlos Pantoja','clspantoja@gmail.com','3016001497','0004'),
('92228625','Elkin Diaz','elkindaz@gmail.com','3189831858','0005');
/*!40000 ALTER TABLE `comprador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contrato`
--

DROP TABLE IF EXISTS `contrato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contrato` (
  `num_con` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tip_con` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vig_mes_con` tinyint(4) DEFAULT 0,
  `ide_pre` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`num_con`),
  KEY `ide_pre` (`ide_pre`),
  CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`ide_pre`) REFERENCES `predio` (`ide_pre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contrato`
--

LOCK TABLES `contrato` WRITE;
/*!40000 ALTER TABLE `contrato` DISABLE KEYS */;
INSERT INTO `contrato` VALUES
('0000','Arriendo',12,'0004'),
('0001','Venta',0,'0008'),
('0002','Arriendo',48,'0000'),
('0003','Arriendo',6,'0003'),
('0004','Venta',0,'0005'),
('0005','Venta',0,'0006'),
('0006','Arriendo',48,'0007'),
('0007','Venta',0,'0001'),
('0008','Arriendo',12,'0002'),
('0009','Arriendo',12,'0009');
/*!40000 ALTER TABLE `contrato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factura` (
  `ide_fac` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fec_fac` date NOT NULL,
  `val_fac` int(11) NOT NULL,
  `fec_ven_fac` date NOT NULL,
  `num_con` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ide_fac`),
  KEY `num_con` (`num_con`),
  CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`num_con`) REFERENCES `contrato` (`num_con`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
INSERT INTO `factura` VALUES
('0000','2019-03-23',410000,'2020-03-23','0000'),
('0001','2017-05-12',250000000,'2019-06-12','0001'),
('0002','2018-01-28',1350000,'2021-01-28','0002'),
('0003','2016-06-13',1000000,'2016-12-13','0003'),
('0004','2019-02-03',156000000,'2020-12-03','0004'),
('0005','2015-04-12',240000000,'2018-04-18','0005'),
('0006','2016-04-12',550000,'2019-04-18','0006'),
('0007','2018-04-12',200000000,'2022-04-18','0007'),
('0008','2016-08-17',1200000,'2017-08-17','0008'),
('0009','2021-05-17',1600000,'2022-06-17','0009');
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pago`
--

DROP TABLE IF EXISTS `pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pago` (
  `ide_pag` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `val_pag` int(11) NOT NULL,
  `tip_pag` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fec_pag` date NOT NULL,
  `ide_art` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ide_com` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ide_pag`),
  KEY `ide_art` (`ide_art`),
  KEY `ide_com` (`ide_com`),
  CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`ide_art`) REFERENCES `arrendatario` (`ide_art`),
  CONSTRAINT `pago_ibfk_2` FOREIGN KEY (`ide_com`) REFERENCES `comprador` (`ide_com`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pago`
--

LOCK TABLES `pago` WRITE;
/*!40000 ALTER TABLE `pago` DISABLE KEYS */;
INSERT INTO `pago` VALUES
('0000',410000,'Efectivo','2020-01-23','34572691','0'),
('0001',250000000,'Cheque','2018-07-12','0','10523300'),
('0002',1350000,'Efectivo','2019-03-15','16274195','0'),
('0003',1000000,'Efectivo','2019-03-15','76306776','0'),
('0004',156000000,'Cheque','2019-09-30','0','1467487'),
('0005',240000000,'Cheque','2017-12-11','0','92228625'),
('0006',550000,'Efectivo','2016-05-11','10545286','0'),
('0007',200000000,'Efectivo','2019-04-18','0','10546658'),
('0008',1200000,'Efectivo','2016-12-15','65067823','0'),
('0009',1600000,'Efectivo','2021-07-19','10528372','0');
/*!40000 ALTER TABLE `pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `predio`
--

DROP TABLE IF EXISTS `predio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `predio` (
  `ide_pre` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dir_pre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `est_pre` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ide_pre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `predio`
--

LOCK TABLES `predio` WRITE;
/*!40000 ALTER TABLE `predio` DISABLE KEYS */;
INSERT INTO `predio` VALUES
('0000','Palermo','6'),
('0001','Campo Hermoso','4'),
('0002','Villa Nueva','3'),
('0003','Peralonso','2'),
('0004','Chipre','4'),
('0005','Sancancio','6'),
('0006','El Campin','4'),
('0007','San Sebastian','1'),
('0008','Versalles','5'),
('0009','El Trebol','6'),
('NULL','NULL','0');
/*!40000 ALTER TABLE `predio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendedor`
--

DROP TABLE IF EXISTS `vendedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendedor` (
  `ide_ven` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_ven` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_ven` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_ven` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ide_pre` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ide_ven`),
  KEY `ide_pre` (`ide_pre`),
  CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`ide_pre`) REFERENCES `predio` (`ide_pre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendedor`
--

LOCK TABLES `vendedor` WRITE;
/*!40000 ALTER TABLE `vendedor` DISABLE KEYS */;
INSERT INTO `vendedor` VALUES
('10542613','Reimir Ojeda','reimir@gmail.com','3002692030','0004'),
('10546903','Jose Pasaje','pasajejse@gmail.com','3193037693','0001'),
('34529403','Luz Orozco','lzorozco@gmail.com','3127703750','0007'),
('76323271','Carlos Mora','clrsmora@gmail.com','3146115564','0005');
/*!40000 ALTER TABLE `vendedor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-17 15:23:12
