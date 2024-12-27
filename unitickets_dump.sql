-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: unitickets_web
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `adminmessages`
--

DROP TABLE IF EXISTS `adminmessages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminmessages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `response` text DEFAULT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`message_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `adminmessages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminmessages`
--

LOCK TABLES `adminmessages` WRITE;
/*!40000 ALTER TABLE `adminmessages` DISABLE KEYS */;
/*!40000 ALTER TABLE `adminmessages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `tickets_booked` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`booking_id`),
  KEY `user_id` (`user_id`),
  KEY `event_id` (`event_id`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commission`
--

DROP TABLE IF EXISTS `commission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commission` (
  `commission_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `commission_rate` decimal(5,2) NOT NULL,
  `commission_amount` decimal(10,2) NOT NULL,
  `earned_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`commission_id`),
  KEY `booking_id` (`booking_id`),
  CONSTRAINT `commission_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commission`
--

LOCK TABLES `commission` WRITE;
/*!40000 ALTER TABLE `commission` DISABLE KEYS */;
/*!40000 ALTER TABLE `commission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `university_id` int(11) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `venue` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` blob DEFAULT NULL,
  `ticket_price` decimal(10,2) NOT NULL,
  `max_tickets` int(11) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `university_id` (`university_id`),
  CONSTRAINT `events_ibfk_1` FOREIGN KEY (`university_id`) REFERENCES `universities` (`university_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `universities`
--

DROP TABLE IF EXISTS `universities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `universities` (
  `university_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `location` varchar(200) DEFAULT NULL,
  `contact_email` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`university_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `universities`
--

LOCK TABLES `universities` WRITE;
/*!40000 ALTER TABLE `universities` DISABLE KEYS */;
/*!40000 ALTER TABLE `universities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `university_id` varchar(50) DEFAULT NULL,
  `user_category` enum('admin','user') NOT NULL DEFAULT 'user',
  `is_verified` tinyint(1) DEFAULT 0,
  `special_offers` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2024-12-27 20:08:06
