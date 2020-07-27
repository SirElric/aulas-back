-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: dbpadokahillvalley
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tblabout`
--

DROP TABLE IF EXISTS `tblabout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblabout` (
  `idAbout` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `textContent` text NOT NULL,
  `display` tinyint(1) NOT NULL,
  PRIMARY KEY (`idAbout`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblabout`
--

LOCK TABLES `tblabout` WRITE;
/*!40000 ALTER TABLE `tblabout` DISABLE KEYS */;
INSERT INTO `tblabout` VALUES (2,'Padoka Hill Valley','                                                         Deserunt qui non id elit amet cupidatat mollit minim adipisicing consequat veniam ea consectetur. Officia fugiat cillum cillum aute pariatur consectetur laboris ullamco consectetur sunt. Dolor ex dolore officia proident sunt consectetur laborum ullamco. Est dolor elit ea nulla laboris cillum et adipisicing Lorem culpa ad commodo. Cillum aute ex culpa magna ad enim velit nisi. Ex officia labore consequat ut deserunt elit do laborum consectetur nisi nisi ipsum laborum.Lorem sunt excepteur anim reprehenderit cupidatat quis laborum do in et in velit. Veniam veniam minim culpa sunt dolore est consectetur voluptate aliqua eu. Adipisicing laboris proident amet tempor deserunt ex amet laboris do non Lorem adipisicing. Enim labore nisi dolor ut culpa ipsum. Fugiat amet minim cillum fugiat culpa. Laborum occaecat in ipsum irure ea reprehenderit aliqua minim veniam consectetur exercitation reprehenderit sint. Adipisicing veniam reprehenderit elit ex aute sit amet laborum voluptate laboris velit. Ut quis occaecat nostrud commodo deserunt commodo deserunt. Quis nisi ut consequat ex veniam esse duis proident esse officia. Non minim incididunt eu duis aliquip magna officia magna cupidatat. Ex ullamco veniam occaecat reprehenderit laboris.                                                                                                                         ',1);
/*!40000 ALTER TABLE `tblabout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblconstraint`
--

DROP TABLE IF EXISTS `tblconstraint`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblconstraint` (
  `idConstraint` int(11) NOT NULL AUTO_INCREMENT,
  `operatorLevel` tinyint(1) DEFAULT NULL,
  `clientLevel` tinyint(1) DEFAULT NULL,
  `administerLevel` tinyint(1) DEFAULT NULL,
  `levelName` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idConstraint`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblconstraint`
--

LOCK TABLES `tblconstraint` WRITE;
/*!40000 ALTER TABLE `tblconstraint` DISABLE KEYS */;
INSERT INTO `tblconstraint` VALUES (1,1,1,1,'Administrador'),(2,1,1,0,'Operador'),(3,0,1,0,'Cliente');
/*!40000 ALTER TABLE `tblconstraint` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcontact`
--

DROP TABLE IF EXISTS `tblcontact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblcontact` (
  `idContact` int(11) NOT NULL AUTO_INCREMENT,
  `clientName` varchar(100) NOT NULL,
  `profession` varchar(100) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `homePage` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `message` text NOT NULL,
  `optionMessage` int(11) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `cellphone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idContact`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcontact`
--

LOCK TABLES `tblcontact` WRITE;
/*!40000 ALTER TABLE `tblcontact` DISABLE KEYS */;
INSERT INTO `tblcontact` VALUES (1,'TestName','testProfession',0,'test.email@test.com','TestHomePage.com','test.facebook@test.com','test message',0,NULL,NULL),(5,'TestSuggestion','Pro.Suggestion',0,'test.suggestion.email@test.com','TestSuggestion.com','testSugestion.facebook@test.com','test Suggestion message',0,NULL,NULL),(6,'TestReview','Pro.Review',0,'test.review.email@test.com','TestReview.com','testReview.facebook@test.com','test Review Message',1,NULL,NULL),(8,'TestMessage','Pro.Message',1,'test.message.email@test.com','TestMessage.com','testMessage.facebook@test.com','Laboris aliqua culpa amet et amet elit. Enim non non in consectetur magna sunt ut pariatur enim. Ipsum commodo ad proident incididunt eiusmod voluptate.\r\n\r\nUt qui incididunt deserunt excepteur nisi consequat culpa culpa proident culpa anim nulla Lorem. Non proident elit dolor do duis cupidatat mollit laborum eiusmod voluptate cupidatat quis. Voluptate pariatur labore velit commodo nostrud cupidatat amet tempor. Aute laborum id voluptate eu occaecat dolore incididunt laborum dolor dolore cupidatat anim.\r\n\r\nLorem mollit proident aliquip nostrud velit esse occaecat id deserunt cillum. Pariatur aliqua irure commodo ea enim veniam amet. Dolor veniam aliquip mollit exercitation Lorem aute reprehenderit.\r\n\r\nMinim eiusmod non non quis consectetur enim reprehenderit. In irure ea non deserunt incididunt labore id nulla et occaecat voluptate nostrud. Non excepteur laboris fugiat aute laborum ad ullamco enim quis et. Nostrud et nisi quis voluptate labore exercitation eiusmod nostrud nostrud reprehenderit nostrud. Anim exercitation Lorem est nostrud veniam culpa culpa esse cillum minim sit et.',0,NULL,NULL),(12,'TestNameFour','testProfession',1,'test4.email@test.com','TestHomePage4.com','test.facebook4@test.com','teste $444444',0,NULL,NULL),(13,'TestMasculino','testProfessionThree',1,'test.email@test.com','TestHomePage.com','test.facebook@test.com','test',0,NULL,NULL);
/*!40000 ALTER TABLE `tblcontact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcuriosity`
--

DROP TABLE IF EXISTS `tblcuriosity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tblcuriosity` (
  `idCuriosity` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `textContent` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `display` tinyint(1) NOT NULL,
  PRIMARY KEY (`idCuriosity`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcuriosity`
--

LOCK TABLES `tblcuriosity` WRITE;
/*!40000 ALTER TABLE `tblcuriosity` DISABLE KEYS */;
INSERT INTO `tblcuriosity` VALUES (2,'Sobre Nossos Pães','Cillum irure adipisicing commodo consequat cupidatat commodo consectetur adipisicing magna sint id labore magna proident. Minim id est excepteur nisi duis ut ea cupidatat deserunt aliqua elit esse consectetur. Proident aliquip aute minim elit labore ea ut dolore amet culpa ad eiusmod consectetur. Amet incididunt tempor et ut Lorem anim cillum velit fugiat excepteur laboris dolore. Id duis commodo amet esse quis excepteur ad occaecat velit. Irure mollit veniam laboris occaecat aliquip eu cillum cillum reprehenderit et. Id tempor irure minim amet labore. Aliqua adipisicing laboris enim nisi nostrud minim mollit ad aliquip. Ut commodo mollit exercitation exercitation incididunt sunt occaecat cillum. Irure velit non aute exercitation pariatur aliqua labore dolor irure laboris et. Occaecat excepteur mollit magna adipisicing veniam pariatur irure irure aliquip culpa adipisicing cillum aliquip. Enim adipisicing ut mollit fugiat id commodo officia fugiat id labore est enim. Magna duis et cupidatat ipsum sint tempor ad nostrud minim esse veniam aliquip ea fugiat. Elit incididunt incididunt sit consectetur ipsum occaecat mollit non. Pariatur sit ex adipisicing reprehenderit exercitation irure quis nulla incididunt officia sunt. Ea non consectetur reprehenderit nostrud sunt elit fugiat voluptate. Excepteur sunt tempor adipisicing incididunt irure velit nisi sit ex minim velit. ','b74853de45f98333cfd463925faefa71.jpg',1),(3,'Ingredientes de Qualidade test','Cillum irure adipisicing commodo consequat cupidatat commodo consectetur adipisicing magna sint id labore magna proident. Minim id est excepteur nisi duis ut ea cupidatat deserunt aliqua elit esse consectetur. Proident aliquip aute minim elit labore ea ut dolore amet culpa ad eiusmod consectetur. Amet incididunt tempor et ut Lorem anim cillum velit fugiat excepteur laboris dolore. Id duis commodo amet esse quis excepteur ad occaecat velit. Irure mollit veniam laboris occaecat aliquip eu cillum cillum reprehenderit et. Id tempor irure minim amet labore. Aliqua adipisicing laboris enim nisi nostrud minim mollit ad aliquip. Ut commodo mollit exercitation exercitation incididunt sunt occaecat cillum. Irure velit non aute exercitation pariatur aliqua labore dolor irure laboris et. Occaecat excepteur mollit magna adipisicing veniam pariatur irure irure aliquip culpa adipisicing cillum aliquip. Enim adipisicing ut mollit fugiat id commodo officia fugiat id labore est enim. Magna duis et cupidatat ipsum sint tempor ad nostrud minim esse veniam aliquip ea fugiat. Elit incididunt incididunt sit consectetur ipsum occaecat mollit non. Pariatur sit ex adipisicing reprehenderit exercitation irure quis nulla incididunt officia sunt. Ea non consectetur reprehenderit nostrud sunt elit fugiat voluptate. Excepteur sunt tempor adipisicing incididunt irure velit nisi sit ex minim velit. ','69e5ccd16d9aa7844f0fe93ee343e011.jpg',1);
/*!40000 ALTER TABLE `tblcuriosity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbllocation`
--

DROP TABLE IF EXISTS `tbllocation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbllocation` (
  `idLocation` int(11) NOT NULL AUTO_INCREMENT,
  `localName` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `localNumber` int(5) NOT NULL,
  `map` text,
  `display` tinyint(1) NOT NULL,
  PRIMARY KEY (`idLocation`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbllocation`
--

LOCK TABLES `tbllocation` WRITE;
/*!40000 ALTER TABLE `tbllocation` DISABLE KEYS */;
INSERT INTO `tbllocation` VALUES (1,'padoka one','test.localemail@test.com','test state','test City','test Street',123,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.3539659562443!2d-46.69253658449443!3d-23.591635184667915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5738ad7d5c5d%3A0xc4ca5a22b1178308!2sStarbucks%20Shopping%20JK%20Iguatemi!5e0!3m2!1spt-BR!2sbr!4v1594399568440!5m2!1spt-BR!2sbr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>',1),(3,'padoka two','test.localemail@test.com','test state','test City','test Street',234,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.3539659562443!2d-46.69253658449443!3d-23.591635184667915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5738ad7d5c5d%3A0xc4ca5a22b1178308!2sStarbucks%20Shopping%20JK%20Iguatemi!5e0!3m2!1spt-BR!2sbr!4v1594399568440!5m2!1spt-BR!2sbr\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>',1);
/*!40000 ALTER TABLE `tbllocation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbluser` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `idConstraint` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `birthDate` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `cellphone` varchar(20) NOT NULL,
  `tellphone` varchar(20) DEFAULT NULL,
  `userpassword` varchar(50) NOT NULL,
  `nickname` varchar(15) NOT NULL,
  PRIMARY KEY (`idUser`),
  KEY `constraint_user` (`idConstraint`),
  CONSTRAINT `constraint_user` FOREIGN KEY (`idConstraint`) REFERENCES `tblconstraint` (`idConstraint`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluser`
--

LOCK TABLES `tbluser` WRITE;
/*!40000 ALTER TABLE `tbluser` DISABLE KEYS */;
INSERT INTO `tbluser` VALUES (17,3,'client-site','1111-11-11','test.email@test.com','999.999.999-99','(999) 99999-9999','(999) 9999-9999','62608e08adc29a8d6dbc9754e659f125','client'),(18,2,'Operator-site','1111-11-11','test.email@test.com','999.999.999-99','(999) 99999-9999','(999) 9999-9999','4b583376b2767b923c3e1da60d10de59','Operator'),(19,1,'administer-site','1111-11-11','test.email@test.com','999.999.999-99','(999) 99999-9999','(999) 9999-9999','5a69888814ba29b9c047c759c1469be7','administer'),(40,1,'Marcel-SENAI','1111-11-11','test@gmail.com','999.999.999-99','(999) 99999-9999','(999) 9999-9999','21232f297a57a5a743894a0e4a801fc3','admin');
/*!40000 ALTER TABLE `tbluser` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-23 15:35:22
