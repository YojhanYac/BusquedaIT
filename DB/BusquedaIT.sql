-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: busquedalaboral
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

CREATE DATABASE `busquedalaboral`;
USE `busquedalaboral`;

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
-- Table structure for table `puestos`
--


DROP TABLE IF EXISTS `puestos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puestos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `nivel` varchar(50) DEFAULT NULL,
  `remuneracion` varchar(50) DEFAULT NULL,
  `habilidadesTecnicas` varchar(300) NOT NULL,
  `habilidadesBlandas` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puestos`
--

LOCK TABLES `puestos` WRITE;
/*!40000 ALTER TABLE `puestos` DISABLE KEYS */;
INSERT INTO `puestos` VALUES (1,'Desarrollador','Ey','Jr','50000','PHP, Java, SQL, Git','Proactivo, universitario, autonomo','2020-05-30 23:52:04','2020-05-30 23:52:04'),(2,'Soporte IT','PanEnergy','Junior','20000','Hardware y Software','Estudiante, vocación de servicio','2020-05-31 08:35:05','2020-05-31 08:35:05'),(3,'Backend','Epidata','Ssr','20000','Git, Bootstrap, VS Code, MySql','Liderazgo, empatico, extrovertido','2020-06-01 01:27:23','2020-05-31 10:05:00'),(4,'Técnico Jr','Accenture','Jr','-','Técnico, Active Directory, Windows, Office','Vocación de servicio','2020-06-07 01:02:41','2020-05-31 23:23:10'),(5,'Desarrollador PHP Sr','Globant','Jr','-','PHP, CSS, HTML, MySQL y Chrome','Comunicación','2020-06-07 01:04:05','2020-06-01 01:28:50'),(6,'Java Sr','MPA Consultora','Sr','-','Backend, java avanzado, diseñar sistemas','Comprometido, capacidad de liderar proyectos, facilidad para trabajar en equipo, toma de decisiones,','2020-06-07 01:04:05','2020-06-05 23:00:33'),(7,'Desarrollador FrontEnd React.JS Sr','-','Sr','-','Desarrollo de aplicaciones web y mobile, React.Js, JavaScript, Angular, React Native, Java, PHP','-','2020-06-07 01:04:05','2020-06-05 23:07:56'),(8,'Programadores PHP, Python, NodeJS','Aliantec','Ssr','-','API REST, POO, JQuery, Bootstrap, CSS, SQL, Linux','-','2020-06-07 01:04:05','2020-06-05 23:11:24'),(9,'Desarollador .NET Ssr','Capital Humano','Ssr','-','Ajax, JQuery, JavaScript, XML','Metodologías Agiles','2020-06-07 01:04:24','2020-06-05 23:26:54'),(10,'Desarrollador Java Sr','IT Resources S.A','Sr','-','Java, Sprint boot, RESTful, JPA, Base de datos, Test Unitarios','-','2020-06-07 01:04:24','2020-06-05 23:29:13'),(11,'Desarrollador .NET Sr','-','Sr','-','.NET, C#, MVC, JavaScript, JQuery, Bootstrap, CSS, AngularJS, herramientas de versionado, Microservicios, Servicios Web,','-','2020-06-07 01:04:24','2020-06-05 23:39:37'),(12,'Lider Técnico PHP Sr','-','Sr','-','MySQL, JavaScript, Patrones de diseño, Laravel, Symfony, Codeigniter, Yii, PHP Unit, Git, SVN, Inglés intermedio','Liderazgo','2020-06-07 01:04:24','2020-06-06 17:04:58'),(13,'Full Stack Dev Sr','-','Sr','-','HTML, CSS, JQuery, JavaScript, PHP','-','2020-06-07 01:04:24','2020-06-06 17:15:38'),(14,'Desarrollador PHP Core Ssr','Lyracons','Ssr','-','Mantenimiento de aplicaciones, Web Services, REST, XML, JSON, OOP, Frameworks, Zend, Symfony, Laravel, Magento, VTex, Metodologías ágiles','Estimación, planificación, desarrollo, implementación','2020-06-07 01:04:32','2020-06-06 17:51:58'),(15,'Desarrollador PHP Ssr','IpsumHR','Ssr','-','PHP, SQL Server','-','2020-06-07 01:04:32','2020-06-06 17:56:09');
/*!40000 ALTER TABLE `puestos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-06 22:42:17
