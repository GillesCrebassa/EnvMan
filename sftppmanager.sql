-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: sftppmanager
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

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
-- Table structure for table `audit`
--

DROP TABLE IF EXISTS `audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Result` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `envDetails_id` int(11) DEFAULT NULL,
  `productparamer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9218FF79DC9164ED` (`envDetails_id`),
  KEY `IDX_9218FF793DD2EA9` (`productparamer_id`),
  CONSTRAINT `FK_9218FF793DD2EA9` FOREIGN KEY (`productparamer_id`) REFERENCES `product_parameter` (`id`),
  CONSTRAINT `FK_9218FF79DC9164ED` FOREIGN KEY (`envDetails_id`) REFERENCES `env_details` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=711 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit`
--

LOCK TABLES `audit` WRITE;
/*!40000 ALTER TABLE `audit` DISABLE KEYS */;
INSERT INTO `audit` VALUES (1,'4.6.3\n\n',2,1),(2,'/bin/gcc\n\n',2,5),(3,'v5.10.1\n\n',2,3),(4,'/usr/opt/perl5/bin/perl\n\n',2,4),(5,'1.6.0_27\n\n',3,6),(6,'1.6.0_27\n\n',4,6),(7,'4.6.3\n\n',6,1),(8,'/bin/gcc\n\n',6,5),(9,'v5.10.1\n\n',6,3),(10,'/usr/opt/perl5/bin/perl\n\n',6,4),(11,'1.7.0_25\n\n',7,6),(12,'4.4.5\n\n',11,1),(13,'/usr/bin/gcc\n\n',11,5),(14,'v5.10.1\n\n',11,3),(15,'/usr/bin/perl\n\n',11,4),(16,'1.8.0_45\n\n',12,6),(17,'1.8.0_45\n\n',13,6),(18,'1.8.0_45\n\n',9,6),(19,'1.8.0_45\n\n',10,6),(20,'4.6.3\n\n',14,1),(21,'/bin/gcc\n\n',14,5),(22,'v5.10.1\n\n',14,3),(23,'/usr/opt/perl5/bin/perl\n\n',14,4),(24,'1.8.0_45\n\n',15,6),(25,'1.8.0_45\n\n',16,6),(26,'4.6.3\n\n',17,1),(27,'/bin/gcc\n\n',17,5),(28,'v5.8.8\n\n',17,3),(29,'/bin/perl\n\n',17,4),(30,'1.6.0_17\n\n',18,6),(31,'1.6.0_17\n\n',19,6),(32,'1.7.0_25\n\n',5,6),(33,'AIX\n\n',2,7),(34,'AIX\n\n',6,7),(35,'AIX\n\n',14,7),(36,'Linux\n\n',11,7),(37,'AIX\n\n',17,7),(38,'1.6.0_17\n\n',19,6),(39,'Linux\n\n',3,7),(40,'Linux\n\n',4,7),(41,'Linux\n\n',7,7),(42,'Linux\n\n',5,7),(43,'Linux\n\n',15,7),(44,'Linux\n\n',16,7),(45,'Linux\n\n',12,7),(46,'Linux\n\n',13,7),(47,'Linux\n\n',18,7),(48,'Linux\n\n',19,7),(49,'20480\n\n',2,8),(50,'/CW/F1/thalerv2/prg/TSD\n\n',2,9),(51,'2.2.1 build[21]\n\n',2,10),(52,'1.0.2h\n\n',2,11),(53,'5000\n\n',2,8),(54,'5700\n\n',6,8),(55,'/CW/F2/thalerv2/prg/TSD\n\n',6,9),(56,'2.2.1 build[21]\n\n',6,10),(57,'1.0.2h\n\n',6,11),(58,'7531\n\n',14,8),(59,'/CW/FF/thalerv2/prg/TSD\n\n',14,9),(60,'2.2.1 build[24]\n\n',14,10),(61,'1.0.2h\n\n',14,11),(62,'9000\n\n',11,8),(63,'/CW/IF/thalerv2/prg/TSD\n\n',11,9),(64,'2.2.1 build[22]\n\n',11,10),(65,'1.0.2h\n\n',11,11),(66,'1111\n\n',17,8),(67,'/CW/IP/thalerv2/prg/TSD\n\n',17,9),(68,'2.2.0 build[38]\n\n',17,10),(69,'0.9.8l\n\n',17,11),(70,'4.6.3\n\n',2,1),(71,'\n',2,12),(72,'5.1.4.0 - WrapPack 7\n\n',2,12),(73,'5.1.4.0 - WrapPack 7\n\n',6,12),(74,'5.1.4.0 - WrapPack 7\n\n',14,12),(75,'\n',11,12),(76,'5.1.4.0 - WrapPack 7 ES\n\n',17,12),(77,'5.1.0.GA\n\n',3,13),(78,'/opt/thalerng/jboss5\n\n',3,14),(79,'5.1.0.GA\n\n',4,13),(80,'/opt/thalerng/jboss5\n\n',4,14),(81,'start\nstart\n\n',5,13),(82,'start\nstart\n\n',5,13),(83,'/opt/thalerng/jboss6\n\n',5,14),(84,'6.1.0.GA\n\n',5,13),(85,'/opt/thalerng/jboss6\n\n',5,14),(86,'6.1.0.GA\n\n',7,13),(87,'/opt/thalerng/jboss6\n\n',7,14),(88,'\n',3,13),(89,'/opt/thalerng/jboss5\n\n',3,14),(90,'\n',3,13),(91,'5.1.0.GA\n\n',3,13),(92,'6.1.0.GA\n\n',7,13),(93,'-\n\n',15,13),(94,'Red Hat JBoss Enterprise Application Platform - Version 6.3.3.GA\n\n',15,13),(95,'/opt/thalerng/jboss-eap-6.3.3\n\n',15,14),(96,'Red Hat JBoss Enterprise Application Platform - Version 6.3.3.GA\n\n',16,13),(97,'/opt/thalerng/jboss-eap-6.3.3\n\n',16,14),(98,'5.1.0.GA\n\n',3,13),(99,'/opt/thalerng/jboss5\n\n',3,14),(100,'5.1.0.GA\n\n',3,13),(101,'5.1.0.GA\n\n',4,13),(102,'/opt/thalerng/jboss5\n\n',4,14),(103,'JBoss Enterprise Application Platform - Version 6.1.0.GA\n\n',7,13),(104,'/opt/thalerng/jboss6\n\n',7,14),(105,'JBoss Enterprise Application Platform - Version 6.1.0.GA\n\n',5,13),(106,'\n',11,12),(107,'Red Hat JBoss Enterprise Application Platform - Version 6.4.0.GA\n\n',12,13),(108,'/opt/thalerng/jboss6\n\n',12,14),(109,'Red Hat JBoss Enterprise Application Platform - Version 6.4.0.GA\n\n',13,13),(110,'/opt/thalerng/jboss6\n\n',13,14),(111,'5.1.4.0 - WrapPack 8 ES\n\n',11,12),(112,'\n',18,13),(113,'\n',18,14),(114,'\n',19,13),(115,'\n',19,14),(116,'Red Hat JBoss Enterprise Application Platform - Version 6.3.3.GA\n\n',9,13),(117,'/opt/thalerng/jboss6\n\n',9,14),(118,'Linux\n\n',10,7),(119,'Red Hat JBoss Enterprise Application Platform - Version 6.3.3.GA\n\n',10,13),(120,'/opt/thalerng/jboss6\n\n',10,14),(121,'Linux\n\n',9,7),(122,'5.1.0.GA\n\n',18,13),(123,'/opt/thalerng/jboss5\n\n',18,14),(124,'5.1.0.GA\n\n',19,13),(125,'/opt/thalerng/jboss5\n\n',19,14),(126,'4.4.7\n\n',20,1),(127,'/usr/bin/gcc\n\n',20,5),(128,'v5.10.1\n\n',20,3),(129,'/usr/bin/perl\n\n',20,4),(130,'Linux\n\n',20,7),(131,'9090\n\n',20,8),(132,'/CW/IF/thalerv2/fix/TSD\n\n',20,9),(133,'2.2.0 build[45]\n\n',20,10),(134,'1.0.1e\n\n',20,11),(135,'5.1.4.0 - WrapPack 8 ES\n\n',20,12),(136,'\n',21,6),(137,'Linux\n\n',21,7),(138,'\n',21,13),(139,'\n\n',21,14),(140,'\n',21,6),(141,'1.8.0_45\n\n',21,6),(142,'Linux\n\n',21,7),(143,'Red Hat JBoss Enterprise Application Platform - Version 6.4.0.GA\n\n',21,13),(144,'/opt/thalerng/jboss6\n\n',21,14),(145,'1.8.0_45\n\n',22,6),(146,'Linux\n\n',22,7),(147,'Red Hat JBoss Enterprise Application Platform - Version 6.4.0.GA\n\n',22,13),(148,'/opt/thalerng/jboss6\n\n',22,14),(149,'4.4.7\n\n',23,1),(150,'/usr/bin/gcc\n\n',23,5),(151,'v5.10.1\n\n',23,3),(152,'/usr/bin/perl\n\n',23,4),(153,'Linux\n\n',23,7),(154,'9000\n\n',23,8),(155,'/CW/FFBB/thalerv2/prg/TSD\n\n',23,9),(156,'2.2.0 build[41]\n\n',23,10),(157,'1.0.0-fips\n\n',23,11),(158,'5.1.4.0 - WrapPack 8 ES\n\n',23,12),(159,'\n',24,6),(160,'Linux\n\n',24,7),(161,'1.8.0_45\n\n',24,6),(162,'Red Hat JBoss Enterprise Application Platform - Version 6.4.0.GA\n\n',24,13),(163,'/opt/thalerng/jboss6\n\n',24,14),(164,'1.8.0_45\n\n',25,6),(165,'Linux\n\n',25,7),(166,'Red Hat JBoss Enterprise Application Platform - Version 6.4.0.GA\n\n',25,13),(167,'/opt/thalerng/jboss6\n\n',25,14),(168,'version:\n\n',3,15),(169,'2.0.9\n\n',3,15),(170,'2.0.9\n\n',4,15),(171,'\n',5,15),(172,'3.1.1\n\n',5,15),(173,'3.1.1\n\n',7,15),(174,'\n\n',3,15),(175,'\n\n',3,15),(176,'\n\n',3,15),(177,'\n\n',4,15),(178,'2.0.9\n\n',4,15),(179,'3.1.1\n\n',5,15),(180,'1.7.0_25\n\n',5,6),(181,'Linux\n\n',5,7),(182,'JBoss Enterprise Application Platform - Version 6.1.0.GA\n\n',5,13),(183,'/opt/thalerng/jboss6\n\n',5,14),(184,'3.1.1\n\n',5,15),(185,'4.6.3\n\n',6,1),(186,'/bin/gcc\n\n',6,5),(187,'v5.10.1\n\n',6,3),(188,'/usr/opt/perl5/bin/perl\n\n',6,4),(189,'5700\n\n',6,8),(190,'2.2.1 build[26]\n\n',6,10),(191,'5.1.4.0 - WrapPack 7\n\n',6,12),(192,'3.1.1\n\n',7,15),(193,'Linux\n\n',5,7),(194,'/CW/F2/thalerv2/prg/TSD\n\n',6,9),(195,'1.0.2j\n\n',6,11),(196,'/CW/F2/thalerv2/prg/TSD\n\n',6,9),(197,'5700\n\n',6,8),(198,'5.1.4.0 - WrapPack 7\n\n',6,12),(199,'/usr/bin/gcc\n\n',27,5),(200,'4.4.7\n\n',27,1),(201,'v5.10.1\n\n',27,3),(202,'/usr/bin/perl\n\n',27,4),(203,'Linux\n\n',27,7),(204,'7631\n\n',27,8),(205,'5.1.4.0 - WrapPack 8 ES\n\n',27,12),(206,'/opt/cbs/m1/thalerv2/prg/TSD\n\n',27,9),(207,'2.2.1 build[27]\n\n',27,10),(208,'1.0.2j\n\n',27,11),(209,'4.4.7\n\n',27,1),(210,'4.4.7\n\n',27,1),(211,'\n',18,15),(212,'\n',19,15),(213,'v5.10.1\n\n',6,3),(214,'JBoss Enterprise Application Platform - Version 6.1.0.GA\n\n',5,13),(215,'4.4.7\n\n',23,1),(216,'4.4.7\n\n',23,1),(217,'4.4.7\n\n',23,1),(218,'/usr/bin/gcc\n\n',23,5),(219,'v5.10.1\n\n',23,3),(220,'\n',6,16),(221,'/CW/F2/thalerv2/prg/TSD\n\n',6,9),(222,'v5.10.1\n\n',6,3),(223,'5.1.4.0 - WrapPack 7\n\n',6,12),(224,'\n\n',6,16),(225,'\n\n',6,16),(226,'12.1.0.2.0\n\n',6,16),(227,'12.1.0.2.0\n\n',6,17),(228,'SQL*Plus: Release 12.1.0.2.0 Production on Fri Feb 3 14:33:07 2017\n\n',6,16),(229,'12.1.0.2.0\n\n',6,16),(230,'/ora01/app/oracle/product/12.1.0\n\n',6,18),(231,'12.1.0.2.0\n\n',27,16),(232,'12.1.0.2.0\n\n',27,17),(233,'/ora01/app/oracle/product/12.1.0/client_1\n\n',27,18),(234,'/ora01/app/oracle/product/12.1.0\n\n',14,18),(235,'12.1.0.2.0\n\n',14,17),(236,'12.1.0.2.0\n\n',14,16),(237,'/ora01/app/oracle/product/12.1.0/client_1\n\n',23,18),(238,'12.1.0.2.0\n\n',23,17),(239,'12.1.0.2.0\n\n',23,16),(240,'/ora01/app/oracle/product/12.1.0/client_1\n\n',20,18),(241,'12.1.0.2.0\n\n',20,17),(242,'12.1.0.2.0\n\n',20,16),(243,'/ora01/app/oracle/product/11.2.0/client_1\n\n',17,18),(244,'\n\n',17,17),(245,'\n\n',17,17),(246,'11.2.0.1.0\n\n',17,16),(247,'\n\n',17,17),(248,'/ora01/app/oracle/product/12.1.0/client_1\n\n',11,18),(249,'12.1.0.2.0\n\n',11,17),(250,'12.1.0.2.0\n\n',11,16),(251,'HMNT3X12\n\n',6,19),(252,'HDEVTH2\n\n',2,19),(253,'/ora01/app/product/11.2.0\n\n',2,18),(254,'HORA02\n\n',17,19),(255,'HCBSPM1\n\n',27,19),(256,'\n\n',27,20),(257,'\n\n',27,20),(258,'\n\n',6,20),(259,'\n\n',6,20),(260,' 1522\n\n',6,20),(261,' 1522\n\n',14,20),(262,'HCBS4M12\n\n',14,19),(263,' 1522\n\n',20,20),(264,'HFWK4X12\n\n',20,19),(265,'3.1.1\n\n',21,15),(266,'HBB12\n\n',23,19),(267,' 1522\n\n',23,20),(268,'3.1.1\n\n',24,15),(269,'3.1.1\n\n',25,15),(270,'11.2.0.1.0\n\n',2,16),(271,'11.2.0.1.0\n\n',2,17),(272,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',3,21),(273,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',4,21),(274,'Red Hat Enterprise Linux Server release 5.7 (Tikanga)\n\n',9,21),(275,'Red Hat Enterprise Linux Server release 5.7 (Tikanga)\n\n',10,21),(276,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',27,21),(277,'Linux\n\n',28,7),(278,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',28,21),(279,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',29,21),(280,'Red Hat JBoss Enterprise Application Platform - Version 6.3.3.GA\n\n',29,13),(281,'Linux\n\n',29,7),(282,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',11,21),(283,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',12,21),(284,'3.1.1\n\n',13,15),(285,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',13,21),(286,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',15,21),(287,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',16,21),(288,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',5,21),(289,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',7,21),(290,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',23,21),(291,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',24,21),(292,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',25,21),(293,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',20,21),(294,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',21,21),(295,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',22,21),(296,'Linux\n\n',30,7),(297,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',30,21),(298,'\n',31,7),(299,'\n',31,21),(300,'\n',31,7),(301,'\n',31,7),(302,'\n',31,7),(303,'\n',31,21),(304,'\n',31,7),(305,'\n',31,21),(306,'Linux\n\n',31,7),(307,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',31,21),(308,' 1576\n\n',27,20),(309,'1.8.0_45\n\n',28,6),(310,'Red Hat JBoss Enterprise Application Platform - Version 6.3.3.GA\n\n',28,13),(311,'/opt/thalerng/jboss-eap-6.3.3\n\n',28,14),(312,'3.1.1\n\n',28,15),(313,'1.8.0_45\n\n',29,6),(314,'/opt/thalerng/jboss-eap-6.3.3\n\n',29,14),(315,'3.1.1\n\n',29,15),(316,'1.7.0_25\n\n',34,6),(317,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',34,21),(318,'JBoss Enterprise Application Platform - Version 6.1.0.GA\n\n',34,13),(319,'/opt/thalerng/jboss6\n\n',34,14),(320,'3.1.1\n\n',34,15),(321,'Linux\n\n',34,7),(322,'1.7.0_25\n\n',35,6),(323,'Linux\n\n',35,7),(324,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',35,21),(325,'JBoss Enterprise Application Platform - Version 6.1.0.GA\n\n',35,13),(326,'/opt/thalerng/jboss6\n\n',35,14),(327,'3.1.1\n\n',35,15),(328,'3.1.1\n\n',10,15),(329,'3.1.1\n\n',9,15),(330,'7100-04-01-1543\n\n',6,21),(331,'5.1.4.0 - WrapPack 7\n\n',6,22),(332,'/opt/third/microfocus/cobol\n\n',6,12),(333,'5.1.4.0 - WrapPack 7\n\n',6,12),(334,'/opt/third/microfocus/cobol\n\n',6,22),(335,'/opt/third/microfocus/cobol\n\n',20,22),(336,'3.1.1\n\n',22,15),(337,'6100-09-06-1543\n\n',2,21),(338,'6100-09-06-1543\n\n',2,21),(339,'6100-09-06-1543\n\n',2,21),(340,'6100-09-06-1543\n\n',2,21),(341,' 1521\n\n',2,20),(342,'/opt/third/microfocus/cobol\n\n',2,22),(343,'2.0.9\n\n',3,15),(344,'HFWK4X12\n\n',11,19),(345,' 1522\n\n',11,20),(346,'/opt/third/microfocus/cobol\n\n',11,22),(347,'3.1.1\n\n',12,15),(348,'Red Hat JBoss Enterprise Application Platform - Version 6.3.3.GA\n\n',9,13),(349,'1.8.0_45\n\n',10,6),(350,'Linux\n\n',10,7),(351,'3.1.1\n\n',10,15),(352,'/opt/third/microfocus/cobol\n\n',23,22),(353,'/opt/third/microfocus/cobol\n\n',27,22),(354,'6100-09-06-1543\n\n',17,21),(355,'/opt/third/microfocus/cobol\n\n',17,22),(356,'\n\n',17,17),(357,'\n\n',17,17),(358,' 1521\n\n',17,20),(359,'/opt/thalerng/jboss-eap-6.3.3\n\n',30,14),(360,'3.1.1\n\n',30,15),(361,'1.8.0_45\n\n',31,6),(362,'1.8.0_45\n\n',30,6),(363,'Red Hat JBoss Enterprise Application Platform - Version 6.3.3.GA\n\n',30,13),(364,'Red Hat JBoss Enterprise Application Platform - Version 6.3.3.GA\n\n',31,13),(365,'/opt/thalerng/jboss-eap-6.3.3\n\n',31,14),(366,'3.1.1\n\n',31,15),(367,'4.4.7\n\n',27,1),(368,'Linux\n\n',28,7),(369,'1.7.0_25\n\n',36,6),(370,'Linux\n\n',36,7),(371,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',36,21),(372,'JBoss Enterprise Application Platform - Version 6.1.0.GA\n\n',36,13),(373,'/opt/thalerng/jboss6\n\n',36,14),(374,'3.1.1\n\n',36,15),(375,'4.6.3\n\n',37,1),(376,'/bin/gcc\n\n',37,5),(377,'v5.10.1\n\n',37,3),(378,'AIX\n\n',37,7),(379,'/bin/perl\n\n',37,4),(380,'7100-04-02-1614\n\n',37,21),(381,'5001\n\n',37,8),(382,'/CW/ET/thalerv2/prg/TSD\n\n',37,9),(383,'2.2.0 build[43]\n\n',37,10),(384,'1.0.1e\n\n',37,11),(385,'5.1.4.0 - WrapPack 7\n\n',37,12),(386,'/opt/third/microfocus/cobol\n\n',37,22),(387,'11.2.0.1.0\n\n',37,16),(388,'11.2.0.1.0\n\n',37,17),(389,'/ora01/app/oracle/product/11.2.0/client_1\n\n',37,18),(390,'HDEVTH6\n\n',37,19),(391,' 1521\n\n',37,20),(392,'1.7.0_25\n\n',38,6),(393,'Linux\n\n',38,7),(394,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',38,21),(395,'\n',38,13),(396,'\n',38,13),(397,'\n',38,13),(398,'\n',38,13),(399,'/opt/thalerng/jboss6\n\n',38,14),(400,'3.1.1\n\n',38,15),(401,'1.7.0_25\n\n',39,6),(402,'Linux\n\n',39,7),(403,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',39,21),(404,'JBoss Enterprise Application Platform - Version 6.1.0.GA\n\n',39,13),(405,'/opt/thalerng/jboss6\n\n',39,14),(406,'3.1.1\n\n',39,15),(407,'3.1.1\n\n',39,15),(408,'\n',40,6),(409,'\n',40,7),(410,'\n',40,21),(411,'\n',40,13),(412,'\n',40,14),(413,'\n',40,14),(414,'\n',40,6),(415,'\n',40,7),(416,'\n',40,21),(417,'\n',40,6),(418,'1.7.0_25\n\n',40,6),(419,'Linux\n\n',40,7),(420,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',40,21),(421,'JBoss Enterprise Application Platform - Version 6.1.0.GA\n\n',40,13),(422,'/opt/thalerng/jboss6\n\n',40,14),(423,'3.1.1\n\n',40,15),(424,'4.4.7\n\n',44,1),(425,'/usr/bin/gcc\n\n',44,5),(426,'v5.10.1\n\n',44,3),(427,'/usr/bin/perl\n\n',44,4),(428,'Linux\n\n',44,7),(429,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',44,21),(430,'7632\n\n',44,8),(431,'/opt/cbs/m1/thalerv2/tst/TSD\n\n',44,9),(432,'2.2.1 build[26]\n\n',44,10),(433,'1.0.2j\n\n',44,11),(434,'5.1.4.0 - WrapPack 8 ES\n\n',44,12),(435,'/opt/third/microfocus/cobol\n\n',44,22),(436,'12.1.0.2.0\n\n',44,16),(437,'12.1.0.2.0\n\n',44,17),(438,'/ora01/app/oracle/product/12.1.0/client_1\n\n',44,18),(439,'HCBSTM1\n\n',44,19),(440,' 1576\n\n',44,20),(441,'1.8.0_45\n\n',43,6),(442,'Linux\n\n',43,7),(443,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',43,21),(444,'Red Hat JBoss Enterprise Application Platform - Version 6.3.3.GA\n\n',43,13),(445,'/opt/thalerng/jboss-eap-6.3.3\n\n',43,14),(446,'3.1.1\n\n',43,15),(447,'1.8.0_45\n\n',45,6),(448,'Linux\n\n',45,7),(449,'Red Hat Enterprise Linux Server release 6.5 (Santiago)\n\n',45,21),(450,'Red Hat JBoss Enterprise Application Platform - Version 6.3.3.GA\n\n',45,13),(451,'/opt/thalerng/jboss-eap-6.3.3\n\n',45,14),(452,'3.1.1\n\n',45,15),(453,'4.4.5\n\n',46,1),(454,'/usr/bin/gcc\n\n',46,5),(455,'v5.10.1\n\n',46,3),(456,'Linux\n\n',46,7),(457,'7731\n\n',46,8),(458,'/opt/cbs/af/thalerv2/prg/TSD\n\n',46,9),(459,'1.0.2h\n\n',46,11),(460,'5.1.4.0 - WrapPack 8 ES\n\n',46,12),(461,'2.2.1 build[24]\n\n',46,10),(462,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',46,21),(463,'/opt/third/microfocus/cobol\n\n',46,22),(464,'12.1.0.2.0\n\n',46,16),(465,'12.1.0.2.0\n\n',46,17),(466,'/ora01/app/oracle/product/12.1.0/client_1\n\n',46,18),(467,' 1522\n\n',46,20),(468,'HCBS4M12\n\n',46,19),(469,'/usr/bin/perl\n\n',46,4),(470,'3.1.1\n\n',5,15),(471,'\n\n',5,27),(472,'\n\n',5,27),(473,'\n\n',3,27),(474,'\n\n',43,27),(475,'\n\n',43,27),(476,'118483 Thu May 11 08:07:28 CEST 2017 lib/commons-beanutils-1.6.jar\n\n',43,27),(477,'lib/commons-beanutils-1.6.jar\n\n',43,27),(478,'lib/commons-beanutils-1.6.jar\n\n',9,27),(479,'lib/commons-beanutils-1.6.jar\n\n',28,27),(480,'lib/commons-beanutils-1.6.jar\n\n',12,27),(481,'\n\n',13,27),(482,'\n\n',13,27),(483,'\n\n',13,27),(484,'\n\n',13,27),(485,'lib/commons-beanutils-1.6.jar\n\n',15,27),(486,'lib/commons-beanutils-1.6.jar\n\n',16,27),(487,'\n',16,15),(488,'\n\n',3,27),(489,'\n\n',4,27),(490,'\n\n',38,27),(491,'\n\n',36,27),(492,'lib/commons-beanutils-1.6.jar\n\n',24,27),(493,'lib/commons-beanutils-1.6.jar\n\n',25,27),(494,'lib/commons-beanutils-1.6.jar\n\n',31,27),(495,'lib/commons-beanutils-1.6.jar\n\n',30,27),(496,'lib/commons-beanutils-1.6.jar\n\n',21,27),(497,'lib/commons-beanutils-1.6.jar\n\n',22,27),(498,'\n\n',3,27),(499,'lib/commons-beanutils-1.9.3.jar\n\n',5,27),(500,'lib/commons-beanutils-1.9.3.jar\n\n',7,27),(501,'\n\n',3,27),(502,'\n\n',4,27),(503,'\n\n',13,27),(504,'\n\n',13,27),(505,'\n\n',38,27),(506,'\n\n',36,27),(507,'\n\n',36,27),(508,'openssh-server-5.3p1-52.el6.x86_64\n\n',5,28),(509,'openssh-server-5.3p1-52.el6.x86_64\n\n',7,28),(510,'openssh.base.server 6.0.0.6201 COMMITTED Open Secure Shell Server\n\n',6,28),(511,'lib/commons-beanutils-1.9.3.jar\n\n',39,27),(512,'openssh-server-5.3p1-52.el6.x86_64\n\n',39,28),(513,'lib/commons-beanutils-1.9.3.jar\n\n',40,27),(514,'openssh-server-5.3p1-52.el6.x86_64\n\n',40,28),(515,'openssh-server-5.3p1-94.el6.x86_64\n\n',43,28),(516,'lib/commons-beanutils-1.6.jar\n\n',45,27),(517,'openssh-server-5.3p1-94.el6.x86_64\n\n',45,28),(518,'openssh-server-5.3p1-94.el6.x86_64\n\n',44,28),(519,'lib/commons-beanutils-1.6.jar\n\n',10,27),(520,'openssh-server-4.3p2-72.el5_6.3\n\n',10,28),(521,'openssh-server-4.3p2-72.el5_6.3\n\n',9,28),(522,'7100-04-02-1614\n\n',14,21),(523,'/opt/third/microfocus/cobol\n\n',14,22),(524,'openssh.base.server 6.0.0.6201 COMMITTED Open Secure Shell Server\n\n',14,28),(525,'openssh-server-5.3p1-52.el6.x86_64\n\n',16,28),(526,'openssh-server-5.3p1-94.el6.x86_64\n\n',21,28),(527,'openssh-server-5.3p1-94.el6.x86_64\n\n',20,28),(528,'openssh-server-5.3p1-94.el6.x86_64\n\n',22,28),(529,'openssh-server-5.3p1-52.el6.x86_64\n\n',30,28),(530,'openssh-server-5.3p1-52.el6.x86_64\n\n',31,28),(531,'openssh-server-5.3p1-52.el6.x86_64\n\n',46,28),(532,'openssh-server-5.3p1-94.el6.x86_64\n\n',23,28),(533,'openssh-server-5.3p1-94.el6.x86_64\n\n',24,28),(534,'openssh-server-5.3p1-94.el6.x86_64\n\n',25,28),(535,'\n\n',36,27),(536,'openssh-server-5.3p1-52.el6.x86_64\n\n',36,28),(537,'\n\n',36,27),(538,'openssh.base.server 6.0.0.6201 COMMITTED Open Secure Shell Server\n\n',37,28),(539,'openssh-server-5.3p1-52.el6.x86_64\n\n',38,28),(540,'\n\n',38,27),(541,'\n',38,13),(542,'openssh-server-5.3p1-52.el6.x86_64\n\n',4,28),(543,'\n\n',4,27),(544,'openssh-server-5.3p1-52.el6.x86_64\n\n',3,28),(545,'\n\n',13,27),(546,'openssh-server-5.3p1-52.el6.x86_64\n\n',13,28),(547,'openssh-server-5.3p1-52.el6.x86_64\n\n',12,28),(548,'\n\n',13,27),(549,'\n\n',5,29),(550,'\n\n',5,29),(551,'lib/cglib-2.1_3.jar\n\n',7,29),(552,'lib/hibernate-3.6.5.Final.jar\n\n',5,30),(553,'lib/hibernate-3.6.5.Final.jar\n\n',7,30),(554,'lib/spring-security-config-3.1.1.RELEASE.jar lib/spring-security-core-3.2.9.RELE',5,31),(555,'lib/spring-security-config-3.1.1.RELEASE.jar lib/spring-security-core-3.2.9.RELE',7,31),(556,'lib/jxl-2.4.2.jar\n\n',5,32),(557,'\n\n',7,32),(558,'\n\n',7,32),(559,'lib/cglib-2.1_3.jar\n\n',39,29),(560,'lib/hibernate-3.6.5.Final.jar\n\n',39,30),(561,'lib/spring-security-config-3.1.1.RELEASE.jar lib/spring-security-core-3.2.9.RELE',39,31),(562,'\n\n',40,29),(563,'lib/hibernate-3.6.5.Final.jar\n\n',40,30),(564,'lib/spring-security-config-3.1.1.RELEASE.jar lib/spring-security-core-3.2.9.RELE',40,31),(565,'lib/jxl-2.4.2.jar\n\n',40,32),(566,'lib/jxl-2.4.2.jar\n\n',22,32),(567,'lib/spring-security-taglibs-3.1.1.RELEASE.jar lib/spring-security-saml2-core-1.0',22,31),(568,'lib/hibernate-3.6.5.Final.jar\n\n',22,30),(569,'\n\n',22,29),(570,'lib/spring-security-taglibs-3.1.1.RELEASE.jar lib/spring-security-saml2-core-1.0',21,31),(571,'lib/cglib-2.1_3.jar\n\n',21,29),(572,'lib/hibernate-3.6.5.Final.jar\n\n',21,30),(573,'lib/jxl-2.4.2.jar\n\n',16,32),(574,'lib/spring-security-config-3.1.1.RELEASE.jar lib/spring-security-ldap-3.1.1.RELE',16,31),(575,'lib/hibernate-3.6.5.Final.jar\n\n',16,30),(576,'\n\n',16,29),(577,'3.1.1\n\n',16,15),(578,'openssh.base.server 6.0.0.6201 COMMITTED Open Secure Shell Server\n\n',2,28),(579,'\n\n',4,32),(580,'\n\n',4,31),(581,'\n\n',4,30),(582,'\n\n',4,27),(583,'\n\n',3,31),(584,'lib/commons-beanutils-1.6.jar\n\n',29,27),(585,'openssh-server-5.3p1-94.el6.x86_64\n\n',29,28),(586,'\n\n',29,29),(587,'\n\n',29,29),(588,'\n\n',29,29),(589,'openssh-server-5.3p1-94.el6.x86_64\n\n',28,28),(590,'lib/cglib-2.1_3.jar\n\n',28,29),(591,'lib/hibernate-3.6.5.Final.jar\n\n',28,30),(592,'lib/spring-security-core-3.1.1.RELEASE.jar lib/spring-security-taglibs-3.1.1.REL',28,31),(593,'\n\n',29,29),(594,'lib/hibernate-3.6.5.Final.jar\n\n',29,30),(595,'lib/spring-security-core-3.1.1.RELEASE.jar lib/spring-security-taglibs-3.1.1.REL',29,31),(596,'lib/jxl-2.4.2.jar\n\n',29,32),(597,'1.8.0_45\n\n',47,6),(598,'Linux\n\n',47,7),(599,'Red Hat Enterprise Linux Server release 6.1 (Santiago)\n\n',47,21),(600,'Red Hat JBoss Enterprise Application Platform - Version 6.4.0.GA\n\n',47,13),(601,'/opt/thalerng/jboss-eap-6.4\n\n',47,14),(602,'3.1.1\n\n',47,15),(603,'lib/commons-beanutils-1.6.jar\n\n',47,27),(604,'openssh-server-5.3p1-52.el6.x86_64\n\n',47,28),(605,'lib/cglib-2.1_3.jar\n\n',47,29),(606,'lib/hibernate-3.6.5.Final.jar\n\n',47,30),(607,'lib/spring-security-saml2-core-1.0.0.RC2.jar lib/spring-security-ldap-3.1.1.RELE',47,31),(608,'saml2-core-1.0.0.RC2.jar ldap-3.1.1.RELEASE.jar config-3.1.1.RELEASE.jar core-3.',47,31),(609,'saml2-core-1.0.0.RC2.jar ldap-3.1.1.RELEASE.jar config-3.1.1.RELEASE.jar core-3.',47,31),(610,'config-3.1.1.RELEASE.jar core-3.2.9.RELEASE.jar web-3.1.1.RELEASE.jar taglibs-3.',5,31),(611,'config-3.1.1.RELEASE.jar core-3.2.9.RELEASE.jar web-3.1.1.RELEASE.jar taglibs-3.',5,31),(612,'saml2-core-1.0.0.RC2.jar ldap-3.1.1.RELEASE.jar config-3.1.1.RELEASE.jar core-3.',47,31),(613,'\n\n',4,31),(614,'\n\n',4,27),(615,'\n\n',4,31),(616,'\n\n',3,31),(617,'\n\n',17,17),(618,'\n\n',19,27),(619,'\n\n',19,28),(620,'config-3.1.1.RELEASE.jar web-3.1.1.RELEASE.jar core-3.1.1.RELEASE.jar taglibs-3.',35,31),(621,'config-3.1.1.RELEASE.jar web-3.1.1.RELEASE.jar core-3.1.1.RELEASE.jar taglibs-3.',34,31),(622,'\n',34,30),(623,'\n',34,29),(624,'\n',34,27),(625,'\n\n',10,29),(626,'lib/hibernate-3.6.5.Final.jar\n\n',10,30),(627,'config-3.1.1.RELEASE.jar web-3.1.1.RELEASE.jar core-3.1.1.RELEASE.jar taglibs-3.',10,31),(628,'lib/jxl-2.4.2.jar\n\n',10,32),(629,'config-3.1.1.RELEASE.jar web-3.1.1.RELEASE.jar core-3.1.1.RELEASE.jar taglibs-3.',9,31),(630,'lib/hibernate-3.6.5.Final.jar\n\n',9,30),(631,'lib/cglib-2.1_3.jar\n\n',9,29),(632,'ldap-3.1.1.RELEASE.jar core-3.1.1.RELEASE.jar config-3.1.1.RELEASE.jar web-3.1.1',25,31),(633,'lib/jxl-2.4.2.jar\n\n',25,32),(634,'lib/hibernate-3.6.5.Final.jar\n\n',25,30),(635,'\n\n',25,29),(636,'ldap-3.1.1.RELEASE.jar core-3.1.1.RELEASE.jar config-3.1.1.RELEASE.jar web-3.1.1',24,31),(637,'lib/hibernate-3.6.5.Final.jar\n\n',24,30),(638,'lib/cglib-2.1_3.jar\n\n',24,29),(639,'\n\n',22,29),(640,'\n\n',22,29),(641,'\n\n',21,33),(642,'lib/uadetector-core-0.9.22.jar lib/uadetector-resources-2014.10.jar\n\n',22,33),(643,'core-0.9.22.jar resources-2014.10.jar\n\n',22,33),(644,'resources-2014.10.jar core-0.9.22.jar\n\n',45,33),(645,'\n\n',40,33),(646,'resources-2014.10.jar core-0.9.22.jar\n\n',10,33),(647,'resources-2014.10.jar core-0.9.22.jar\n\n',29,33),(648,'\n',34,33),(649,'\n\n',13,33),(650,'core-0.9.22.jar resources-2014.10.jar\n\n',16,33),(651,'\n\n',38,33),(652,'resources-2014.10.jar core-0.9.22.jar\n\n',25,33),(653,'resources-2014.10.jar core-0.9.22.jar\n\n',48,33),(654,'1.8.0_45\n\n',43,6),(655,'/opt/vasco/Vacman_Controller-3.10/lib/libaal2sdk.a\n\n',6,34),(656,'\n\n',44,34),(657,'\n\n',27,34),(658,'\n\n',27,34),(659,'/opt/vasco/Vacman_Controller-3.10/lib/libaal2sdk.a\n\n',17,34),(660,'\n\n',11,34),(661,'\n\n',11,34),(662,'/opt/vasco/Vacman_Controller-3.10/lib/libaal2sdk.a\n\n',14,34),(663,'/opt/vasco/Vacman_Controller-3.10/lib/libaal2sdk.a\n\n',2,34),(664,'\n\n',37,34),(665,'\n\n',23,34),(666,'\n\n',23,34),(667,'\n\n',46,34),(668,'\n\n',46,34),(669,'\n\n',46,34),(670,'lib/aal2wrap-3.14.0.jar\n\n',47,35),(671,'lib/aal2wrap-3.14.0.jar\n\n',48,35),(672,'\n\n',48,34),(673,'\n\n',46,34),(674,'\n\n',46,35),(675,'\n\n',47,34),(676,'\n\n',48,34),(677,'lib/aal2wrap-3.14.0.jar\n\n',45,35),(678,'\n\n',45,34),(679,'lib/aal2wrap-3.14.0.jar\n\n',43,35),(680,'lib/aal2wrap-3.14.0.jar\n\n',45,35),(681,'\n\n',44,35),(682,'lib/aal2wrap-3.14.0.jar\n\n',43,35),(683,'\n\n',43,34),(684,'1.8.0_45\n\n',43,6),(685,'\n\n',39,34),(686,'2007\n\n',6,25),(687,'/opt/third/texlive/2007/bin/powerpc-aix/pdflatex\n\n',6,26),(688,'\n',27,25),(689,'2007\n\n',14,25),(690,'/opt/third/texlive/2007/bin/powerpc-aix/pdflatex\n\n',14,26),(691,'2007\n\n',2,25),(692,'/opt/third/texlive/2007/bin/powerpc-aix/pdflatex\n\n',2,26),(693,'\n',23,25),(694,'\n',46,25),(695,'\n',20,25),(696,'\n',27,25),(697,'\n',49,36),(698,'\n',49,36),(699,'\"-Dsteform.server.release\nexport STF_RELEASE\n\n',49,36),(700,'\"-Dsteform.server.release\n\n',49,36),(701,'17.0.0\"\n\n',49,36),(702,'17.0.0\n\n',49,36),(703,'17.0.0\n\n',49,36),(704,'15.2.0\n\n',51,36),(705,'17.0.0\n\n',52,36),(706,'lib/commons-fileupload-1.3.2.jar\n\n',5,37),(707,'\n\n',7,37),(708,'\n\n',28,37),(709,'lib/commons-fileupload-1.1.1.jar\n\n',29,37),(710,'lib/commons-fileupload-1.1.1.jar\n\n',48,37);
/*!40000 ALTER TABLE `audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `env_details`
--

DROP TABLE IF EXISTS `env_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `env_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servercategory_id` int(11) DEFAULT NULL,
  `environment_id` int(11) DEFAULT NULL,
  `server_id` int(11) DEFAULT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parameter` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_65DF3094A3C2FD3D` (`servercategory_id`),
  KEY `IDX_65DF3094903E3A94` (`environment_id`),
  KEY `IDX_65DF30941844E6B7` (`server_id`),
  CONSTRAINT `FK_65DF30941844E6B7` FOREIGN KEY (`server_id`) REFERENCES `server` (`id`),
  CONSTRAINT `FK_65DF3094903E3A94` FOREIGN KEY (`environment_id`) REFERENCES `environment` (`id`),
  CONSTRAINT `FK_65DF3094A3C2FD3D` FOREIGN KEY (`servercategory_id`) REFERENCES `server_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `env_details`
--

LOCK TABLES `env_details` WRITE;
/*!40000 ALTER TABLE `env_details` DISABLE KEYS */;
INSERT INTO `env_details` VALUES (2,3,1,1,'pf1','standard BES pf1',''),(3,1,1,22,'pf1',NULL,''),(4,2,1,23,'pf1',NULL,''),(5,2,2,36,'pf2',NULL,''),(6,3,2,25,'pf2','test pf2',''),(7,1,2,24,'pf2','bas for pf2',''),(8,3,6,26,'pnd',NULL,''),(9,1,6,28,'pnd',NULL,''),(10,2,6,27,'pnd',NULL,''),(11,3,7,29,'pif',NULL,''),(12,1,7,29,'pifb',NULL,''),(13,2,7,30,'pifb',NULL,''),(14,3,8,2,'pff','bes PFF',''),(15,1,8,31,'pff',NULL,''),(16,2,8,32,'pff',NULL,''),(17,3,9,33,'pip',NULL,''),(18,1,9,34,'pip',NULL,''),(19,2,9,35,'pip',NULL,''),(20,3,10,37,'fif',NULL,''),(21,1,10,37,'fifb',NULL,''),(22,2,10,38,'fifb',NULL,''),(23,3,11,39,'pbb',NULL,''),(24,1,11,39,'pffbb',NULL,''),(25,2,11,40,'pffbb',NULL,''),(26,6,2,41,'boxi',NULL,''),(27,3,12,42,'pm1',NULL,''),(28,1,12,43,'pm1',NULL,''),(29,2,12,44,'pm1',NULL,''),(30,1,13,45,'iff',NULL,''),(31,2,13,46,'iff',NULL,''),(32,3,13,2,'iff',NULL,''),(33,3,14,2,'pit',NULL,''),(34,2,14,48,'pit',NULL,''),(35,1,14,47,'pit',NULL,''),(36,1,15,49,'pet',NULL,''),(37,3,15,2,'pet',NULL,''),(38,2,15,50,'pet',NULL,''),(39,1,16,24,'tf2',NULL,''),(40,2,16,36,'tf2',NULL,''),(41,3,16,25,'tf2',NULL,''),(42,6,16,41,'boxi',NULL,''),(43,1,17,43,'tm1',NULL,''),(44,3,17,42,'tm1',NULL,''),(45,2,17,44,'tm1',NULL,''),(46,3,18,51,'paf',NULL,''),(47,1,18,51,'pafb',NULL,''),(48,2,18,52,'paf',NULL,''),(49,7,2,53,'steform',NULL,'34'),(50,7,12,53,'steform',NULL,'48'),(51,7,1,53,'steform',NULL,'11'),(52,7,18,53,'steform',NULL,'50');
/*!40000 ALTER TABLE `env_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `environment`
--

DROP TABLE IF EXISTS `environment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `environment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsible` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4626DE225E237E06` (`Name`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `environment`
--

LOCK TABLES `environment` WRITE;
/*!40000 ALTER TABLE `environment` DISABLE KEYS */;
INSERT INTO `environment` VALUES (1,'PF1','standard env',NULL),(2,'PF2','standard env release 3.2',NULL),(6,'PND',NULL,NULL),(7,'PIF',NULL,NULL),(8,'PFF','SBPNXT4M','C. Dufauquez'),(9,'PIP',NULL,NULL),(10,'FIF',NULL,'Stephane Luyten'),(11,'PBB',NULL,'Stephane Luyten'),(12,'PM1',NULL,NULL),(13,'IFF',NULL,NULL),(14,'PIT',NULL,'??'),(15,'PET',NULL,'??'),(16,'TF2',NULL,'Patrick Herin'),(17,'TM1',NULL,NULL),(18,'PAF',NULL,'le chien');
/*!40000 ALTER TABLE `environment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` tinytext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D34A04AD5E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'gcc','compiler'),(9,'perl','interpreter'),(10,'java',NULL),(11,'os','operating system'),(12,'TSD',NULL),(13,'MFcobol',NULL),(14,'JBoss',NULL),(15,'Maven',NULL),(16,'Oracle','Database'),(17,'Thalerv2',NULL),(18,'TeX','Tex for generating PDF'),(19,'Apache_commons_BeanUtils',NULL),(20,'OpenSSH',NULL),(21,'Cglib',NULL),(22,'Hibernate',NULL),(23,'SpringSecurity',NULL),(24,'JExcelAPI',NULL),(25,'UADetector',NULL),(26,'VacmanController',NULL),(27,'GTFrame',NULL),(28,'Apache_commons_FileUpload',NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_parameter`
--

DROP TABLE IF EXISTS `product_parameter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_parameter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hardcoded` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4437279D4584665A` (`product_id`),
  CONSTRAINT `FK_4437279D4584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_parameter`
--

LOCK TABLES `product_parameter` WRITE;
/*!40000 ALTER TABLE `product_parameter` DISABLE KEYS */;
INSERT INTO `product_parameter` VALUES (1,1,'version','take the version of the product',0),(3,9,'version','get the version of Perl',0),(4,9,'path','installation path by perl',0),(5,1,'path','path of the gcc',0),(6,10,'version',NULL,0),(7,11,'type',NULL,0),(8,12,'port',NULL,0),(9,12,'path',NULL,0),(10,12,'version',NULL,0),(11,12,'opensslVersion',NULL,0),(12,13,'version','version of MFCOBOL',0),(13,14,'version',NULL,0),(14,14,'JBOSS_HOME',NULL,0),(15,15,'version',NULL,0),(16,16,'Version_Client','Version of the client Oracle',0),(17,16,'Version_Server','Version of the server Oracle',0),(18,16,'ORACLE_HOME','env variable of Oracle home',0),(19,16,'ORACLE_SID','oracle sid',0),(20,16,'ORACLE_PORT',NULL,0),(21,11,'version',NULL,0),(22,13,'COBDIR','Env variable COBDIR',0),(23,17,'Screen_path',NULL,1),(24,17,'Version',NULL,1),(25,18,'Version',NULL,0),(26,18,'Path',NULL,0),(27,19,'version','version',0),(28,20,'server_version',NULL,0),(29,21,'version',NULL,0),(30,22,'version',NULL,0),(31,23,'version','version of spring security',0),(32,24,'version',NULL,0),(33,25,'version',NULL,0),(34,26,'libVersion',NULL,0),(35,26,'jarVersion',NULL,0),(36,27,'version',NULL,0),(37,28,'version',NULL,0);
/*!40000 ALTER TABLE `product_parameter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_servercategory`
--

DROP TABLE IF EXISTS `product_servercategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_servercategory` (
  `server_category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`server_category_id`,`product_id`),
  KEY `IDX_53139D2C5A266439` (`server_category_id`),
  KEY `IDX_53139D2C4584665A` (`product_id`),
  CONSTRAINT `FK_53139D2C4584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  CONSTRAINT `FK_53139D2C5A266439` FOREIGN KEY (`server_category_id`) REFERENCES `server_category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_servercategory`
--

LOCK TABLES `product_servercategory` WRITE;
/*!40000 ALTER TABLE `product_servercategory` DISABLE KEYS */;
INSERT INTO `product_servercategory` VALUES (1,10),(1,11),(1,14),(1,15),(1,19),(1,20),(1,21),(1,22),(1,23),(1,26),(2,10),(2,11),(2,14),(2,15),(2,19),(2,20),(2,22),(2,23),(2,24),(2,25),(2,26),(2,28),(3,1),(3,9),(3,11),(3,12),(3,13),(3,16),(3,17),(3,18),(3,20),(3,26),(4,10),(4,11),(5,10),(5,11),(6,11),(7,27);
/*!40000 ALTER TABLE `product_servercategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server`
--

DROP TABLE IF EXISTS `server`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `os` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5A6DD5F65E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `server`
--

LOCK TABLES `server` WRITE;
/*!40000 ALTER TABLE `server` DISABLE KEYS */;
INSERT INTO `server` VALUES (1,'cw1902','172.18.50.229','AIX',1),(2,'sabes02','172.18.50.83','AIX',1),(3,'slbas01','192.168.0112','AIX',0),(22,'cwvbasf1','172.18.50.7','Linux',1),(23,'cwvfasf1','172.18.50.236','Linux',1),(24,'slbasf2','172.18.50.130','Linux',1),(25,'sabes01','172.18.50.83','AIX',1),(26,'cw1802','172.18.50.227','AIX',1),(27,'cwbl01','172.18.50.119','Linux',1),(28,'cwbl05','172.18.50.127','Linux',1),(29,'slbasifp','172.18.50.73','Linux',1),(30,'slfasifp','172.18.50.40','Linux',1),(31,'slbasff','172.18.50.72','Linux',1),(32,'slfasff','172.18.50.70','Linux',1),(33,'cw2102','172.18.50.233','AIX',1),(34,'cwvbasip','172.18.50.242','AIX',1),(35,'cwvfasip','172.18.50.243','AIX',1),(36,'slfasf2','172.18.50.131','Linux',1),(37,'slbasiff','172.18.50.149','Linux',1),(38,'slfasiff','172.18.50.151','Linux',1),(39,'slbasffbb','172.18.50.179','Linux',1),(40,'slfasffbb','172.18.50.178','Linux',1),(41,'dlnxsbsboxi01.brus.be.soprabanking','10.186.160.25','Linux',1),(42,'slbesm1','172.18.50.122','Linux',1),(43,'slbasm1','172.18.50.120','Linux',1),(44,'slfasm1','172.18.50.95','Linux',1),(45,'slbasdm','172.18.50.167','Linux',1),(46,'slfasdm','172.18.50.168','Linux',1),(47,'slbasit','172.18.50.51','Linux',1),(48,'slfasit','172.18.50.51','Linux',1),(49,'slbaset','172.18.50.67','Linux',1),(50,'slfaset','172.18.50.68','Linux',1),(51,'slbasaf','http://facts.be/fr/tickets-se2017-home/','Linux',1),(52,'slfasaf','172.18.50.19','Linux',1),(53,'cwv010','172.18.50.49','Linux',1);
/*!40000 ALTER TABLE `server` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server_category`
--

DROP TABLE IF EXISTS `server_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `server_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C4E9987DFE11D138` (`Name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `server_category`
--

LOCK TABLES `server_category` WRITE;
/*!40000 ALTER TABLE `server_category` DISABLE KEYS */;
INSERT INTO `server_category` VALUES (1,'BAS_JBoss_v2'),(5,'BAS_WebSphere_v2'),(3,'BES_v2'),(6,'BOXI_R4.2'),(2,'FAS_JBoss_v2'),(4,'FAS_WebSphere_v2'),(7,'GTFrame');
/*!40000 ALTER TABLE `server_category` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-12 15:10:51
