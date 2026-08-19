-- MySQL dump 10.13  Distrib 8.4.10, for Linux (x86_64)
--
-- Host: localhost    Database: laravelshop
-- ------------------------------------------------------
-- Server version	8.4.10

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `addresses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `addresses_user_id_foreign` (`user_id`),
  CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,'خانه','آرمین','09146911909','آذربایحان شرقی','بناب','11119991111','شهر بناب',1,1,'2026-08-17 14:19:47','2026-08-17 14:19:47'),(2,'دفتر','سارا جانبازی','09123331212','تهران','تهران','11111111','تهران ولیعصر',1,3,'2026-08-17 14:41:41','2026-08-17 14:41:41'),(3,'دفتر','arminjon','1111111111','کرمان','کرمان','11111111111','کرمان خیابان امام',1,6,'2026-08-18 10:21:52','2026-08-18 10:21:52');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `articles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'راهنمای انتخاب ساعت مردانه بر اساس استایل','rahnmay-antkhab-saaat-mrdanh-br-asas-astayl','1786975968-1.webp',NULL,'ساعت مچی یکی از مهم‌ترین اکسسوری‌های مردانه است و می‌تواند تأثیر زیادی روی استایل شما داشته باشد. برای استفاده رسمی معمولاً ساعت‌های کلاسیک با بند چرمی یا استیل انتخاب بهتری هستند. در مقابل، ساعت‌های اسپرت و دیجیتال برای استفاده روزمره و فعالیت‌های ورزشی مناسب‌ترند. هنگام خرید ساعت، علاوه بر ظاهر باید به اندازه صفحه، کیفیت ساخت، مقاومت در برابر آب و نوع موتور نیز توجه کنید. انتخاب درست باعث می‌شود ساعت علاوه بر نمایش زمان، بخشی از استایل شخصی شما باشد.',1,NULL,'2026-08-17 14:12:48','2026-08-17 14:12:48'),(2,'ساعت دیجیتال بهتر است یا آنالوگ؟','saaat-dygytal-bhtr-ast-ya-analog','1786975998-1 (Copy).webp',NULL,'ساعت‌های آنالوگ معمولاً طراحی کلاسیک‌تر و رسمی‌تری دارند و برای محیط کاری، جلسات و مهمانی‌ها مناسب هستند. ساعت‌های دیجیتال در مقابل امکانات بیشتری مانند کرنومتر، آلارم، نور صفحه و نمایش تاریخ ارائه می‌دهند. اگر ظاهر کلاسیک برای شما اهمیت بیشتری دارد، ساعت آنالوگ انتخاب مناسبی است. اما اگر به امکانات کاربردی و طراحی اسپرت علاقه دارید، ساعت دیجیتال می‌تواند گزینه بهتری باشد. در نهایت انتخاب بین این دو نوع ساعت به سبک زندگی و سلیقه شما بستگی دارد.',1,NULL,'2026-08-17 14:13:18','2026-08-17 14:13:18'),(3,'5 نکته مهم برای خرید ساعت زنانه','5-nkth-mhm-bray-khryd-saaat-znanh','1786976018-1 (Copy 5).webp',NULL,'در انتخاب ساعت زنانه ابتدا باید به اندازه ساعت و تناسب آن با مچ دست توجه کرد. ساعت‌های ظریف معمولاً برای استایل‌های رسمی مناسب هستند، در حالی که مدل‌های بزرگ‌تر ظاهر اسپرت‌تری دارند. جنس بند نیز اهمیت زیادی دارد و می‌تواند از استیل، چرم یا سیلیکون باشد. رنگ ساعت بهتر است با اکسسوری‌ها و لباس‌های پرکاربرد شما هماهنگ باشد. همچنین کیفیت موتور، مقاومت در برابر آب و اعتبار برند از مواردی هستند که بهتر است قبل از خرید بررسی شوند.',1,NULL,'2026-08-17 14:13:38','2026-08-17 14:13:38'),(4,'هنگام خرید ساعت برای کودکان به چه نکاتی توجه کنیم؟','hngam-khryd-saaat-bray-kodkan-bh-chh-nkaty-togh-knym','1786976041-1 (Copy 4).webp',NULL,'کودکان معمولاً به ساعت‌هایی با رنگ‌های شاد و طراحی جذاب علاقه دارند. با این حال ظاهر تنها معیار انتخاب نیست. بند ساعت باید نرم و راحت باشد و باعث ایجاد حساسیت روی پوست کودک نشود. مقاومت در برابر ضربه و آب نیز اهمیت زیادی دارد، زیرا ساعت کودکانه معمولاً در شرایط مختلف مورد استفاده قرار می‌گیرد. صفحه ساعت نیز بهتر است ساده و خوانا باشد تا کودک بتواند به‌راحتی زمان را تشخیص دهد. برای کودکان بزرگ‌تر می‌توان از ساعت‌های دیجیتال یا هوشمند نیز استفاده کرد.',1,NULL,'2026-08-17 14:14:01','2026-08-17 14:14:01'),(5,'7 نکته برای افزایش عمر ساعت مچی','7-nkth-bray-afzaysh-aamr-saaat-mchy','1786976062-1 (Copy 3).webp',NULL,'برای افزایش عمر ساعت بهتر است آن را از ضربه‌های شدید و تماس مستقیم با مواد شیمیایی دور نگه دارید. حتی اگر ساعت شما ضد آب است، میزان مقاومت آن در برابر آب را بررسی کنید. ساعت‌هایی با بند چرمی نباید برای مدت طولانی در معرض رطوبت قرار بگیرند. تمیز کردن دوره‌ای بند و بدنه ساعت نیز به حفظ ظاهر آن کمک می‌کند. بهتر است ساعت را زمانی که استفاده نمی‌کنید داخل جعبه مخصوص قرار دهید. همچنین تعویض باتری و سرویس ساعت باید توسط فرد متخصص انجام شود.',1,NULL,'2026-08-17 14:14:22','2026-08-17 14:14:22'),(6,'ساعت هوشمند بخریم یا ساعت مچی کلاسیک؟','saaat-hoshmnd-bkhrym-ya-saaat-mchy-klasyk','1786976082-1 (Copy 2).webp',NULL,'ساعت‌های هوشمند علاوه بر نمایش زمان امکاناتی مانند نمایش اعلان‌ها، پایش فعالیت‌های ورزشی و اندازه‌گیری برخی اطلاعات روزانه را ارائه می‌کنند. در مقابل، ساعت‌های کلاسیک معمولاً عمر طولانی‌تر، طراحی ماندگارتر و نیاز کمتری به شارژ دارند. اگر امکانات دیجیتال و اتصال به تلفن همراه برای شما اهمیت دارد، ساعت هوشمند انتخاب مناسبی است. اما برای افرادی که ظاهر کلاسیک و استفاده ساده را ترجیح می‌دهند، ساعت مچی سنتی همچنان انتخاب بسیار خوبی محسوب می‌شود.',1,NULL,'2026-08-17 14:14:42','2026-08-17 14:14:42');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'ساعت مردانه','saaat-mrdanh',1,'2026-08-17 13:47:51','2026-08-17 13:47:51'),(2,'ساعت زنانه','saaat-znanh',1,'2026-08-17 13:48:03','2026-08-17 13:48:03'),(3,'ساعت کودک','saaat-kodk',1,'2026-08-17 13:48:15','2026-08-17 13:48:15'),(5,'ساعت قدیمی','saaat-klasyk',1,'2026-08-17 13:48:42','2026-08-18 11:58:43');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
INSERT INTO `failed_jobs` VALUES (1,'71e63cbc-cc78-4fe4-9dbc-aee620a54fa0','database','default','{\"uuid\":\"71e63cbc-cc78-4fe4-9dbc-aee620a54fa0\",\"displayName\":\"App\\\\Jobs\\\\SendOrderConfirmationMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"deleteWhenMissingModels\":false,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendOrderConfirmationMail\",\"command\":\"O:34:\\\"App\\\\Jobs\\\\SendOrderConfirmationMail\\\":1:{s:5:\\\"order\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:16:\\\"App\\\\Models\\\\Order\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\",\"batchId\":null},\"createdAt\":1787048526,\"delay\":null}','InvalidArgumentException: View [email.order-confirmation] not found. in /var/www/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:138\nStack trace:\n#0 /var/www/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(78): Illuminate\\View\\FileViewFinder->findInPaths(\'email.order-con...\', Array)\n#1 /var/www/vendor/laravel/framework/src/Illuminate/View/Factory.php(150): Illuminate\\View\\FileViewFinder->find(\'email.order-con...\')\n#2 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(444): Illuminate\\View\\Factory->make(\'email.order-con...\', Array)\n#3 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(419): Illuminate\\Mail\\Mailer->renderView(\'email/order-con...\', Array)\n#4 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(312): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'email/order-con...\', NULL, NULL, Array)\n#5 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(211): Illuminate\\Mail\\Mailer->send(\'email/order-con...\', Array, Object(Closure))\n#6 /var/www/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(21): Illuminate\\Mail\\Mailable->{closure:Illuminate\\Mail\\Mailable::send():204}()\n#7 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(204): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#8 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(353): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#9 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(300): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\OrderConfirmationMail))\n#10 /var/www/vendor/laravel/framework/src/Illuminate/Mail/PendingMail.php(123): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\OrderConfirmationMail))\n#11 /var/www/app/Jobs/SendOrderConfirmationMail.php(26): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\OrderConfirmationMail))\n#12 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\SendOrderConfirmationMail->handle()\n#13 /var/www/vendor/laravel/framework/src/Illuminate/Container/Util.php(43): Illuminate\\Container\\BoundMethod::{closure:Illuminate\\Container\\BoundMethod::call():35}()\n#14 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 /var/www/vendor/laravel/framework/src/Illuminate/Container/Container.php(800): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 /var/www/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(136): Illuminate\\Container\\Container->call(Array)\n#18 /var/www/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(180): Illuminate\\Bus\\Dispatcher->{closure:Illuminate\\Bus\\Dispatcher::dispatchNow():133}(Object(App\\Jobs\\SendOrderConfirmationMail))\n#19 /var/www/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->{closure:Illuminate\\Pipeline\\Pipeline::prepareDestination():178}(Object(App\\Jobs\\SendOrderConfirmationMail))\n#20 /var/www/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(140): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#21 /var/www/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(155): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendOrderConfirmationMail), false)\n#22 /var/www/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->{closure:Illuminate\\Queue\\CallQueuedHandler::dispatchThroughMiddleware():148}(Object(App\\Jobs\\SendOrderConfirmationMail))\n#23 /var/www/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->{closure:Illuminate\\Pipeline\\Pipeline::prepareDestination():178}(Object(App\\Jobs\\SendOrderConfirmationMail))\n#24 /var/www/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(148): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#25 /var/www/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(86): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendOrderConfirmationMail))\n#26 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#27 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(559): Illuminate\\Queue\\Jobs\\Job->fire()\n#28 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(505): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#29 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(257): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#30 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(149): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#31 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(132): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#32 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#33 /var/www/vendor/laravel/framework/src/Illuminate/Container/Util.php(43): Illuminate\\Container\\BoundMethod::{closure:Illuminate\\Container\\BoundMethod::call():35}()\n#34 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#35 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#36 /var/www/vendor/laravel/framework/src/Illuminate/Container/Container.php(800): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#37 /var/www/vendor/laravel/framework/src/Illuminate/Console/Command.php(292): Illuminate\\Container\\Container->call(Array)\n#38 /var/www/vendor/symfony/console/Command/Command.php(284): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#39 /var/www/vendor/laravel/framework/src/Illuminate/Console/Command.php(261): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#40 /var/www/vendor/symfony/console/Application.php(1144): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 /var/www/vendor/symfony/console/Application.php(379): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 /var/www/vendor/symfony/console/Application.php(218): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 /var/www/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(198): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 /var/www/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1242): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 /var/www/artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#46 {main}','2026-08-18 10:22:09'),(2,'20bdad24-2500-4eb9-b625-ee626ec1efab','database','default','{\"uuid\":\"20bdad24-2500-4eb9-b625-ee626ec1efab\",\"displayName\":\"App\\\\Jobs\\\\SendOrderConfirmationMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"deleteWhenMissingModels\":false,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendOrderConfirmationMail\",\"command\":\"O:34:\\\"App\\\\Jobs\\\\SendOrderConfirmationMail\\\":1:{s:5:\\\"order\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:16:\\\"App\\\\Models\\\\Order\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}\",\"batchId\":null},\"createdAt\":1787053154,\"delay\":null}','InvalidArgumentException: View [emails.order-cofirmation] not found. in /var/www/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:138\nStack trace:\n#0 /var/www/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(78): Illuminate\\View\\FileViewFinder->findInPaths(\'emails.order-co...\', Array)\n#1 /var/www/vendor/laravel/framework/src/Illuminate/View/Factory.php(150): Illuminate\\View\\FileViewFinder->find(\'emails.order-co...\')\n#2 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(444): Illuminate\\View\\Factory->make(\'emails.order-co...\', Array)\n#3 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(419): Illuminate\\Mail\\Mailer->renderView(\'emails.order-co...\', Array)\n#4 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(312): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'emails.order-co...\', NULL, NULL, Array)\n#5 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(211): Illuminate\\Mail\\Mailer->send(\'emails.order-co...\', Array, Object(Closure))\n#6 /var/www/vendor/laravel/framework/src/Illuminate/Support/Traits/Localizable.php(21): Illuminate\\Mail\\Mailable->{closure:Illuminate\\Mail\\Mailable::send():204}()\n#7 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(204): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#8 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(353): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#9 /var/www/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(300): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\OrderConfirmationMail))\n#10 /var/www/vendor/laravel/framework/src/Illuminate/Mail/PendingMail.php(123): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\OrderConfirmationMail))\n#11 /var/www/app/Jobs/SendOrderConfirmationMail.php(26): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\OrderConfirmationMail))\n#12 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\SendOrderConfirmationMail->handle()\n#13 /var/www/vendor/laravel/framework/src/Illuminate/Container/Util.php(43): Illuminate\\Container\\BoundMethod::{closure:Illuminate\\Container\\BoundMethod::call():35}()\n#14 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 /var/www/vendor/laravel/framework/src/Illuminate/Container/Container.php(800): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 /var/www/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(136): Illuminate\\Container\\Container->call(Array)\n#18 /var/www/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(180): Illuminate\\Bus\\Dispatcher->{closure:Illuminate\\Bus\\Dispatcher::dispatchNow():133}(Object(App\\Jobs\\SendOrderConfirmationMail))\n#19 /var/www/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->{closure:Illuminate\\Pipeline\\Pipeline::prepareDestination():178}(Object(App\\Jobs\\SendOrderConfirmationMail))\n#20 /var/www/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(140): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#21 /var/www/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(155): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendOrderConfirmationMail), false)\n#22 /var/www/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(180): Illuminate\\Queue\\CallQueuedHandler->{closure:Illuminate\\Queue\\CallQueuedHandler::dispatchThroughMiddleware():148}(Object(App\\Jobs\\SendOrderConfirmationMail))\n#23 /var/www/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(137): Illuminate\\Pipeline\\Pipeline->{closure:Illuminate\\Pipeline\\Pipeline::prepareDestination():178}(Object(App\\Jobs\\SendOrderConfirmationMail))\n#24 /var/www/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(148): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#25 /var/www/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(86): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendOrderConfirmationMail))\n#26 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#27 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(559): Illuminate\\Queue\\Jobs\\Job->fire()\n#28 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(505): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#29 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(257): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#30 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(149): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#31 /var/www/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(132): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#32 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#33 /var/www/vendor/laravel/framework/src/Illuminate/Container/Util.php(43): Illuminate\\Container\\BoundMethod::{closure:Illuminate\\Container\\BoundMethod::call():35}()\n#34 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#35 /var/www/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#36 /var/www/vendor/laravel/framework/src/Illuminate/Container/Container.php(800): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#37 /var/www/vendor/laravel/framework/src/Illuminate/Console/Command.php(292): Illuminate\\Container\\Container->call(Array)\n#38 /var/www/vendor/symfony/console/Command/Command.php(284): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#39 /var/www/vendor/laravel/framework/src/Illuminate/Console/Command.php(261): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#40 /var/www/vendor/symfony/console/Application.php(1144): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 /var/www/vendor/symfony/console/Application.php(379): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 /var/www/vendor/symfony/console/Application.php(218): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 /var/www/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(198): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 /var/www/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(1242): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 /var/www/artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#46 {main}','2026-08-18 11:39:17');
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_08_14_070536_create-categories-table',1),(5,'2026_08_14_070611_create-products-table',1),(6,'2026_08_14_070640_create-addresses-table',1),(7,'2026_08_14_070736_create-orders-table',1),(8,'2026_08_14_070752_create-order_items-table',1),(9,'2026_08_14_070823_create-articles-table',1),(10,'2026_08_17_082210_add_is_admin_to_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` int unsigned NOT NULL,
  `price` bigint unsigned NOT NULL,
  `total` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,1,2,1,9400000,9400000,'2026-08-17 14:43:30','2026-08-17 14:43:30'),(2,1,1,1,6850000,6850000,'2026-08-17 14:43:30','2026-08-17 14:43:30'),(3,2,1,1,6850000,6850000,'2026-08-18 10:22:06','2026-08-18 10:22:06'),(4,3,2,1,9400000,9400000,'2026-08-18 11:39:13','2026-08-18 11:39:13'),(5,4,1,1,6850000,6850000,'2026-08-18 11:39:43','2026-08-18 11:39:43'),(6,5,1,2,6850000,13700000,'2026-08-18 13:15:43','2026-08-18 13:15:43');
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `address_id` bigint unsigned NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` bigint unsigned NOT NULL,
  `discount_amount` bigint unsigned NOT NULL DEFAULT '0',
  `shipping_cost` bigint unsigned NOT NULL DEFAULT '0',
  `final_price` bigint unsigned NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `tracking_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orders_order_number_unique` (`order_number`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_address_id_foreign` (`address_id`),
  CONSTRAINT `orders_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,3,2,'ORD-20260817144330-565O',16250000,538500,0,15711500,'pending','pending',NULL,'2026-08-17 14:43:30','2026-08-17 14:43:30'),(2,6,3,'ORD-20260818102206-S0IY',6850000,68500,0,6781500,'pending','pending',NULL,'2026-08-18 10:22:06','2026-08-18 10:22:06'),(3,6,3,'ORD-20260818113913-W65V',9400000,470000,0,8930000,'pending','pending',NULL,'2026-08-18 11:39:13','2026-08-18 11:39:13'),(4,6,3,'ORD-20260818113943-A5ZJ',6850000,68500,0,6781500,'pending','pending',NULL,'2026-08-18 11:39:43','2026-08-18 11:39:43'),(5,1,1,'ORD-20260818131543-BH76',13700000,137000,0,13563000,'pending','pending',NULL,'2026-08-18 13:15:43','2026-08-18 13:15:43');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
INSERT INTO `password_reset_tokens` VALUES ('armin@gmail.com','$2y$12$Gef6j0D0SX0Ae4Yy.HkLmOu8OdEOK6s59y7WrJIjHXi9/7UrW2VYO','2026-08-18 08:50:35'),('arminghofrani79@gmail.com','$2y$12$seaR4dxa7rtybClpJTwidu4JQb.N.rL80SPW89eg.YWWGmiHJL1.u','2026-08-18 06:59:19');
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint unsigned NOT NULL,
  `discount` int unsigned NOT NULL DEFAULT '0',
  `stock` int unsigned NOT NULL DEFAULT '0',
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Casio Edifice EFV-100','casio-edifice-efv-100',6850000,1,15,NULL,'ساعت Casio Edifice EFV-100 انتخابی مناسب برای استفاده روزمره و رسمی است. این مدل دارای بدنه استیل ضدزنگ، صفحه خوانا و شیشه مقاوم در برابر خط‌وخش است. مقاومت مناسب در برابر آب و طراحی جذاب آن باعث شده برای استفاده در محیط کار، مهمانی و فعالیت‌های روزمره گزینه مناسبی باشد.','1786974929-1.webp',1,0,1,'2026-08-17 13:55:29','2026-08-18 13:15:43'),(2,'Fossil Grant FS4813','fossil-grant-fs4813',9400000,5,8,NULL,'Fossil Grant FS4813 با ترکیب صفحه کلاسیک و بند چرمی، ظاهری رسمی و جذاب دارد. این ساعت مجهز به قابلیت کرنوگراف بوده و برای افرادی که به ساعت‌های کلاسیک با جزئیات مدرن علاقه دارند، انتخاب مناسبی محسوب می‌شود.','1786974965-2.webp',1,0,1,'2026-08-17 13:56:05','2026-08-18 11:39:13'),(3,'ساعت مردانه Tissot PRX','saaat-mrdanh-tissot-prx',28500000,5,10,NULL,'Tissot PRX یکی از مدل‌های محبوب این برند سوئیسی است که طراحی ظریف و مینیمالی دارد. بدنه و بند استیل، کیفیت ساخت بالا و ظاهر رسمی این مدل را به گزینه‌ای مناسب برای جلسات کاری و استایل‌های رسمی تبدیل کرده است.','1786975013-3.webp',1,0,1,'2026-08-17 13:56:53','2026-08-17 13:56:53'),(4,'ساعت زنانه Michael Kors Parker','saaat-znanh-michael-kors-parker',12900000,10,12,NULL,'Michael Kors Parker با طراحی لوکس و صفحه نگین‌کاری‌شده، مناسب استایل‌های رسمی و مجلسی است. بند استیل مقاوم، ترکیب رنگ جذاب و کیفیت ساخت بالا، این مدل را به گزینه‌ای مناسب برای استفاده شخصی یا هدیه تبدیل کرده است.','1786975050-4.webp',1,0,2,'2026-08-17 13:57:30','2026-08-17 13:57:30'),(5,'ساعت زنانه Fossil Carlie Mini','saaat-znanh-fossil-carlie-mini',8600000,1,12,NULL,'Fossil Carlie Mini برای افرادی طراحی شده که ساعت‌های ظریف و مینیمال را ترجیح می‌دهند. صفحه کوچک، بند فلزی زیبا و طراحی ساده این ساعت باعث شده برای استفاده روزمره و رسمی مناسب باشد.','1786975089-6.webp',1,0,2,'2026-08-17 13:58:09','2026-08-17 13:59:25'),(6,'ساعت کودکانه Q&Q Kids VS49','saaat-kodkanh-qq-kids-vs49',1250000,10,30,NULL,'ساعت رنگارنگ و مقاوم کودکانه مناسب استفاده روزمره.','1786975124-7.webp',1,0,3,'2026-08-17 13:58:44','2026-08-17 13:59:34'),(7,'ساعت  Skmei Digital 1451','saaat-skmei-digital-1451',1000000,12,20,NULL,'Skmei 1451 یک ساعت دیجیتال سبک و مقاوم برای کودکان است. این مدل دارای نمایش زمان دیجیتال، تاریخ، آلارم و نور پس‌زمینه است و برای مدرسه، ورزش و فعالیت‌های روزانه گزینه مناسبی محسوب می‌شود.','1786975325-8.webp',1,0,3,'2026-08-17 14:02:05','2026-08-17 14:02:17'),(8,'ساعت Casio G-Shock DW-5600','saaat-casio-g-shock-dw-5600',8000000,1,1,NULL,'این ساعت دارای کرنومتر، آلارم، نور پس‌زمینه و مقاومت عالی در برابر آب بوده و برای ورزشکاران و افرادی که سبک اسپرت دارند گزینه بسیار خوبی است.','1786975418-11.webp',1,0,1,'2026-08-17 14:03:39','2026-08-17 14:32:54'),(9,'Skmei 1251','skmei-1251',1000000,11,11,NULL,'ساعت دیجیتال اسپرت با طراحی مقاوم و امکانات کاربردی.\r\nتوضیحات: Skmei 1251 دارای طراحی اسپرت و بدنه مقاوم است. این ساعت امکاناتی مانند آلارم، کرنومتر، نمایش تاریخ و نور پس‌زمینه دارد و برای استفاده روزمره، باشگاه و فعالیت‌های فضای باز مناسب است.','1786975461-11.webp',1,0,5,'2026-08-17 14:04:21','2026-08-17 14:04:21');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('pfSqGTLSBITUT1CDyMh25fhqtpsi1jOTtv3YIDBy',NULL,'172.18.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJhWVM3YjRpRkxjTUsxMHdvSG1UaTU2VDJhNURRNXJSYzBZMWp0MUprIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvbG9jYWxob3N0OjgxMTIiLCJyb3V0ZSI6ImluZGV4In19',1787069948);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'آرمین غفرانی','armin@gmail.com',NULL,'$2y$12$bw4QPMQBPLyRkeVOVfg4We7.3j21Ik4Nlh/27N36Gfzi1zn/zDhDC',NULL,'2026-08-17 13:44:37','2026-08-18 07:42:59',1),(2,'Ali','ali@test.com',NULL,'$2y$12$Tw1.xXDdGJdaeEhMgxZ4cOkwP9qaqrSvRYv7iDnWGbquIkG6az6mK',NULL,'2026-08-17 14:36:45','2026-08-17 14:36:45',0),(3,'Sara','sara@test.com',NULL,'$2y$12$f5sHjcCKtNV9h7WSUGPpVuIMYcZ8h8/Qjl6kbMsLFSL//d1FwExRK',NULL,'2026-08-17 14:36:45','2026-08-17 14:36:45',0),(4,'Reza','reza@test.com',NULL,'$2y$12$butg6xLN3RFw84CrPgSRMexYbGs/0AQ0WtiSnKfweAhJZhA0/mhkC',NULL,'2026-08-17 14:36:46','2026-08-17 14:36:46',0),(5,'Maryam','maryam@test.com',NULL,'$2y$12$s5gMY9NY2Ng.lJmnMfJ.zepjxKYblW..AvGlp6tt.OPCmnouu9Ucq',NULL,'2026-08-17 14:36:46','2026-08-17 14:36:46',0),(6,'armi','arminghofrani79@gmail.com',NULL,'$2y$12$EGfW7BSxEoD9WOzlA8vcU.M8axRbunsjzJNOAsKB/ditV2GwS8wP2',NULL,'2026-08-18 06:38:07','2026-08-18 06:38:07',0);
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

-- Dump completed on 2026-08-18 17:41:10
