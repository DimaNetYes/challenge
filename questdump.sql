-- MySQL dump 10.13  Distrib 5.7.16, for Win64 (x86_64)
--
-- Host: localhost    Database: quest
-- ------------------------------------------------------
-- Server version	5.7.16
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
-- Table structure for table `executeTasks`
--
DROP TABLE IF EXISTS `executeTasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `executeTasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idTask` int(11) DEFAULT NULL,
  `idUserQuest` int(11) NOT NULL,
  `coordX` double DEFAULT NULL,
  `coordY` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `time` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `executeTasks`
--
LOCK TABLES `executeTasks` WRITE;
/*!40000 ALTER TABLE `executeTasks` DISABLE KEYS */;
INSERT INTO `executeTasks` VALUES (1,3,1,49.9876,36.2330605,'2018-01-09',1,'16:00:00'),(2,4,1,49.9976,36.243,'2018-01-09',1,'14:00:00'),(3,1,1,NULL,NULL,NULL,0,NULL),(4,1,9,NULL,NULL,NULL,1,NULL),(5,5,1,49.989,36.24,'2018-01-09',1,'18:00:00'),(6,6,1,49.99,36.25,'2018-01-09',1,'20:00:00'),(7,7,1,50,36.24,'2018-01-09',1,'21:00:00'),(8,8,1,49.98,36.264,'2018-01-09',1,'07:00:00');
/*!40000 ALTER TABLE `executeTasks` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `quests`
--
DROP TABLE IF EXISTS `quests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `fullDescription` text,
  `status` int(11) DEFAULT '2',
  `hard` varchar(100) DEFAULT 'hard',
  `author` varchar(100) DEFAULT 'anonim',
  `avatar` varchar(100) DEFAULT 'http://quest/public/img/moreQuest/cowboy.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `quests`
--
LOCK TABLES `quests` WRITE;
/*!40000 ALTER TABLE `quests` DISABLE KEYS */;
INSERT INTO `quests` VALUES (1,'����������','�������� �� �������','2018-03-05','13:00:00','fullDescription',2,'hard','anonim','http://quest/public/img/moreQuest/cowboy.jpg'),(2,'������','������ � ��������� �������','2018-01-18','23:59:00','full ������ � ��������� �������',0,'hard','anonim','http://quest/public/img/moreQuest/cowboy.jpg'),(3,'��������','��������� ������� �� ��������','2018-01-19','16:00:00','full ��������� ������� �� ��������',0,'hard','anonim','http://quest/public/img/moreQuest/cowboy.jpg'),(4,'������2','������ � ��������� �������','2018-03-05','06:00:00','��-��',0,'hard','anonim','http://quest/public/img/moreQuest/cowboy.jpg');
/*!40000 ALTER TABLE `quests` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `results`
--
DROP TABLE IF EXISTS `results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idQuest` int(11) NOT NULL,
  `idTeam` int(11) NOT NULL,
  `result` int(11) DEFAULT '0',
  `position` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `results`
--
LOCK TABLES `results` WRITE;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` VALUES (1,2,2,100,0),(2,1,1,40,0),(3,4,2,100,0),(4,2,1,80,0),(5,2,3,100,1),(6,3,2,0,0);
/*!40000 ALTER TABLE `results` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `social_providers`
--
DROP TABLE IF EXISTS `social_providers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `provider` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `social_providers`
--
LOCK TABLES `social_providers` WRITE;
/*!40000 ALTER TABLE `social_providers` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_providers` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `tasks`
--
DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idQuest` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `weight` float DEFAULT '0',
  `QR` varchar(50) DEFAULT NULL,
  `orderBy` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `tasks`
--
LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (1,1,'������� 1','������� 1 ��� ������ 1',0.2,'7EiSEsy3',1),(2,1,'������� 2','������� 2 ��� ������ 1',0.8,'iatzKTab',2),(3,2,'������� 2','������� 2 ��� ������ 2',0.4,'AfDzyEbA',1),(4,2,'������� 1','������� 1 ��� ������ 2',0.6,'Tr2dsEh4',2);
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `teams`
--
DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `teams`
--
LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,'red'),(2,'blue'),(5,'green');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `userQuests`
--
DROP TABLE IF EXISTS `userQuests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userQuests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idQuest` int(11) DEFAULT NULL,
  `idTeam` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `statusQuest` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `userQuests`
--
LOCK TABLES `userQuests` WRITE;
/*!40000 ALTER TABLE `userQuests` DISABLE KEYS */;
INSERT INTO `userQuests` VALUES (1,2,2,1,1),(2,2,2,1,1),(9,1,1,5,1),(10,4,1,5,0),(11,3,2,5,0),(12,3,1,1,0),(13,5,5,5,0),(14,4,1,1,0);
/*!40000 ALTER TABLE `userQuests` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `users`
--
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `nickname` varchar(60) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `role` int(11) DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `social_id` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(100) DEFAULT 'https://quest.challenge.php.a-level.com.ua/public/img/main.jpg',
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `users`
--
LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'��������� �������',NULL,NULL,'female','volkova5005@gmail.com',1,'D6tQGKOXpGPzds5fe5foVHlOkf2FzGrz4Uky3DdAoWUUf4fTZNqPYc7V4Ncn','105259858962447148727','2018-01-18 09:47:36','2017-11-16 19:59:22','https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg',NULL),(5,'Kate','Kate',22,'f','Kate@gmail.com',1,'5wrRDHMTgXOL3sTrwSUWwhANdjOy203dbJYKstZDYoHtdUAPg2FVuUwRsGBQ',NULL,'2018-01-03 18:58:00','2017-11-19 20:42:42','https://quest.challenge.php.a-level.com.ua/public/img/user.png','$2y$10$YZ7eeofGGJMcEoL6adveHuqQN/obsOSs3rZVYQ6mD0GyqDKKr8Boy');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
-- Dump completed on 2018-01-20 18:13:56