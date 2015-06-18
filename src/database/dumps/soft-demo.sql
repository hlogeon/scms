-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `content_themes`
--

DROP TABLE IF EXISTS `content_themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content_themes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_themes`
--

LOCK TABLES `content_themes` WRITE;
/*!40000 ALTER TABLE `content_themes` DISABLE KEYS */;
INSERT INTO `content_themes` VALUES (1,'Тест','<p>Тестовая тематика</p>\r\n','2015-06-18 04:53:21','2015-06-18 04:53:21');
/*!40000 ALTER TABLE `content_themes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content_types`
--

DROP TABLE IF EXISTS `content_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `has_form` tinyint(1) NOT NULL,
  `form_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `form_action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_types`
--

LOCK TABLES `content_types` WRITE;
/*!40000 ALTER TABLE `content_types` DISABLE KEYS */;
INSERT INTO `content_types` VALUES (1,'Загрузка после заполнения формы',1,'App\\Forms\\Download','/download','/content','2015-06-18 03:28:01','2015-06-18 03:28:01'),(2,'Загрузка без заполнения формы',0,'','','','2015-06-18 03:28:24','2015-06-18 03:28:24');
/*!40000 ALTER TABLE `content_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hlogeon_scms_categories`
--

DROP TABLE IF EXISTS `hlogeon_scms_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hlogeon_scms_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `hlogeon_scms_categories_parent_id_index` (`parent_id`),
  KEY `hlogeon_scms_categories_lft_index` (`lft`),
  KEY `hlogeon_scms_categories_rgt_index` (`rgt`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hlogeon_scms_categories`
--

LOCK TABLES `hlogeon_scms_categories` WRITE;
/*!40000 ALTER TABLE `hlogeon_scms_categories` DISABLE KEYS */;
INSERT INTO `hlogeon_scms_categories` VALUES (9,NULL,1,4,0,'test_root','test_root','2015-06-16 18:12:31','2015-06-16 18:12:31'),(10,9,2,3,1,'test','test','2015-06-16 18:12:31','2015-06-16 18:12:31'),(11,NULL,5,8,0,'test_root','test_root','2015-06-16 18:29:20','2015-06-16 18:29:20'),(12,11,6,7,1,'test','test','2015-06-16 18:29:20','2015-06-16 18:29:20');
/*!40000 ALTER TABLE `hlogeon_scms_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hlogeon_scms_category_page`
--

DROP TABLE IF EXISTS `hlogeon_scms_category_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hlogeon_scms_category_page` (
  `page_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hlogeon_scms_category_page`
--

LOCK TABLES `hlogeon_scms_category_page` WRITE;
/*!40000 ALTER TABLE `hlogeon_scms_category_page` DISABLE KEYS */;
INSERT INTO `hlogeon_scms_category_page` VALUES (9,4,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,5,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,6,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,7,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `hlogeon_scms_category_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hlogeon_scms_footers`
--

DROP TABLE IF EXISTS `hlogeon_scms_footers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hlogeon_scms_footers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hlogeon_scms_footers`
--

LOCK TABLES `hlogeon_scms_footers` WRITE;
/*!40000 ALTER TABLE `hlogeon_scms_footers` DISABLE KEYS */;
INSERT INTO `hlogeon_scms_footers` VALUES (2,'<footer>\r\n            <div class=\"row wrapper\">\r\n                <div class=\"col-md-12 off-top\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-md-6\">\r\n                            <div class=\"row\">\r\n                                <div class=\"col-md-12\">\r\n                                    <div class=\"row\">\r\n                                        <div class=\"col-md-6\">\r\n                                            <span class=\"title\">Компания</span>\r\n                                            <ul>\r\n                                                <li><a href=\"#\">Пункт</a></li>\r\n                                                <li><a href=\"#\">Пункт</a></li>\r\n                                                <li><a href=\"#\">Пункт</a></li>\r\n                                            </ul>\r\n                                        </div>\r\n                                        <div class=\"col-md-6\">\r\n                                            <span class=\"title\">Обучение</span>\r\n                                        </div>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                            <div class=\"row\">\r\n                                <div class=\"col-md-12\">\r\n                                    <div class=\"row\">\r\n                                        <div class=\"col-md-6\">\r\n                                            <span class=\"title\">Клиенты</span>\r\n                                        </div>\r\n                                        <div class=\"col-md-6\">\r\n                                            <span class=\"title\">Поддержка</span>\r\n                                        </div>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"col-md-6\">\r\n                            <div class=\"row\">\r\n                                <div class=\"col-md-6\">\r\n                                    <span class=\"title\">Офисные продажи</span>\r\n                                    <ul>\r\n                                        <li><a href=\"#\">Пункт</a></li>\r\n                                        <li><a href=\"#\">Пункт</a></li>\r\n                                        <li><a href=\"#\">Пункт</a></li>\r\n                                    </ul>\r\n                                </div>\r\n                                <div class=\"col-md-6\">\r\n                                    <span class=\"title\">Контакты</span>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"copyright\">\r\n                <span>Copyright © 2015 \"Патронс\".</span>\r\n                <ul class=\"f-menu\">\r\n                    <li><a href=\"#\">Правовая информация</a></li>\r\n                    <li><a href=\"#\">Политика конфиденциальности</a></li>\r\n                    <li><a href=\"#\">Карта сайта</a></li>\r\n                </ul>\r\n            </div>\r\n        </footer>',1,'2015-06-17 22:09:30','2015-06-17 22:33:09');
/*!40000 ALTER TABLE `hlogeon_scms_footers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hlogeon_scms_layouts`
--

DROP TABLE IF EXISTS `hlogeon_scms_layouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hlogeon_scms_layouts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `has_sidebar` tinyint(1) NOT NULL,
  `sidebar` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hlogeon_scms_layouts`
--

LOCK TABLES `hlogeon_scms_layouts` WRITE;
/*!40000 ALTER TABLE `hlogeon_scms_layouts` DISABLE KEYS */;
INSERT INTO `hlogeon_scms_layouts` VALUES (9,'Блог-запись','site.test',0,'','2015-06-16 18:12:31','2015-06-18 01:34:50'),(10,'Блог-список','site.test-list',0,'','2015-06-16 18:12:31','2015-06-18 01:34:38'),(13,'Кейс-список','site.case-list',0,'','2015-06-18 01:35:18','2015-06-18 01:35:18'),(14,'Кейс-запись','site.case',0,'','2015-06-18 01:35:48','2015-06-18 01:35:48');
/*!40000 ALTER TABLE `hlogeon_scms_layouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hlogeon_scms_menu_items`
--

DROP TABLE IF EXISTS `hlogeon_scms_menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hlogeon_scms_menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hlogeon_scms_menu_items`
--

LOCK TABLES `hlogeon_scms_menu_items` WRITE;
/*!40000 ALTER TABLE `hlogeon_scms_menu_items` DISABLE KEYS */;
INSERT INTO `hlogeon_scms_menu_items` VALUES (2,'Контент','/content',1,'2015-06-18 04:30:56','2015-06-18 04:30:56'),(3,'Сферы бизнеса','/areas',1,'2015-06-18 06:19:43','2015-06-18 06:19:43');
/*!40000 ALTER TABLE `hlogeon_scms_menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hlogeon_scms_pages`
--

DROP TABLE IF EXISTS `hlogeon_scms_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hlogeon_scms_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `layout_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `in_menu` tinyint(1) NOT NULL,
  `sidebar_in_layout` tinyint(1) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `sidebar` int(11) DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `reading_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `seo_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `background` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `additional_content` text COLLATE utf8_unicode_ci NOT NULL,
  `business_area_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hlogeon_scms_pages`
--

LOCK TABLES `hlogeon_scms_pages` WRITE;
/*!40000 ALTER TABLE `hlogeon_scms_pages` DISABLE KEYS */;
INSERT INTO `hlogeon_scms_pages` VALUES (6,9,7,0,1,0,0,'Классное статья!','ut','<p>Commodi accusamus omnis tempora facilis. Voluptatem quia quisquam maxime aut provident reprehenderit tenetur. Et et eaque ut aut. Necessitatibus aut perferendis praesentium. Sit occaecati harum aut qui est. Omnis repellat sint temporibus dolores. Vero aperiam enim aut doloremque ipsa reprehenderit ut. Vel et magnam exercitationem. Natus cupiditate beatae qui. Soluta et rem et pariatur aut aut.</p>\r\n',2,'0000-00-00 00:00:00','2015-06-16 18:29:21','2015-06-18 01:22:30','10 минут',1,'','','','Ну просто очень хорошая, всем советую прочитать','','','',0),(7,9,7,0,1,0,0,'dolore','dolore','<p>Consequatur sit sed mollitia minus. Quia nesciunt qui aut. Voluptas odio unde quaerat autem maxime nemo. Ipsum aut reiciendis autem distinctio autem corporis. Qui omnis voluptas et quis aut deserunt est quis. Itaque quisquam quibusdam aspernatur aperiam omnis est ab et. Autem voluptatem ea labore quia. Quia natus nesciunt accusantium modi. Soluta accusamus eaque voluptas ea. Error nobis nihil et quia. Sit sit voluptatem perferendis ex rem occaecati.</p>\r\n',0,'0000-00-00 00:00:00','2015-06-16 18:29:21','2015-06-17 23:08:34','',0,'','','','','','','',0),(8,14,8,10,1,0,0,'Тестовый кейс','testovyj-kejs','<p>Innovative Management Solutions (IMS) offers project management solutions like consulting, staffing, training,&nbsp;software, and application hosting. Their goal is to help&nbsp;organizations improve their efficiencies in order to increase&nbsp;their project delivery results while minimizing costs.</p>\r\n',NULL,'0000-00-00 00:00:00','2015-06-18 02:12:53','2015-06-18 06:06:04','',1,'','','','Дополнительная строка названия','VmpwUooHYQ.jpeg','PLrEfZACFR.jpeg','',1),(9,14,8,0,0,0,0,'Еще кейс','eshche-kejs','<p>You may want to publish groups of files separately. For instance, you might want your users to be able to publish your package&#39;s configuration files and asset files separately. You can do this by &#39;tagging&#39; them:</p>\r\n',NULL,'0000-00-00 00:00:00','2015-06-18 02:45:41','2015-06-18 02:45:41','',1,'','','','Вторая строка кейса','0RQDKWgcC9.jpeg','6XIfBeszIp.jpeg','',0);
/*!40000 ALTER TABLE `hlogeon_scms_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hlogeon_scms_sidebars`
--

DROP TABLE IF EXISTS `hlogeon_scms_sidebars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hlogeon_scms_sidebars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hlogeon_scms_sidebars`
--

LOCK TABLES `hlogeon_scms_sidebars` WRITE;
/*!40000 ALTER TABLE `hlogeon_scms_sidebars` DISABLE KEYS */;
INSERT INTO `hlogeon_scms_sidebars` VALUES (1,'<div class=\"title\">Заголовок блока</div>\r\n                                        <ul>\r\n                                            <li><a href=\"\" class=\"active\">Элемент меню 1</a></li>\r\n                                            <li><a href=\"\">Элемент меню</a></li>\r\n                                            <li><a href=\"\">Элемент меню</a></li>\r\n                                        </ul>\r\n','2015-06-17 22:43:49','2015-06-18 01:18:56'),(2,'<div class=\"title\">Заголовок блока</div>\r\n                                        <ul>\r\n                                            <li><a href=\"\" class=\"active\">Элемент меню</a></li>\r\n                                            <li><a href=\"\">Элемент меню 2</a></li>\r\n                                            <li><a href=\"\">Элемент меню</a></li>\r\n                                        </ul>','2015-06-18 01:19:10','2015-06-18 01:19:10');
/*!40000 ALTER TABLE `hlogeon_scms_sidebars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hlogeon_scms_types`
--

DROP TABLE IF EXISTS `hlogeon_scms_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hlogeon_scms_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enable_in_menu` tinyint(1) NOT NULL,
  `enable_own_layout` tinyint(1) NOT NULL,
  `type_in_menu` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `list_layout_id` int(11) NOT NULL,
  `type_layout_id` int(11) NOT NULL,
  `enable_own_sidebar` tinyint(1) NOT NULL,
  `type_sidebar` tinyint(1) NOT NULL,
  `sidebar` int(11) NOT NULL,
  `item_sidebar` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hlogeon_scms_types`
--

LOCK TABLES `hlogeon_scms_types` WRITE;
/*!40000 ALTER TABLE `hlogeon_scms_types` DISABLE KEYS */;
INSERT INTO `hlogeon_scms_types` VALUES (7,'Блог','test',1,0,1,'2015-06-16 18:12:31','2015-06-18 01:19:24',10,9,1,0,1,1),(8,'Кейс','case',0,0,1,'2015-06-18 01:36:23','2015-06-18 01:36:23',13,14,0,0,0,0);
/*!40000 ALTER TABLE `hlogeon_scms_types` ENABLE KEYS */;
UNLOCK TABLES;

DROP TABLE IF EXISTS `site_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `content_theme_id` int(11) NOT NULL,
  `background` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_contents`
--

LOCK TABLES `site_contents` WRITE;
/*!40000 ALTER TABLE `site_contents` DISABLE KEYS */;
INSERT INTO `site_contents` VALUES (1,'Тестовый контент','<p>Font Awesome gives you scalable vector icons that can instantly be customized &mdash; size, color, drop shadow, and anything that can be done with the power of CSS.</p>\r\n',1,1,'ZQqdfWfrkJ.pdf','2015-06-18 03:31:29','2015-06-18 05:46:15',0,'tIku3tKcpQ.jpeg');
/*!40000 ALTER TABLE `site_contents` ENABLE KEYS */;
UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-18 20:55:08
