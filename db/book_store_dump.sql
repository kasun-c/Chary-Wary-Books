-- MariaDB dump 10.19  Distrib 10.5.22-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: book_store
-- ------------------------------------------------------
-- Server version	10.5.22-MariaDB

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
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `summary` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'The Great Gatsby','F. Scott Fitzgerald',10.99,15,'A novel about the American dream.'),(2,'1984','George Orwell',8.99,20,'A dystopian novel exploring totalitarianism.'),(3,'Robinson Crusoe','Daniel Defoe',11.49,10,'The story of a castaway\'s survival on an uninhabited island.'),(4,'Gulliver\'s Travels','Jonathan Swift',14.99,8,'A satirical tale of fantastical voyages.'),(5,'Moby-Dick','Herman Melville',14.99,8,'A tale of obsession and revenge.'),(6,'The Catcher in the Rye','J.D. Salinger',11.99,14,'A story of teenage angst and rebellion.'),(7,'War and Peace','Leo Tolstoy',20.99,5,'An epic novel of Russian society.'),(8,'The Odyssey','Homer',13.99,10,'An ancient Greek epic poem.'),(9,'The Iliad','Homer',13.99,12,'A Greek epic poem about the Trojan War.'),(10,'Hamlet','William Shakespeare',6.99,25,'A tragedy about revenge and madness.'),(11,'The Divine Comedy','Dante Alighieri',17.99,6,'An epic poem describing the journey through hell, purgatory, and heaven.'),(12,'Crime and Punishment','Fyodor Dostoevsky',15.49,9,'A psychological novel about morality.'),(13,'Brave New World','Aldous Huxley',8.99,18,'A dystopian story about a futuristic society.'),(14,'The Hobbit','J.R.R. Tolkien',10.49,14,'A fantasy adventure novel.'),(15,'Lord of the Rings','J.R.R. Tolkien',25.99,7,'An epic high fantasy novel.'),(16,'Harry Potter and the Philosopher’s Stone','J.K. Rowling',12.99,20,'A young wizard’s journey begins.'),(17,'Wuthering Heights','Emily Bronte',13.99,12,'A story of passionate love and revenge.'),(18,'Harry Potter and the Prisoner of Azkaban','J.K. Rowling',12.99,18,'A dangerous prisoner escapes.'),(19,'Harry Potter and the Goblet of Fire','J.K. Rowling',15.99,16,'A thrilling tournament at Hogwarts.'),(20,'Harry Potter and the Order of the Phoenix','J.K. Rowling',15.99,15,'A secret resistance group emerges.'),(21,'Moby-Dick','Herman Melville',19.99,7,'A tale of obsession and revenge.'),(22,'Harry Potter and the Deathly Hallows','J.K. Rowling',18.99,10,'The epic conclusion to Harry Potter’s story.'),(23,'The Chronicles of Narnia','C.S. Lewis',22.99,9,'A magical land of adventures.'),(24,'The Lion, the Witch, and the Wardrobe','C.S. Lewis',10.49,12,'A wardrobe leads to a magical world.'),(25,'A Tale of Two Cities','Charles Dickens',9.99,18,'A story set during the French Revolution.'),(26,'David Copperfield','Charles Dickens',12.49,10,'The journey of a young man through life.'),(27,'Oliver Twist','Charles Dickens',11.99,15,'The hardships of an orphan in Victorian England.'),(28,'The Old Man and the Sea','Ernest Hemingway',9.49,20,'A story of struggle and perseverance.'),(29,'For Whom the Bell Tolls','Ernest Hemingway',14.99,10,'A tale of love and war.'),(30,'One Hundred Years of Solitude','Gabriel Garcia Marquez',13.99,12,'A family saga with magical realism.'),(31,'Huckleberry Finn','Mark Twain',12.49,10,'Adventures of a young boy along the Mississippi River.'),(32,'Don Quixote','Miguel de Cervantes',18.49,5,'The adventures of a nobleman turned knight-errant.'),(33,'Three Men in a Boat','Jerome K. Jerome',9.99,15,'A humorous account of a boating holiday.'),(34,'The Grapes of Wrath','John Steinbeck',11.49,14,'A tale of family struggles during the Great Depression.'),(35,'East of Eden','John Steinbeck',12.99,11,'A story of sibling rivalry and redemption.'),(36,'Of Mice and Men','John Steinbeck',8.49,18,'The friendship and dreams of two men.'),(37,'Anna Karenina','Leo Tolstoy',14.99,7,'A tragic love story in Russian society.'),(38,'The Brothers Karamazov','Fyodor Dostoevsky',16.49,6,'A philosophical and theological exploration.'),(39,'Les Misérables','Victor Hugo',17.99,8,'A tale of redemption and revolution.'),(40,'The Count of Monte Cristo','Alexandre Dumas',15.49,12,'A story of betrayal and revenge.'),(41,'Dracula','Bram Stoker',10.49,20,'The story of the legendary vampire.'),(42,'Frankenstein','Mary Shelley',9.49,18,'The creation of a monster.'),(43,'The Picture of Dorian Gray','Oscar Wilde',9.99,16,'A man’s quest for eternal youth.'),(44,'The Scarlet Letter','Nathaniel Hawthorne',10.99,14,'A story of sin and redemption.'),(45,'Walden','Henry David Thoreau',12.99,8,'A reflection on simple living.'),(46,'Fahrenheit 451','Ray Bradbury',8.99,15,'A dystopian story about censorship.'),(47,'A Passage to India','E. M. Forster',10.99,5,'An exploration of colonial tensions in British India.'),(48,'The Road','Cormac McCarthy',13.49,9,'A post-apocalyptic tale of survival.'),(49,'Blood Meridian','Cormac McCarthy',15.99,7,'A brutal tale of the American frontier.'),(50,'Men Without Women','Haruki Murakami',15.99,6,'Stories exploring the lives of lonely men.');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `log_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `book_id` (`book_id`),
  CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchases`
--

LOCK TABLES `purchases` WRITE;
/*!40000 ALTER TABLE `purchases` DISABLE KEYS */;
INSERT INTO `purchases` VALUES (1,1,1,2,'2025-01-01 04:30:00'),(2,2,2,1,'2025-01-02 06:00:00'),(5,5,5,2,'2025-01-05 10:30:00'),(8,3,5,5,'2025-01-08 11:55:00'),(9,4,1,2,'2025-01-09 03:00:00'),(10,5,2,1,'2025-01-10 09:40:00');
/*!40000 ALTER TABLE `purchases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('personal','corporate') NOT NULL,
  `corporate_id` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'john','e99a18c428cb38d5f260853678922e03','personal',NULL,'2025-01-09 06:29:33','john.doe@example.com','John Doe','123 Main St, New York, NY, USA'),(2,'anne','e10adc3949ba59abbe56e057f20f883e','corporate','CORP1001','2025-01-09 06:29:33','anne.smith@example.com','Anne Smith','456 Elm St, London, UK'),(3,'raj','5f4dcc3b5aa765d61d8327deb882cf99','personal',NULL,'2025-01-09 06:29:33','raj.kumar@example.com','Raj Kumar','789 Palm St, Colombo, Sri Lanka'),(4,'mary','d8578edf8458ce06fbc5bb76a58c5ca4','corporate','CORP1002','2025-01-09 06:29:33','alice.williams@example.com','Alice Williams','321 Oak St, Toronto, Canada'),(5,'sara','f25a2fc72690b780b2a14e140ef6a9e0','personal',NULL,'2025-01-09 06:29:33','mohammed.ali@example.com','Mohammed Ali','55 Victory Lane, Dubai, UAE'),(6,'alex','0d107d09f5bbe40cade3de5c71e9e9b7','corporate','CORP1003','2025-01-09 06:29:33','sarah.jones@example.com','Sarah Jones','777 Sunset Blvd, Los Angeles, USA'),(7,'chris','21232f297a57a5a743894a0e4a801fc3','personal',NULL,'2025-01-09 06:29:33','chris.taylor@example.com','Chris Taylor','99 High St, Sydney, Australia'),(8,'kate','d0763edaa9d9bd2a9516280e9044d885','corporate','CORP1004','2025-01-09 06:29:33','li.wei@example.com','Li Wei','88 Bamboo Lane, Beijing, China'),(9,'emma','40be4e59b9a2a2b5dffb918c0e86b3d7','personal',NULL,'2025-01-09 06:29:33','maria.garcia@example.com','Maria Garcia','15 Plaza Central, Madrid, Spain'),(10,'mike','4297f44b13955235245b2497399d7a93','corporate','CORP1005','2025-01-09 06:29:33','peter.parker@example.com','Peter Parker','20 Queens Blvd, New York, NY, USA'),(11,'linda','7c6a180b36896a0a8c02787eeafb0e4c','personal',NULL,'2025-01-09 06:29:33','emma.thompson@example.com','Emma Thompson','66 Baker St, London, UK'),(12,'paul','46f94c8de14fb36680850768ff1b7f2a','corporate','CORP1006','2025-01-09 06:29:33','yuki.takahashi@example.com','Yuki Takahashi','10 Sakura Rd, Tokyo, Japan'),(13,'rajith','0571749e2ac330a7455809c6b0e7af90','personal',NULL,'2025-01-09 06:29:33','miguel.rodriguez@example.com','Miguel Rodriguez','23 Camino Real, Mexico City, Mexico'),(14,'lucy','8afa847f50a716e64932d995c8e7435a','corporate','CORP1007','2025-01-09 06:29:33','lisa.brown@example.com','Lisa Brown','33 Maple Ave, Vancouver, Canada'),(15,'adam','0192023a7bbd73250516f069df18b500','personal',NULL,'2025-01-09 06:29:33','ahmed.hassan@example.com','Ahmed Hassan','44 Nile St, Cairo, Egypt'),(16,'mona','bf779e0933a882808585d19455cd7937','corporate','CORP1008','2025-01-09 06:29:33','olga.petrov@example.com','Olga Petrov','11 Red Square, Moscow, Russia'),(17,'jack','3bf1114a986ba87ed28fc1b5884fc2f8','personal',NULL,'2025-01-09 06:29:33','fatima.khan@example.com','Fatima Khan','77 Pearl St, Karachi, Pakistan'),(18,'nina','eb09d5e396183f4b71c3c798158f7c07','corporate','CORP1009','2025-01-09 06:29:33','daniel.smith@example.com','Daniel Smith','555 Broadway, Chicago, USA'),(19,'liam','482c811da5d5b4bc6d497ffa98491e38','personal',NULL,'2025-01-09 06:29:33','hana.kim@example.com','Hana Kim','99 Han River Rd, Seoul, South Korea'),(20,'sofia','008c5926ca861023c1d2a36653fd88e2','corporate','CORP1010','2025-01-09 06:29:33','jacques.dubois@example.com','Jacques Dubois','12 Champs-Élysées, Paris, France'),(21,'jake','a152e841783914146e4bcd4f39100686','personal',NULL,'2025-01-09 06:29:33','mohamed.abdullah@example.com','Mohamed Abdullah','88 Desert Rd, Riyadh, Saudi Arabia'),(22,'olivia','b427ebd39c845eb5417b7f7aaf1f9724','corporate','CORP1011','2025-01-09 06:29:33','lucy.jones@example.com','Lucy Jones','12 Green Rd, Dublin, Ireland'),(23,'ethan','a906449d5769fa7361d7ecc6aa3f6d28','personal',NULL,'2025-01-09 06:29:33','liam.evans@example.com','Liam Evans','100 Riverbank Rd, Auckland, New Zealand'),(24,'ava','3fde6bb0541387e4ebdadf7c2ff31123','corporate','CORP1012','2025-01-09 06:29:33','sophia.white@example.com','Sophia White','45 Sunshine Blvd, Miami, USA'),(25,'noah','e99a18c428cb38d5f260853678922e03','personal',NULL,'2025-01-09 06:29:33','harry.clark@example.com','Harry Clark','78 Harbor St, Melbourne, Australia');
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

-- Dump completed on 2025-01-10 10:10:28
