-- MySQL dump 10.13  Distrib 5.5.24, for Linux (x86_64)
--
-- Host: localhost    Database: crafteconomy
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','Administrator'),(2,'members','General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` mediumint(8) unsigned NOT NULL,
  `date_purchased` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_completed` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `buyer_id` mediumint(8) unsigned NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,256,'2012-08-04 10:00:00','2012-08-04 00:00:00',88,'Sent'),(2,257,'2012-08-04 12:00:00','0000-00-00 00:00:00',89,'Cancelled');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `seller_id` mediumint(8) unsigned NOT NULL,
  `intermediary_id` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext,
  `price` decimal(12,2) NOT NULL DEFAULT '0.00',
  `photo` varchar(255) DEFAULT NULL,
  `date_submitted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,2,0,'Vietnamese porcelain teapot and cup','Gorgeous Vietnamese handmade porcelain teapot and cup. Finest quality only from local craftsmen.',149.00,'https://www.filepicker.io/api/file/qgj09-OcQXOKFedRJ9ml','2012-08-04 20:58:44',1),(2,2,0,'Handmade Khmer scarf','A colorful, versatile scarf for every occasion. 100% wool. ',99.00,'https://www.filepicker.io/api/file/yjCFGSK3Sx2knArjXKxi','2012-08-04 21:01:07',1),(3,2,0,'Beadwork Zebra','One of a kind. This beadwork Zebra was painstakingly created by African artisans from thousands of tiny beads. ',499.00,'https://www.filepicker.io/api/file/vGucClA6SKSU__6pRPa5','2012-08-04 21:03:22',1),(4,2,0,'Ruby ring','Gorgeous, truly unique ruby ring made by the Indian artisans. Fair-trade.',749.00,'https://www.filepicker.io/api/file/sL_vTj4pQmWSineQyTA2','2012-08-04 21:05:50',1),(5,2,0,'Fern plate','Great collector\'s item. This fine porcelain plate features a detailed fern leaf design.',39.00,'https://www.filepicker.io/api/file/PzDOJsJoTMy3Pa8umh9f','2012-08-04 21:07:26',1),(6,2,0,'Hopi vase','An authentic piece of Hopi pottery. Made by Native American artists.',249.00,'https://www.filepicker.io/api/file/cvOmxZfHSPaqx86tWS0q','2012-08-04 21:09:25',1),(8,2,0,'Persian floral rug','This rug features incredible detail and craftsmanship. Measuring 4 feet in diameter. Made in Iran.',3999.00,'https://www.filepicker.io/api/file/7KCxpvgMTgGUri_Bxjst','2012-08-04 21:15:22',1),(9,2,0,'Okran quilt','Unique, one of a kind Okran quilt. Measures 2 feet by 2 feet. ',199.00,'https://www.filepicker.io/api/file/HRT4f_0sQ3u3Gkmxw7pP','2012-08-04 21:16:31',1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_logs`
--

DROP TABLE IF EXISTS `user_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_logs` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `log_message` varchar(255) NOT NULL DEFAULT '',
  `date_submitted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_logs`
--

LOCK TABLES `user_logs` WRITE;
/*!40000 ALTER TABLE `user_logs` DISABLE KEYS */;
INSERT INTO `user_logs` VALUES (1,' sent a message: ','2012-08-04 17:43:43'),(2,'+14074089561 sent a message: Will this be the final message?','2012-08-04 17:45:13'),(3,' sent a message:  - Action: , order_id: , Response: ','2012-08-04 18:59:34'),(4,' sent a message:  - Action: , order_id: , Response: ','2012-08-04 19:02:03'),(5,'+14074089561 sent a message: Ok 22  - Action: ok, order_id: 22, Response: Thank you for accepting, you can ship the item at your earliest convenience.','2012-08-04 19:02:19'),(6,'+14074089561 sent a message: Cancel 23 out of stock - Action: cancel, order_id: 23, Response: We\'re sorry you had to cancel.','2012-08-04 19:03:18'),(7,'+14074089561 sent a message: Cancel 24 out of stock - Action: cancel, order_id: 24, Reason: out of stock, Response: We\'re sorry you had to cancel.','2012-08-04 19:06:00'),(8,'+14074089561 sent a message: Sent 25 zcvyx7898ghk64246807547456 - \n	  	Action: sent, order_id: 25, Reason: , Tracking Number: zcvyx7898ghk64246807547456, Response: Thank you for sending! Funds will be distributed when the buyer receives the item.','2012-08-04 19:10:02'),(9,'+14074089561 sent a message: Sent 26 540052972072 - \n	  	Action: sent, order_id: 26, Reason: , Tracking Number: 540052972072, Response: Thank you for sending! Funds will be distributed when the buyer receives the item.','2012-08-04 19:13:21'),(10,' sent a message:  - \n	  	Action: , order_id: , Reason: , Tracking Number: , Response: ','2012-08-04 19:14:22'),(11,'+14074089561 sent a message: Sent 27 540052972072 - Action: sent, order_id: 27, Reason: , Tracking Number: 540052972072, Response: Thank you for sending Funds will be distributed when the buyer receives the item','2012-08-04 19:17:05'),(12,' sent a message:  - Action: , order_id: , Reason: , Tracking Number: , Response: ','2012-08-04 19:20:15'),(13,' sent a message:  - Action: , order_id: , Reason: , Tracking Number: , Response: ','2012-08-04 19:24:24'),(14,' sent a message:  - Action: , order_id: , Reason: , Tracking Number: , Response:  ','2012-08-04 19:28:42'),(15,'+14074089561 sent a message: Sent 28 540052972072 - Action: SENT, order_id: 28, Reason: , Tracking Number: 540052972072, Response: Thank you for sending! Funds will be distributed when the buyer receives the item ','2012-08-04 19:29:43'),(16,' sent a message:  - Action: , order_id: , Reason: , Tracking Number: , Response:  ','2012-08-04 19:32:19'),(17,'+14074089561 sent a message: Sent 29 540052972072 - Action: SENT, order_id: 29, Reason: , Tracking Number: 540052972072, Response: Thank you for sending! Funds will be distributed when the buyer receives the item. ','2012-08-04 19:32:47'),(18,' sent a message:  - Action: , order_id: , Reason: , Tracking Number: , Response:  ','2012-08-04 19:40:51'),(19,'+14074089561 sent a message: Crafthelp - Action: , order_id: , Reason: , Tracking Number: , Response: Accept order: OK order number\n				Cancel order: CANCEL number reason\n				Send order: SENT number Tracking-number ','2012-08-04 19:41:31'),(20,'+14074089561 sent a message: Ok 30 - Action: OK, order_id: 30, Reason: , Tracking Number: , Response: Thank you for accepting, you can ship the item at your earliest convenience. ','2012-08-04 19:42:24'),(21,'+14074089561 sent a message: Test - Action: , order_id: , Reason: , Tracking Number: , Response:  ','2012-08-04 19:47:49'),(22,' sent a message:  - Action: , order_id: , Reason: , Tracking Number: , Response:  ','2012-08-04 20:10:40'),(23,'+14074089561 sent a message: Ok 31 - Action: OK, order_id: 31, Reason: , Tracking Number: , Response: Thank you for accepting, you can ship the item at your earliest convenience. ','2012-08-04 20:11:14'),(24,'+14074089561 sent a message: Cancel 32 discontinued product - Action: CANCEL, order_id: 32, Reason: discontinued product, Tracking Number: , Response: We\'re sorry you had to cancel. ','2012-08-04 20:12:11'),(25,'+14074089561 sent a message: Sent 33 540052972072 - Action: , order_id: , Reason: , Tracking Number: , Response:  ','2012-08-04 20:12:51'),(26,'+14074089561 sent a message: Shipped 26 540052972072 - Action: SHIPPED, order_id: 26, Reason: , Tracking Number: 540052972072, Response: Thank you for sending! Funds will be distributed when the buyer receives the item. ','2012-08-04 20:13:31'),(27,'+14074089561 sent a message: Craft help - Action: , order_id: , Reason: , Tracking Number: , Response:  ','2012-08-04 20:14:04'),(28,'+14074089561 sent a message: Crafthelp - Action: , order_id: , Reason: , Tracking Number: , Response: Accept order: OK order number\n				Cancel order: CANCEL number reason\n				Send order: SENT number Tracking-number ','2012-08-04 20:14:17'),(29,' sent a message:  - Action: , order_id: , Reason: , Tracking Number: , Response: Your request was not understood, for a list of commands reply CRAFTHELP to this message ','2012-08-04 20:18:26'),(30,'+14074089561 sent a message: Crafthelp - Action: , order_id: , Reason: , Tracking Number: , Response: Accept order: OK order number, Cancel order: CANCEL number reason, Send order: SHIPPED number Tracking-number ','2012-08-04 20:19:41'),(31,'+14074089561 sent a message: Craft help  - Action: , order_id: , Reason: , Tracking Number: , Response: Accept order: OK order number, Cancel order: CANCEL number reason, Send order: SHIPPED number Tracking-number ','2012-08-04 20:20:12'),(32,'+14074089561 sent a message: Unknown input - Action: , order_id: , Reason: , Tracking Number: , Response: Your request was not understood, for a list of commands reply CRAFTHELP to this message ','2012-08-04 20:20:43'),(33,' sent a message:  - Action: , order_id: , Reason: , Tracking Number: , Response: Your request was not understood, for a list of commands reply CRAFTHELP to this message ','2012-08-04 22:14:30'),(34,' sent a message:  - Action: , order_id: , Reason: , Tracking Number: , Response: Your request was not understood, for a list of commands reply CRAFTHELP to this message ','2012-08-04 22:14:33'),(35,' sent a message:  - Action: , order_id: , Reason: , Tracking Number: , Response: Your request was not understood, for a list of commands reply CRAFTHELP to this message ','2012-08-04 22:15:29'),(36,'+14074089561 sent a message: Ok 1 - Action: OK, order_id: 1, Reason: , Tracking Number: , Response: Thank you for accepting, you can ship the item at your earliest convenience. ','2012-08-04 22:27:04'),(37,'+14074089561 sent a message: Cancel 2 - Action: CANCEL, order_id: 2, Reason: , Tracking Number: , Response: We\'re sorry you had to cancel. ','2012-08-04 22:28:22'),(38,'+14074089561 sent a message: Shipped 1 - Action: SHIPPED, order_id: 1, Reason: , Tracking Number: , Response: Thank you for sending! Funds will be distributed when the buyer receives the item. ','2012-08-04 22:28:51');
/*!40000 ALTER TABLE `user_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `bio` mediumtext,
  `billing_address` varchar(255) DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_postal_code` int(11) DEFAULT NULL,
  `billing_country` varchar(255) DEFAULT NULL,
  `billing_state` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_postal_code` int(11) DEFAULT NULL,
  `shipping_country` varchar(255) DEFAULT NULL,
  `shipping_state` varchar(255) DEFAULT NULL,
  `account_balance` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'\0\0','buyer test','6daf9d14d524916884a1e6d3fab11c65f8683df5',NULL,'buyer@mailinator.com',NULL,NULL,NULL,NULL,1344100690,1344102058,1,'Buyer','Test','407-408-9561',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(2,'\0\0','seller test','49eabd02c1a96af94b72c0666f55d491a2367745',NULL,'seller@mailinator.com',NULL,NULL,NULL,NULL,1344104385,1344134373,1,'Seller','Test','407-408-9561',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(3,'\0\0','intermediary test','8dba867e1df862b1450dcf29e5a480b787119900',NULL,'intermediary@mailinator.com',NULL,NULL,NULL,NULL,1344104415,1344104415,1,'Intermediary','Test','407-408-9561',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (1,1,2),(2,2,2),(3,3,2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-08-05  3:26:24
