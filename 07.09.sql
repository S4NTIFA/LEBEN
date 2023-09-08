-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: snb
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `entrada`
--

DROP TABLE IF EXISTS `entrada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entrada` (
  `idEntrada` int(50) NOT NULL,
  `cantidadEntrada` varchar(50) DEFAULT NULL,
  `categoriaProducto` varchar(50) DEFAULT NULL,
  `tipoEntrada` varchar(50) DEFAULT NULL,
  `idProducto` int(50) DEFAULT NULL,
  `fechaEntrada` date DEFAULT NULL,
  PRIMARY KEY (`idEntrada`),
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `entrada_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrada`
--

LOCK TABLES `entrada` WRITE;
/*!40000 ALTER TABLE `entrada` DISABLE KEYS */;
INSERT INTO `entrada` VALUES (1,'Dos','Camisetas','Aprobada',1,'2023-06-05'),(2,'Dos','Camisetas','Aprobada',2,'2023-03-01'),(3,'Uno','Zapatos','Aprobada',3,'2023-06-01'),(4,'Cuatro','Camiseta','Aprobada',4,'2023-06-02'),(5,'Ocho','Chaquetas','Aprobada',5,'2023-06-03'),(6,'Cinco','Camisetas','Fallida',6,'2023-06-04'),(7,'Seis','Canguros','Aprobada',7,'2023-06-06'),(8,'Uno','Camisetas','Aprobada',8,'2023-06-07'),(9,'Doce','Zapatos','Aprobada',9,'2023-06-08'),(10,'Catorce','Camisetas','Aprobada',10,'2023-06-09'),(11,'Veinticinco','Camisetas','Aprobada',11,'2023-06-10'),(12,'Treinta y nueve','Chaquetas','Aprobada',12,'2023-06-11'),(13,'Dos','Canguros','Fallida',13,'2023-06-12'),(14,'Quice','Zapatos','Aprobada',1,'2023-06-13'),(15,'Veinte','Chaquetas','Aprobada',2,'2023-06-14'),(16,'Uno','Maletas','Aprobada',3,'2023-06-15'),(17,'Dos','Camisetas','Aprobada',4,'2023-06-16'),(18,'Tres','Zapatos','Aprobada',5,'2023-06-17'),(19,'Cuatro','Maletas','Aprobada',6,'2023-06-18'),(20,'veinte','Chaquetas','Aprobada',7,'2023-06-19'),(21,'veintiuno','Camisetas','Aprobada',8,'2023-06-20'),(22,'veintid?s','Camisetas','Aprobada',9,'2023-06-21'),(23,'veintitr?s','Zapatos','Aprobada',10,'2023-06-22'),(24,'veinticuatro','Maletas','Fallida',11,'2023-06-23'),(25,'veinticinco','Canguros','Aprobada',12,'2023-06-24'),(26,'veintis?is','Camisetas','Aprobada',13,'2023-06-24'),(27,'veintisiete','Zapatos','Aprobada',1,'2023-07-01'),(28,'veintiocho','Maletas','Aprobada',2,'2023-07-02'),(29,'veintinueve','Chaquetas','Aprobada',3,'2023-07-03'),(30,'treinta','Zapatos','Aprobada',4,'2023-07-04'),(31,'treinta y uno','Camisetas','Aprobada',5,'2023-07-05'),(32,'treinta y dos','Zapatos','Aprobada',6,'2023-07-06'),(33,'treinta y tres','Camisetas','Aprobada',7,'2023-07-07'),(34,'treinta y cuatro','Chaquetas','Aprobada',8,'2023-07-08'),(35,'treinta y cinco','Canguros','Aprobada',9,'2023-07-09'),(36,'treinta y seis','Camisetas','Aprobada',10,'2023-07-10'),(37,'treinta y siete','Camisetas','Aprobada',11,'2023-07-11'),(38,'treinta y ocho','Zapatos','Aprobada',12,'2023-07-12'),(39,'treinta y nueve','Camisetas','Fallida',13,'2023-07-13'),(40,'cuarenta','Camisetas','Aprobada',1,'2023-07-14'),(41,'cuarenta y uno','Zapatos','Aprobada',2,'2023-07-15'),(42,'cuarenta y dos','Chaquetas','Aprobada',3,'2023-07-16'),(43,'cuarenta y tres','Canguros','Aprobada',4,'2023-07-17'),(44,'cuarenta y cuatro','Zapatos','Fallida',5,'2023-07-18'),(45,'cuarenta y cinco','Camisetas','Aprobada',6,'2023-07-19'),(46,'cuarenta y seis','Maletas','Aprobada',7,'2023-07-20'),(47,'cuarenta y siete','Zapatos','Aprobada',8,'2023-07-21'),(48,'cuarenta y ocho','Camisetas','Fallida',9,'2023-07-22'),(49,'cuarenta y nueve','Zapatos','Aprobada',10,'2023-07-23'),(50,'cincuenta','Zapatos','Aprobada',11,'2023-07-24');
/*!40000 ALTER TABLE `entrada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insumos`
--

DROP TABLE IF EXISTS `insumos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `insumos` (
  `idInsumos` int(50) NOT NULL,
  `cantidadInsumos` int(50) DEFAULT NULL,
  `precioInsumos` int(50) DEFAULT NULL,
  `tipoInsumos` varchar(50) DEFAULT NULL,
  `idProduccion` int(50) DEFAULT NULL,
  PRIMARY KEY (`idInsumos`),
  KEY `idProduccion` (`idProduccion`),
  CONSTRAINT `insumos_ibfk_1` FOREIGN KEY (`idProduccion`) REFERENCES `produccion` (`idProduccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insumos`
--

LOCK TABLES `insumos` WRITE;
/*!40000 ALTER TABLE `insumos` DISABLE KEYS */;
INSERT INTO `insumos` VALUES (1,20,30000,'Cordones',1),(2,20,40000,'Tinta',2),(3,20,50000,'Zuela',3),(4,20,60000,'Pegamento',5),(5,20,70000,'Estanpas',6);
/*!40000 ALTER TABLE `insumos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `idPedido` int(50) NOT NULL,
  `fechaPedido` date DEFAULT NULL,
  `tipoPedido` varchar(50) DEFAULT NULL,
  `estadoPedido` varchar(50) DEFAULT NULL,
  `valorPedido` int(50) DEFAULT NULL,
  `idUsuarios` int(50) DEFAULT NULL,
  `idVentas` int(50) DEFAULT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `idUsuarios` (`idUsuarios`),
  KEY `idVentas` (`idVentas`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuarios`),
  CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`idVentas`) REFERENCES `ventas` (`idVentas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (1,'2023-07-02','Personalizado','Aprobado',20000,1,1),(2,'2023-08-11','Venta','Aprobado',20000,2,2),(3,'2023-08-11','Personalizado','Aprobado',50000,3,3),(4,'2023-10-03','Venta','Aprobado',30000,4,4),(5,'2023-01-09','Personalizado','Aprobado',10000,5,5),(6,'2023-04-06','Personalizado','Fallida',20000,6,6),(7,'2023-07-08','Venta','Aprobado',60000,7,7),(8,'2023-09-02','Venta','Aprobado',80000,8,8),(9,'2023-12-10','Personalizado','Aprobado',10000,9,9),(10,'2023-05-04','Personalizado','Fallida',40000,10,10),(11,'2023-01-15','Venta','Aprobado',50000,11,11),(12,'2023-02-22','Venta','Aprobado',60000,12,12),(13,'2023-03-10','Personalizado','Fallida',80000,13,13),(14,'2023-04-27','Venta','Aprobado',70000,14,14),(15,'2023-05-08','Venta','Aprobado',20000,15,15),(16,'2023-06-13','Personalizado','Aprobado',10000,16,16),(17,'2023-07-19','Venta','Aprobado',60000,17,17),(18,'2023-08-25','Venta','Aprobado',90000,18,18),(19,'2023-09-04','Personalizado','Aprobado',10000,19,19),(20,'2023-10-21','Personalizado','Aprobado',20000,20,20),(21,'2023-11-06','Venta','Aprobado',90000,21,21),(22,'2023-12-17','Venta','Fallida',80000,22,22),(23,'2024-01-02','Venta','Aprobado',20000,23,23),(24,'2024-02-12','Venta','Aprobado',10000,24,24),(25,'2024-03-18','Venta','Aprobado',10000,25,25),(26,'2024-04-29','Venta','Fallida',50000,26,26),(27,'2024-05-09','Personalizado','Aprobado',50000,27,27),(28,'2024-06-25','Venta','Aprobado',60000,28,28),(29,'2024-07-30','Personalizado','Fallida',40000,29,29),(30,'2024-08-05','Venta','Aprobado',50000,30,30),(31,'2024-09-16','Venta','Aprobado',50000,31,31),(32,'2024-10-12','Venta','Aprobado',80000,32,32),(33,'2024-11-19','Personalizado','Aprobado',70000,33,33),(34,'2024-12-23','Venta','Aprobado',40000,34,34),(35,'2025-01-07','Venta','Aprobado',50000,35,35),(36,'2025-02-14','Venta','Aprobado',50000,36,36),(37,'2025-03-22','Personalizado','Aprobado',90000,37,37),(38,'2025-04-30','Venta','Aprobado',10000,38,38),(39,'2025-05-11','Venta','Aprobado',70000,39,39),(40,'2025-06-26','Personalizado','Aprobado',80000,40,40),(41,'2025-07-31','Personalizado','Aprobado',50000,41,41),(42,'2025-08-10','Venta','Aprobado',50000,42,42),(43,'2025-09-17','Venta','Aprobado',60000,43,43),(44,'2025-10-23','Personalizado','Aprobado',10000,44,44),(45,'2025-11-15','Personalizado','Aprobado',30000,45,45),(46,'2025-12-27','Venta','Aprobado',40000,46,46),(47,'2026-01-09','Venta','Aprobado',80000,47,47),(48,'2026-02-19','Venta','Aprobado',60000,48,48),(49,'2026-03-28','Venta','Fallida',80000,49,49),(50,'0000-00-00','Personalizado','Aprobado',10000,50,50);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produccion`
--

DROP TABLE IF EXISTS `produccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produccion` (
  `idProduccion` int(50) NOT NULL,
  `nombreProduccion` varchar(50) DEFAULT NULL,
  `cantidadProduccion` int(50) DEFAULT NULL,
  `idPedido` int(50) DEFAULT NULL,
  PRIMARY KEY (`idProduccion`),
  KEY `idPedido` (`idPedido`),
  CONSTRAINT `produccion_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produccion`
--

LOCK TABLES `produccion` WRITE;
/*!40000 ALTER TABLE `produccion` DISABLE KEYS */;
INSERT INTO `produccion` VALUES (1,'PersonalizacionP',1,1),(2,'PersonalizacionP',1,2),(3,'PersonalizacionP',1,3),(4,'PersonalizacionP',1,4),(5,'PersonalizacionP',1,5),(6,'PersonalizacionP',1,6),(7,'PersonalizacionP',1,7),(8,'PersonalizacionP',1,8),(9,'PersonalizacionP',1,9),(10,'PersonalizacionP',1,10),(11,'PersonalizacionP',1,11),(12,'PersonalizacionP',1,12),(13,'PersonalizacionP',1,13),(14,'PersonalizacionP',1,14),(15,'PersonalizacionP',1,15),(16,'PersonalizacionP',1,16),(17,'PersonalizacionP',1,17),(18,'PersonalizacionP',1,18),(19,'PersonalizacionP',1,19),(20,'PersonalizacionP',1,20),(21,'PersonalizacionP',1,21),(22,'PersonalizacionP',1,22),(23,'PersonalizacionP',1,23),(24,'PersonalizacionP',1,24),(25,'PersonalizacionP',1,25),(26,'PersonalizacionP',1,26),(27,'PersonalizacionP',1,27),(28,'PersonalizacionP',1,28),(29,'PersonalizacionP',1,29),(30,'PersonalizacionP',1,30),(31,'PersonalizacionP',1,31),(32,'PersonalizacionP',1,32),(33,'PersonalizacionP',1,33),(34,'PersonalizacionP',1,34),(35,'PersonalizacionP',1,35),(36,'PersonalizacionP',1,36),(37,'PersonalizacionP',1,37),(38,'PersonalizacionP',1,38),(39,'PersonalizacionP',1,39),(40,'PersonalizacionP',1,40),(41,'PersonalizacionP',1,41),(42,'PersonalizacionP',1,42),(43,'PersonalizacionP',1,43),(44,'PersonalizacionP',1,44),(45,'PersonalizacionP',1,45),(46,'PersonalizacionP',1,46),(47,'PersonalizacionP',1,47),(48,'PersonalizacionP',1,48),(49,'PersonalizacionP',1,49),(50,'PersonalizacionP',1,50);
/*!40000 ALTER TABLE `produccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `idProducto` int(50) NOT NULL,
  `nombreProducto` varchar(50) DEFAULT NULL,
  `precioProducto` int(50) DEFAULT NULL,
  `cantidadProducto` int(50) DEFAULT NULL,
  `tipoProducto` varchar(50) DEFAULT NULL,
  `idVentas` int(50) DEFAULT NULL,
  `idProduccion` int(50) DEFAULT NULL,
  `idProveedor` int(50) DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `idVentas` (`idVentas`),
  KEY `idProduccion` (`idProduccion`),
  KEY `idProveedor` (`idProveedor`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idVentas`) REFERENCES `ventas` (`idVentas`),
  CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`idProduccion`) REFERENCES `produccion` (`idProduccion`),
  CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,'Camiseta negra',30000,20,'Sin_personalizacion',1,1,1),(2,'Camiseta blanca',30000,20,'Con personalizacion',2,2,2),(3,'Camiseta dese?ada',30000,20,'Sin personalizacion',3,3,3),(4,'Zapato negro',90000,20,'Con personalizacion',4,4,4),(5,'Zapato blanco',90000,20,'Con personalizacion',5,5,5),(6,'Zapato cafe',90000,20,'Con personalizacion',6,6,6),(7,'Maleta negra',60000,20,'Sin personalizacion',7,7,7),(8,'Maleta blanca',60000,20,'Sin personalizacion',8,8,8),(9,'Maleta cafe',60000,20,'Sin personalizacion',9,9,9),(10,'Canguro negro',50000,20,'Sin personalizacion',10,10,10),(11,'Pantalon negro',70000,20,'Conn personalizacion',11,11,11),(12,'Pantalon blanco',70000,20,'Con personalizacion',12,12,12),(13,'Pantalon cafe',70000,20,'Sin personalizacion',13,13,13);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedor` (
  `idProveedor` int(50) NOT NULL,
  `nombreProveedor` varchar(50) DEFAULT NULL,
  `direccionProveedor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (1,'Bartolo','Avenida 19 cra.10'),(2,'Edwin','Cra. 98 #0 - 41'),(3,'Tulio','Cra. 93#0 - 49'),(4,'Laisa','Avenida 134 con boyaca'),(5,'Edwin','Cra. 98 #0 - 41'),(6,'Bartolo','Avenida 19 cra.10'),(7,'Laisa','Avenida 134 con boyaca'),(8,'Laisa','Avenida 134'),(9,'Bartolo','Avenida 19 cra.10'),(10,'Edwin','Cra. 98 #0 - 41'),(11,'Tulio','Cra. 93#0 - 49'),(12,'Bartolo','Avenida 134 con boyaca'),(13,'Tulio','Cra. 93#0 - 49');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idCliente` int(50) unsigned NOT NULL,
  `idAdmistrador` int(50) DEFAULT NULL,
  `idEmpleado` int(50) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salida`
--

DROP TABLE IF EXISTS `salida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salida` (
  `idSalida` int(50) NOT NULL,
  `idProducto` int(50) DEFAULT NULL,
  `numeroSalida` int(50) DEFAULT NULL,
  `tipoSalida` varchar(50) DEFAULT NULL,
  `fechaSalida` date DEFAULT NULL,
  PRIMARY KEY (`idSalida`),
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `salida_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salida`
--

LOCK TABLES `salida` WRITE;
/*!40000 ALTER TABLE `salida` DISABLE KEYS */;
INSERT INTO `salida` VALUES (1,1,1,'Venta','2023-01-01'),(2,2,2,'Defecto','2023-01-02'),(3,3,3,'Venta','2023-01-03'),(4,4,4,'Venta','2023-01-04'),(5,5,5,'Defecto','2023-01-05'),(6,6,6,'Venta','2023-01-06'),(7,7,7,'Venta','2023-01-07'),(8,8,8,'Venta','2023-01-08'),(9,9,9,'Venta','2023-01-09'),(10,10,10,'Venta','2023-01-10'),(11,11,11,'Venta','2023-01-11'),(12,12,12,'Venta','2023-01-12'),(13,13,13,'Venta','2023-01-13'),(14,1,14,'Venta','2023-01-14'),(15,2,15,'Venta','2023-01-15'),(16,3,16,'Defecto','2023-01-16'),(17,4,17,'Venta','2023-01-17'),(18,5,18,'Venta','2023-01-18'),(19,6,19,'Venta','2023-01-19'),(20,7,20,'Defecto','2023-01-20'),(21,8,21,'Venta','2023-02-01'),(22,9,22,'Venta','2023-02-02'),(23,10,23,'Venta','2023-02-03'),(24,11,24,'Venta','2023-02-04'),(25,12,25,'Venta','2023-02-05'),(26,13,26,'Venta','2023-02-06'),(27,1,27,'Defecto','2023-02-07'),(28,2,28,'Venta','2023-02-08'),(29,3,29,'Venta','2023-02-09'),(30,4,30,'Venta','2023-02-10'),(31,5,31,'Venta','2023-02-11'),(32,6,32,'Venta','2023-02-12'),(33,7,33,'Venta','2023-02-13'),(34,8,34,'Defecto','2023-02-14'),(35,9,35,'Venta','2023-02-15'),(36,10,36,'Venta','2023-02-16'),(37,11,37,'Venta','2023-02-17'),(38,12,38,'Defecto','2023-02-18'),(39,13,39,'Venta','2023-02-19'),(40,1,40,'Venta','2023-02-20'),(41,2,41,'Venta','2023-03-01'),(42,3,42,'Venta','2023-03-02'),(43,4,43,'Venta','2023-03-03'),(44,5,44,'Venta','2023-03-04'),(45,6,45,'Venta','2023-03-05'),(46,7,46,'Venta','2023-03-06'),(47,8,47,'Defecto','2023-03-07'),(48,9,48,'Venta','2023-03-08'),(49,10,49,'Venta','2023-03-09'),(50,11,50,'Venta','2023-03-10');
/*!40000 ALTER TABLE `salida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuarios` int(50) NOT NULL,
  `nombreUsuarios` varchar(50) DEFAULT NULL,
  `apellidoUsuarios` varchar(50) DEFAULT NULL,
  `telefonoUsuarios` int(50) DEFAULT NULL,
  `emailUsuarios` varchar(50) DEFAULT NULL,
  `edadUsuarios` int(50) DEFAULT NULL,
  `direccionUsuarios` varchar(50) DEFAULT NULL,
  `ciudadUsuarios` varchar(50) DEFAULT NULL,
  `idCliente` int(50) unsigned DEFAULT NULL,
  `idEmpleado` int(50) DEFAULT NULL,
  `idAdministrador` int(50) DEFAULT NULL,
  PRIMARY KEY (`idUsuarios`),
  KEY `idCliente` (`idCliente`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `roles` (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Juan','Lopez',2147483647,'juan.lopez@gmail.com',18,'calle 123','Bogota',NULL,NULL,NULL),(2,'Maria','lozano',2147483647,'maria.lozano9@gmail.com',45,'calle 19','Medellin',NULL,NULL,NULL),(3,'Merlina','choconta',324568211,'merlin.choco@gmail.com',38,'calle 40','Bogota',NULL,NULL,NULL),(4,'Edwin','fajardo',2147483647,'edwin.faja@gmail.com',18,'calle 123','Bogota',NULL,NULL,NULL),(5,'Alexander','qui?ones',2147483647,'alexa.qui@gmail.com',48,'calle 170','Bucaramanga',NULL,NULL,NULL),(6,'loren','zuluaga',314896532,'loren.zuluaga@gmail.com',45,'calle 80','medellin',NULL,NULL,NULL),(7,'Juan','horta',2147483647,'juan.hort@gmail.com',19,'calle 123','Bogota',NULL,NULL,NULL),(8,'yesenia','fajardo',2147483647,'yeseni.lopez@gmail.com',18,'calle 123','Bogota',NULL,NULL,NULL),(9,'Juan','camilo',315678935,'juan.camilo@gmail.com',56,'calle 134','Bogota',NULL,NULL,NULL),(10,'juan','Lopez',2147483647,'juan.lopez@gmail.com',67,'calle 123','Bogota',NULL,NULL,NULL),(11,'Sergio','Mendoza',1234567890,'sergio.mendoza@gmail.com',45,'Carrera 12345','Bogot?',NULL,NULL,NULL),(12,'Allan','Contreras',2147483647,'allan.contreras@gmail.com',21,'Avenida 134','Bogota',NULL,NULL,NULL),(13,'Daniel','C?rdenas',2147483647,'daniel.cardenas@gmail.com',33,'Calle 34567','Cali',NULL,NULL,NULL),(14,'Carolina','Morales',2147483647,'carolina.morales@gmail.com',29,'Carrera 45678','Barranquilla',NULL,NULL,NULL),(15,'Andrea','G?mez',2147483647,'andrea.gomez@gmail.com',32,'Avenida 56789','Medell?n',NULL,NULL,NULL),(16,'Luis','Hern?ndez',2147483647,'luis.hernandez@gmail.com',40,'Calle 67890','Bogot?',NULL,NULL,NULL),(17,'Marcela','Rojas',2147483647,'marcela.rojas@gmail.com',38,'Carrera 78901','Cali',NULL,NULL,NULL),(18,'Javier','Garc?a',2147483647,'javier.garcia@gmail.com',36,'Avenida 89012','Bogot?',NULL,NULL,NULL),(19,'Camila','Silva',2147483647,'camila.silva@gmail.com',24,'Calle 90123','Medell?n',NULL,NULL,NULL),(20,'Diego','P?rez',123456789,'diego.perez@gmail.com',31,'Carrera 01234','Barranquilla',NULL,NULL,NULL),(21,'Alexander','Qui?ones',2147483647,'alexa.qui@gmail.com',28,'Calle 170','Bucaramanga',NULL,NULL,NULL),(22,'Valentina','Castro',2147483647,'valentina.castro@gmail.com',27,'Avenida 23456','Medell?n',NULL,NULL,NULL),(23,'Valentino','Castro',2147483647,'valentino.castro@gmail.com',27,'Avenida 23456','Medell?n',NULL,NULL,NULL),(24,'andres','Castro',2147483647,'andres.castro@gmail.com',54,'Avenida 256','Cali',NULL,NULL,NULL),(25,'David','L?pez',2147483647,'david.lopez@gmail.com',33,'Carrera 5678','Bogot?',NULL,NULL,NULL),(26,'Mar?a','Gonz?lez',2147483647,'maria.gonzalez@gmail.com',28,'Calle 7890','Medell?n',NULL,NULL,NULL),(27,'Pedro','Ram?rez',2147483647,'pedro.ramirez@gmail.com',41,'Avenida 9012','Cali',NULL,NULL,NULL),(28,'Laura','Herrera',2147483647,'laura.herrera@gmail.com',30,'Carrera 12345','Barranquilla',NULL,NULL,NULL),(29,'Carlos','Fern?ndez',2147483647,'carlos.fernandez@gmail.com',29,'Calle 23456','Medell?n',NULL,NULL,NULL),(30,'Ana','Torres',123456789,'ana.torres@gmail.com',36,'Avenida 34567','Bogot?',NULL,NULL,NULL),(31,'Andr?s','G?mez',1234567890,'andres.gomez@gmail.com',25,'Carrera 45678','Cali',NULL,NULL,NULL),(32,'Valentina','Vargas',2147483647,'valentina.vargas@gmail.com',31,'Calle 56789','Barranquilla',NULL,NULL,NULL),(33,'Javier','Rojas',2147483647,'javier.rojas@gmail.com',27,'Avenida 67890','Bogot?',NULL,NULL,NULL),(34,'Carolina','Silva',2147483647,'carolina.silva@gmail.com',39,'Carrera 78901','Medell?n',NULL,NULL,NULL),(35,'Gabriel','P?rez',2147483647,'gabriel.perez@gmail.com',32,'Calle 89012','Cali',NULL,NULL,NULL),(36,'Mariana','L?pez',2147483647,'mariana.lopez@gmail.com',28,'Avenida 90123','Barranquilla',NULL,NULL,NULL),(37,'Daniel','Garc?a',2147483647,'daniel.garcia@gmail.com',30,'Carrera 01234','Medell?n',NULL,NULL,NULL),(38,'Sof?a','Hern?ndez',2147483647,'sofia.hernandez@gmail.com',26,'Calle 12345','Bogot?',NULL,NULL,NULL),(39,'Alejandro','Mendoza',2147483647,'alejandro.mendoza@gmail.com',34,'Avenida 23456','Cali',NULL,NULL,NULL),(40,'Fernanda','Castro',123456789,'fernanda.castro@gmail.com',29,'Carrera 34567','Barranquilla',NULL,NULL,NULL),(41,'Camilo','G?mez',1234567890,'camilo.gomez@gmail.com',37,'Calle 45678','Medell?n',NULL,NULL,NULL),(42,'Natalia','Rojas',2147483647,'natalia.rojas@gmail.com',31,'Avenida 56789','Bogot?',NULL,NULL,NULL),(43,'Gabriel','Gonz?lez',2147483647,'gabriel.gonzalez@gmail.com',29,'Carrera 67890','Medell?n',NULL,NULL,NULL),(44,'Valeria','Herrera',2147483647,'valeria.herrera@gmail.com',27,'Calle 78901','Cali',NULL,NULL,NULL),(45,'Andr?s','Silva',2147483647,'andres.silva@gmail.com',33,'Avenida 90123','Barranquilla',NULL,NULL,NULL),(46,'Sof?a','Torres',2147483647,'sofia.torres@gmail.com',28,'Carrera 01234','Medell?n',NULL,NULL,NULL),(47,'Mateo','L?pez',2147483647,'mateo.lopez@gmail.com',35,'Calle 12345','Bogot?',NULL,NULL,NULL),(48,'Laura','G?mez',2147483647,'laura.gomez@gmail.com',30,'Avenida 23456','Cali',NULL,NULL,NULL),(49,'Alejandro','Castro',2147483647,'alejandro.castro@gmail.com',32,'Carrera 34567','Barranquilla',NULL,NULL,NULL),(50,'Mariana','P?rez',123456789,'mariana.perez@gmail.com',26,'Calle 45678','Medell?n',NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventas` (
  `idVentas` int(50) NOT NULL,
  `valorVentas` int(50) DEFAULT NULL,
  PRIMARY KEY (`idVentas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (1,20000),(2,20000),(3,30000),(4,40000),(5,50000),(6,60000),(7,70000),(8,80000),(9,90000),(10,10000),(11,10000),(12,20000),(13,30000),(14,10000),(15,20000),(16,30000),(17,40000),(18,50000),(19,60000),(20,70000),(21,80000),(22,90000),(23,10000),(24,10000),(25,20000),(26,30000),(27,10000),(28,20000),(29,30000),(30,40000),(31,50000),(32,60000),(33,70000),(34,80000),(35,90000),(36,10000),(37,10000),(38,20000),(39,30000),(40,10000),(41,20000),(42,30000),(43,40000),(44,50000),(45,60000),(46,70000),(47,80000),(48,90000),(49,10000),(50,110000);
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-07 23:31:44
